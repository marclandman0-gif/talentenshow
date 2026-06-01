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



</main>


<!-- FOOTER -->
<footer class="bg-light text-dark mt-5 pt-4 pb-4">
    <div class="container">
        <div class="row">

            <!-- Navigatie -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Navigatie</h5>
                <ul>
                    <li><a href="index.php" class="text-dark text-decoration-none">Home</a></li>
                    <li><a href="bestel.php" class="text-dark text-decoration-none">Tickets</a></li>
                    <li><a href="aanmelddeelnemers.php" class="text-dark text-decoration-none">Aanmelden</a></li>
                    <li><a href="login.php" class="text-dark text-decoration-none">Login</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Contact</h5>
                <p class="mb-1">Talentenshow Organisatie</p>
                <p class="mb-1">E-mail: info@talentenshow.nl</p>
                <p class="mb-1">Telefoon: 06-12345678</p>
            </div>

            <!-- Copyright -->
            <div class="col-md-4 mb-3 text-md-end text-center">
                <h5 class="text-uppercase">© 2026 Talentenshow</h5>
                <p class="mb-0">Alle rechten voorbehouden</p>
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