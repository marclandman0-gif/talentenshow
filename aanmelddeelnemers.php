<?php
require_once "db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $voornaam = $_POST['voornaam'];
    $tussenstuk = $_POST['tussenstuk'];
    $achternaam = $_POST['achternaam'];
    $geslacht = $_POST['geslacht'];
    $leeftijd = intval($_POST['leeftijd']);
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $straatnaam = $_POST['straatnaam'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $talent = $_POST['talent'];

$sql = "INSERT INTO aanmeldingen (
    voornaam,
    tussenstuk,
    achternaam,
    leeftijd,
    geslacht,
    email,
    telefoonnummer,
    postcode,
    straatnaam,
    huisnummer,
    woonplaats,
    talent
) VALUES (
    '$voornaam',
    '$tussenstuk',
    '$achternaam',
    '$leeftijd',
    '$geslacht',
    '$email',
    '$telefoonnummer',
    '$postcode',
    '$straatnaam',
    '$huisnummer',
    '$woonplaats',
    '$talent'
)";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: aanmelddeelnemers.php?success=1");
        exit();
    } else {
        echo "Fout: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Talentenshow Aanmelden</title>
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

        <!-- LINKS -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="bestel.php">Tickets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="aanmelddeelnemers.php">Aanmelden</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<main>
<div class="container mt-5 mb-5">

    <div class="p-4 border rounded shadow-sm bg-white">

        <h2 class="mb-4 text-center">Aanmelden voor de Talentenshow</h2>


                <!-- SUCCESS MELDING -->
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="alert alert-success">
                        Deelname gelukt! We kijken ernaar uit om jouw talent te zien op het podium. Je ontvangt binnenkort een bevestiging per e-mail.
                    </div>
                <?php endif; ?>

        <form action="aanmelddeelnemers.php" method="POST" class="row g-4">

            <!-- Persoonsgegevens -->
            <h4 class="mt-3 mb-1">Persoonsgegevens</h4>
            <hr>

            <div class="col-md-4">
                <label class="form-label">Voornaam</label>
                <input type="text" name="voornaam" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Tussenvoegsel (optioneel)</label>
                <input type="text" name="tussenstuk" class="form-control">
            </div>

            <div class="col-md-4">
                <label class="form-label">Achternaam</label>
                <input type="text" name="achternaam" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Geslacht</label>
                <select name="geslacht" class="form-select" required>
                    <option value="">-- Kies geslacht --</option>
                    <option value="man">Man</option>
                    <option value="vrouw">Vrouw</option>
                    <option value="magnetron">Magnetron</option>
                    <option value="anders">Anders</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Leeftijd</label>
                <input type="number" name="leeftijd" class="form-control" min="1" max="150" required>
            </div>

            <!-- Contactgegevens -->
            <h4 class="mt-4 mb-1">Contactgegevens</h4>
            <hr>

            <div class="col-md-6">
                <label class="form-label">E‑mailadres</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Telefoonnummer</label>
                <input type="text" name="telefoonnummer" class="form-control" required>
            </div>

            <!-- Adres -->
            <h4 class="mt-4 mb-1">Adres</h4>
            <hr>

            <div class="col-md-6">
                <label class="form-label">Straatnaam</label>
                <input type="text" name="straatnaam" class="form-control" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Huisnummer</label>
                <input type="text" name="huisnummer" class="form-control" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Postcode</label>
                <input type="text" name="postcode" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Woonplaats</label>
                <input type="text" name="woonplaats" class="form-control" required>
            </div>

            <!-- Talent -->
            <h4 class="mt-4 mb-1">Talent</h4>
            <hr>

            <div class="col-md-6">
                <label class="form-label">Categorie</label>
                <select name="talent" class="form-select" required>
                    <option value="">-- Kies een categorie --</option>
                    <option value="dans">Dans</option>
                    <option value="zang">Zang</option>
                    <option value="toneel">Toneel</option>
                    <option value="instrumentaal">Instrumentaal</option>
                </select>
            </div>

            <!-- Verstuur knop -->
<button type="submit" class="btn btn-primary w-100 py-2 fs-5">
    Reserveren en doorgaan
</button>

        </form>

    </div>

</div>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleMenu() {
        const nav = document.getElementById("myTopnav");
        const menu = document.getElementById("menuItems");
        const hamburger = document.getElementById("hamburger");

        menu.classList.toggle("show");
        hamburger.classList.toggle("open");
    }
</script>

</body>
</html>