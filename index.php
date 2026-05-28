<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talentenshow Homepage</title>

    <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/talentenshow logo.png" alt="Logo">
            Talentenshow
        </a>

        <!-- HAMBURGER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAV LINKS -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="bestel.php">Tickets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aanmelddeelnemers.php">Aanmelden</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>

    </div>
</nav>


<!-- MAIN CONTENT -->
<main>

    <!-- BANNER -->
    <div class="d-flex justify-content-center mt-4">
        <img src="img/talentenshow banner.png" class="img-fluid" alt="Talentenshow Banner" style="max-width: 600px;">
    </div>

    <div class="container mt-4">
        <div class="row">

            <!-- PRAKTISCHE INFO -->
            <div class="col-sm">
                <h2>Praktische informatie</h2>
                <p><strong>Datum:</strong> 24 mei 2025</p>
                <p><strong>Tijd:</strong> 19:30 uur</p>
                <p><strong>Locatie:</strong> Cultureel Centrum De Lichtbron, Utrecht</p>
                <p><strong>Deuren open:</strong> 18:30 uur</p>
                <p><strong>Categorieën:</strong> Zang, Dans, Instrumentaal en Toneel</p>
                <p><strong>Toegang:</strong> €15,00 per ticket</p>
                <p><strong>Leeftijd:</strong> Voor alle leeftijden</p>
            </div>

            <!-- OVER DE TALENTENSHOW -->
            <div class="col-sm">
                <h2>Over de Talentenshow</h2>
                <p><strong>ShowTime Live</strong> is een talentenshow waar jonge en ervaren artiesten hun passie kunnen laten zien aan publiek en jury. 
                Tijdens deze avond staan zang, dans, instrumentale acts en toneel centraal. 
                Het evenement biedt deelnemers de kans om hun talent te tonen, ervaring op te doen en een geweldige avond neer te zetten voor bezoekers. 
                Bezoekers kunnen genieten van entertainment, muziek en verrassende optredens van talenten uit de regio.</p>
            </div>

            <!-- OVER DE JURY -->
            <div class="col-sm">
                <h2>Over de Jury</h2>
                <p>De deelnemers worden beoordeeld door een professionele en enthousiaste jury met ervaring in muziek, dans en theater.</p>

                <h3>Juryleden:</h3>
                <ul>
                    <li><strong>Juryvoorzitter:</strong> Mark Janssen – Choreograaf en dansdocent</li>
                    <li><strong>Jurylid:</strong> Janine de Vries – Zangeres en vocal coach</li>
                    <li><strong>Jurylid:</strong> Tom de Groot – Muziekproducent en talentenscout</li>
                    <li><strong>Jurylid:</strong> Sophie van Leeuwen – Theaterregisseur en actrice</li>
                </ul>
            </div>

        </div>
    </div>

</main>


<!-- FOOTER -->
<footer class="mt-4">
    <div class="container">
        <div class="row">

            <div class="col">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bestel.php">Tickets</a></li>
                    <li><a href="aanmelddeelnemers.php">Aanmelden</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>

            <div class="col">
                2 of 2
            </div>

        </div>
    </div>
</footer>


<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleMenu() {
        const menu = document.getElementById("menuItems");
        const hamburger = document.getElementById("hamburger");

        menu.classList.toggle("show");
        hamburger.classList.toggle("open");
    }
</script>

</body>
</html>