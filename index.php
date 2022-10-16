<?php

require __DIR__ . "/autoload.php";

$json = 'http://localhost/coronafactsmatter.github.io/studies.json';
$newCount = new App\Core\Datadisplayer($json);
?>

<head>
        <link rel="stylesheet" href="style.css">
        <script defer src="./src/fontawesome-free-6.2.0-web/js/brands.js"></script>
        <script defer src="./src/fontawesome-free-6.2.0-web/js/solid.js"></script>
        <script defer src="./src/fontawesome-free-6.2.0-web/js/fontawesome.js"></script>
</head>

<body class="entry">
        <div class="wrapper-header">
                <i class="fa-solid fa-mask fa-lg text-blue"></i>
                <h1 class="header">Superhelden gesucht</h1>
        </div>

        <div class="content">

                <div class="banner">
                        <img src="corona_aufklaeren_schuetzt.jpg" alt="corona aufklären schützt - Maske auf blauem Grund" width="100%" height="auto">
                        <div class="banner-overlay">
                                <h2>Werde zum Superheld</h2>
                                <p>Schütze dich und deine Mitmenschen im Alltag mit einfachen Mitteln und senke so das
                                        Risiko einer Infektion mit <strong>Covid-19</strong></p>
                        </div>
                </div>
                <!-- Banner Ende -->
                <div class="icon-container">
                        <h2 class="text-center">Superhelden nutzen</h2>
                        <div class="icon-container-child"></div>
                        <div class="neumorph text-center">
                                <i class="fa-solid fa-mask-face fa-2xl"></i>
                                <h3>Maske<br>tragen</h3>
                        </div>
                        <div class="neumorph text-center">
                                <i class="fa-solid fa-door-open fa-2xl"></i>
                                <h3>Regelmäßig<br>lüften</h3>
                        </div>
                        <div class="neumorph text-center">
                                <i class="fa-solid fa-wind fa-2xl"></i>
                                <h3>Luftfilter<br>nutzen</h3>
                        </div>
                        <div class="neumorph text-center">
                                <i class="fa-solid fa-vial-circle-check fa-2xl"></i>
                                <h3>serielle<br>PCR-Tests</h3>
                        </div>
                </div>
        </div>
        <!-- Icon Container Ende -->
        <div class="studies-container">
                <h2 class="text-white text-center">Folgen von Covid mit Studien</h2>
                <ul class="no-list">
                       <?php $newCount->showJsonData(); ?>
                </ul>
        </div>
        <!-- studies Ende -->
        <h2 class="text-white display-none">Vorbeugung</h2>

        <ul class="display-none">
                <li class="neumorph">Informationen über Aerosole <a href="https://t.co/F0dX8fojDK">Link</a></li>
                <li class="neumorph">Impfung senkt die Wahrscheinlichkeit von LongCovid <a href="https://t.co/WRqStkec2I">Link</a></li>

        </ul>
        <!-- Vorbeugung Ende -->
        </div>
</body>