<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$lang = $_SESSION['lang'] ?? 'es';
$nickname = $_SESSION['nickname'] ?? 'Jugador';


?>

<!doctype html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $langTexts['gameTitle'] ?? 'Draftosaurus - Game' ?></title>

    <link rel="icon" href="/public/img/dino.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/layouts/navbar.css">
    <link rel="stylesheet" href="/public/css/partials/board.css">
    <link rel="stylesheet" href="/public/css/layouts/footer.css">
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">

        <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>

        <main class="flex-grow-1">
            <section id="game" class="d-flex flex-column align-items-center py-5">

                <h2 class="mb-4 text-center page-title shadow-text">
                    <?= $langTexts['boardOf'] ?? 'Tablero de' ?> <?= htmlspecialchars($nickname) ?>
                </h2>

                <div id="tablero" class="container-fluid position-relative border border-3 rounded shadow-lg" style="background-image: url('/public/img/tableroJuego.jpg');
                           background-size: contain; background-position: center;
                           background-repeat: no-repeat; margin: 3vh auto;">

                    <div id="en-construccion" class="text-center text-light">
                        <span><?= $langTexts['comingSoon'] ?? 'Próximamente' ?></span>,
                        <span><?= $langTexts['underConstruction'] ?? 'en construcción' ?></span>
                    </div>

                    <div class="zona" id="zona1"></div>
                    <div class="zona" id="zona2"></div>
                    <div class="zona" id="zona3"></div>
                    <div class="zona" id="zona4"></div>
                    <div class="zona" id="zona5"></div>
                    <div class="zona" id="zona6"></div>
                    <div class="zona" id="zona7"></div>
                </div>

                <div id="downbar" class="w-100 d-flex justify-content-center mt-3">
                    <div id="barra-completa" class="p-3 rounded shadow-sm">

                        <div id="fichas" class="barra d-flex flex-wrap gap-2 justify-content-center">
                            <img src="/public/img/2d-blue.PNG" alt="ficha azul" class="ficha">
                            <img src="/public/img/2d-yellow.PNG" alt="ficha amarilla" class="ficha">
                            <img src="/public/img/2d-pink.PNG" alt="ficha rosa" class="ficha">
                            <img src="/public/img/2d-green.PNG" alt="ficha verde" class="ficha">
                            <img src="/public/img/2d-orange.PNG" alt="ficha naranja" class="ficha">
                            <img src="/public/img/2d-red.PNG" alt="ficha roja" class="ficha">
                        </div>

                        <div id="ajustes" class="d-flex gap-2 justify-content-center mt-2">
                            <button class="btngame btn-warning shadow-sm" id="btn-undo"
                                title="<?= $langTexts['undo'] ?? 'Deshacer' ?>">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                            <button class="btngame btn-warning shadow-sm" id="btn-redo"
                                title="<?= $langTexts['redo'] ?? 'Rehacer' ?>">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                            <button class="btngame btn-warning shadow-sm" id="btn-save"
                                title="<?= $langTexts['saveGame'] ?? 'Guardar Partida' ?>">
                                <i class="bi bi-save"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once __DIR__ . '/../layouts/footer.php'; ?>
    </div>

    <script src="/public/js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>