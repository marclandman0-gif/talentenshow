<?php
require_once "db.php";
$sql = "SELECT * FROM ticketverkoop";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Overzichtspagina voor de Talentenshow, waar de beheerder een overzicht kan zien van alle ticketbestellingen.">
    <title>Overzicht Tickets - Talentenshow</title>

    <link rel="icon" type="image/x-icon" href="img/talentenshow logo - kopie.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/talentenshow logo.png" alt="Logo">
            Talentenshow
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="overzichttickets.php">overzicht tickets</a></li>
                <li class="nav-item"><a class="nav-link" href="overzichtaanmeldingen.php">overzicht aanmeldingen</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>

    </div>
</nav>


<!-- MAIN CONTENT -->
<main>

    <h2 class="mb-4 text-center">Overzicht Ticketverkoop
    </h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Voornaam</th>
                <th>Tussenstuk</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Postcode</th>
                <th>Straatnaam</th>
                <th>Huisnummer</th>
                <th>Woonplaats</th>
                <th>Aantal tickets</th>
            </tr>
        </thead>

        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['voornaam']}</td>";
                echo "<td>{$row['tussenstuk']}</td>";
                echo "<td>{$row['achternaam']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['telefoonnummer']}</td>";
                echo "<td>{$row['postcode']}</td>";
                echo "<td>{$row['straatnaam']}</td>";
                echo "<td>{$row['huisnummer']}</td>";
                echo "<td>{$row['woonplaats']}</td>";
                echo "<td>{$row['aantal_tickets']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='13' class='text-center'>Geen gegevens gevonden</td></tr>";
        }
        ?>
            </tbody>
        </table>
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