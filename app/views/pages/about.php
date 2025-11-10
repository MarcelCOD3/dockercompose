<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
$statusMessage = '';

$lang = $_SESSION['lang'] ?? 'es';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $langTexts['aboutTitle'] ?? 'Draftosaurus - About Us' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/layouts/navbar.css">
    <link rel="stylesheet" href="/public/css/layouts/footer.css">
    <link rel="stylesheet" href="/public/css/views/about.css">
</head>

<body class="bg-black text-orange">

    <div id="navbar">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/layouts/navbar.php'; ?>
    </div>

    <main class="about-container container py-5">

        <?= $statusMessage ?>

        <section class="mb-5">
            <h1 class="text-center mb-3 title"><?= $langTexts['about_us_title'] ?? 'Sobre nosotros' ?></h1>
            <p class="text-center fs-5">
                <?= $langTexts['about_us_paragraph'] ?? 'Software-X Studio es un emprendimiento de base tecnológica orientado al desarrollo de soluciones digitales aplicadas al entretenimiento y la educación. Está conformado por un equipo multidisciplinario de jóvenes técnicos en informática y diseño, cuya propuesta combina innovación, accesibilidad y experiencia de usuario. El proyecto inicial consiste en la creación de una aplicación web llamada Draftosaurus App, una herramienta de apoyo para partidas del popular juego de mesa Draftosaurus. Esta aplicación automatiza el conteo de puntos, la aplicación de reglas y la gestión de partidas, mejorando la experiencia de los jugadores sin reemplazar la interacción física del juego.' ?>
            </p>

            <h3 class="mt-4"><i class="fa-solid fa-star me-2"></i><?= $langTexts['mission_title'] ?? 'Misión' ?></h3>
            <p class="text-center fs-5">
                <?= $langTexts['mission_text'] ?? 'Brindar soluciones digitales creativas y eficientes que potencien la experiencia de juego de los usuarios, con especial atención al diseño, la funcionalidad y el trabajo en equipo.' ?>
            </p>

            <h3 class="mt-3"><i class="fa-solid fa-star me-2"></i><?= $langTexts['vision_title'] ?? 'Visión' ?></h3>
            <p class="text-center fs-5">
                <?= $langTexts['vision_text'] ?? 'Ser reconocidos como una empresa innovadora dentro del sector de software aplicado al entretenimiento y aprendizaje, manteniendo una identidad fuerte, divertida y profesional.' ?>
            </p>
        </section>

        <section class="team mb-5">
            <h2 class="text-center mb-4"><?= $langTexts['team_title'] ?? 'Nuestro Equipo' ?></h2>

            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-5 d-flex justify-content-center mb-4">
                        <div class="member-card text-center p-3 bg-dark rounded shadow-sm h-100">
                            <img src="/public/img/team/marcos.png" alt="Marcos Sierra" class="mb-2"
                                width="150">
                            <h3 class="text-warning"><?= $langTexts['team_member_marcos'] ?? 'Marcos Sierra' ?></h3>
                            <p><?= $langTexts['team_marcos_desc'] ?? 'Coordinador del proyecto y diseñador creativo. Lidera el equipo y asegura que cada entrega mantenga la identidad del proyecto.' ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center mb-4">
                        <div class="member-card text-center p-3 bg-dark rounded shadow-sm h-100">
                            <img src="/public/img/team/nacho.png" alt="Juan Alonso" class="mb-2"
                                width="150">
                            <h3 class="text-warning"><?= $langTexts['team_member_juan'] ?? 'Juan Alonso' ?></h3>
                            <p><?= $langTexts['team_juan_desc'] ?? 'Subcoordinador y gestor operativo. Organiza la planificación y la comunicación del equipo de manera eficiente.' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-5 d-flex justify-content-center mb-4">
                        <div class="member-card text-center p-3 bg-dark rounded shadow-sm h-100">
                            <img src="/public/img/team/marcel.png" alt="Marcel Barrios" class="mb-2"
                                width="150">
                            <h3 class="text-warning"><?= $langTexts['team_member_marcel'] ?? 'Marcel Barrios' ?></h3>
                            <p><?= $langTexts['team_marcel_desc'] ?? 'Programador técnico y especialista en infraestructura. Se encarga de la estabilidad y el funcionamiento del sistema.' ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center mb-4">
                        <div class="member-card text-center p-3 bg-dark rounded shadow-sm h-100">
                            <img src="/public/img/team/vega.png" alt="Marcos Vega" class="mb-2"
                                width="150">
                            <h3 class="text-warning"><?= $langTexts['team_member_vega'] ?? 'Marcos Vega' ?></h3>
                            <p><?= $langTexts['team_vega_desc'] ?? 'Programador creativo. Desarrolla la interfaz y aporta ideas innovadoras para la experiencia del usuario.' ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mapa mb-5 text-center">
            <h2 class="mb-3"><?= $langTexts['location_title'] ?? 'Ubicación' ?></h2>
            <p><?= $langTexts['location_address'] ?? 'Colonia 2234, Montevideo, Uruguay' ?></p>
            <p>
                <?= $langTexts['location_site_text'] ?? 'Sitio web Sinergia:' ?>
                <a href="https://sinergia.uy/on-demand" target="_blank"
                    class="text-warning"><?= $langTexts['location_site_link'] ?? 'sinergia.uy/on-demand' ?></a>
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.364191154827!2d-56.17022972519513!3d-34.897308973061044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f80528cbf0935%3A0x2c6b4ddccc6d24bb!2sSinergia%20Design!5e0!3m2!1ses!2suy!4v1759782788456!5m2!1ses!2suy"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="contact mb-5">
            <h2 class="text-center mb-3"><?= $langTexts['contact_title'] ?? 'Contacto' ?></h2>
            <p class="text-center">
                <?= $langTexts['contact_text'] ?? '¿Tienes ideas, sugerencias o quieres colaborar? Escríbenos.' ?>
            </p>

            <?php
            if (!empty($_SESSION['contactMessage'])) {
                echo "<div class='alert {$_SESSION['contactMessage']['class']} text-center'>
                        {$_SESSION['contactMessage']['text']}
                      </div>";
                unset($_SESSION['contactMessage']);
            }
            ?>

            <form class="contact-form mx-auto" style="max-width:500px;"
                action="/public/index.php?page=about" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label"><?= $langTexts['contact_name'] ?? 'Nombre:' ?></label>
                    <input type="text" id="name" name="name" class="form-control"
                        placeholder="<?= $langTexts['contact_name_ph'] ?? 'Tu nombre...' ?>" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><?= $langTexts['contact_email'] ?? 'Correo:' ?></label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="<?= $langTexts['contact_email_ph'] ?? 'tunombre@email.com' ?>" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label"><?= $langTexts['contact_message'] ?? 'Mensaje:' ?></label>
                    <textarea id="message" name="message" class="form-control" rows="5"
                        placeholder="<?= $langTexts['contact_message_ph'] ?? 'Escribe tu mensaje...' ?>"
                        required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary text-black"
                        title="<?= $langTexts['contact_send_title'] ?? 'Enviar Mensaje' ?>">
                        <?= $langTexts['contact_send'] ?? 'Enviar Mensaje' ?>
                    </button>
                </div>
            </form>
        </section>

        <button id="chatbot-button" class="btn btn-primary text-black"
            title="<?= $langTexts['chatbot_help_title'] ?? 'Ayuda' ?>" data-bs-toggle="modal"
            data-bs-target="#chatbotModal">
            <?= $langTexts['chatbot_help_btn'] ?? 'Ayuda' ?>
        </button>

        <div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal-hugo">
                    <div class="modal-header">
                        <h5 class="modal-title" id="chatbotModalLabel">
                            <?= $langTexts['chat_with_hugo'] ?? 'Chat con Hugo' ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="<?= $langTexts['close'] ?? 'Cerrar' ?>"
                            title="<?= $langTexts['close'] ?? 'Cerrar' ?>"></button>
                    </div>
                    <div class="modal-body p-0">
                        <iframe src="/app/views/pages/chatbot.php"
                            style="width:100%; height:500px; border:none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div id="footer">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/layouts/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>