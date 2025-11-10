<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Dotenv\Dotenv;

class MessageController
{
    private $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
        if (file_exists(__DIR__ . '/../../.env')) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
        }
    }

    public function sendMessage($name, $email, $message)
    {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) 
            FROM ContactMessages 
            WHERE email = ? AND DATE(sent_at) = CURDATE()
        ");
        $stmt->execute([$email]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $_SESSION['contactMessage'] = [
                'text' => "Solo puedes enviar un mensaje por día.",
                'class' => "alert-danger"
            ];
            return false;
        }

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->Port = $_ENV['SMTP_PORT'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];

        $mail->setFrom($_ENV['SMTP_USER'], 'Draftosaurus Contacto');
        $mail->addAddress($_ENV['CONTACT_EMAIL']); // tu correo de contacto en .env
        $mail->Subject = "Nuevo mensaje de contacto";
        $mail->Body = "Nombre: $name\nEmail: $email\nMensaje:\n$message";

        if ($mail->send()) {
            $stmt = $this->db->prepare("
                INSERT INTO ContactMessages (name, email, message) 
                VALUES (?, ?, ?)
            ");
            $stmt->execute([$name, $email, $message]);

            $_SESSION['contactMessage'] = [
                'text' => "Mensaje enviado correctamente.",
                'class' => "alert-success"
            ];
            return true;
        } else {
            $_SESSION['contactMessage'] = [
                'text' => "Error al enviar el mensaje.",
                'class' => "alert-danger"
            ];
            return false;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message']) && $page === 'about') {
    $controller = new MessageController();
    $controller->sendMessage($_POST['name'], $_POST['email'], $_POST['message']);

    header("Location: /public/index.php?page=about#contact");
    exit();
}

?>
