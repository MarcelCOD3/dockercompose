<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

$lang = $_SESSION['lang'] ?? 'es';

$langTexts = [];

$pathLang = __DIR__ . '/../../assets/languages/' . $lang . '.php';
if (file_exists($pathLang)) {
    require $pathLang;
} else {
    require __DIR__ . '/../../assets/languages/es.php';
}
?>

<div class="app-layout">

    <aside class="sidebar">
        <div class="hugo-profile">
            <div class="hugo-avatar-container">
                <img src="/public/img/chatbot.gif"
                    alt="<?= $langTexts['hugo_avatar_alt'] ?? 'Avatar de Hugo' ?>">
            </div>
            <h2 class="langText"><?= $langTexts['hugo_name'] ?? 'Hugo' ?></h2>
            <p class="langText"><?= $langTexts['hugo_description'] ?? 'Tu asistente para Draftosaurus' ?></p>
            <div class="status">
                <span class="status-indicator"></span>
                <span class="langText"><?= $langTexts['hugo_online'] ?? 'En línea' ?></span>
            </div>
        </div>
    </aside>

    <main class="chat-panel">
        <div class="chat-box" id="chat-box">
            <div class="chat-message bot-message">
                <p class="langText"><?= $langTexts['bot_greeting'] ?? 'Hola, soy Hugo. ¿En qué puedo ayudarte?' ?></p>
            </div>
        </div>
        <footer class="chat-input-area">
            <input type="text" id="user-input" class="langText"
                placeholder="<?= $langTexts['user_input_placeholder'] ?? 'Escribe tu pregunta a Hugo...' ?>">
            <button id="send-button" class="langText"
                title="<?= $langTexts['send_button_title'] ?? 'Enviar Mensaje' ?>">
                <?= $langTexts['send_button'] ?? 'Enviar' ?>
            </button>
        </footer>
    </main>

</div>

<script src="/public/js/chatbot.js"></script>
<link rel="stylesheet" href="/public/css/views/chatbot.css">