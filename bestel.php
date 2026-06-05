<?php
require_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $std = intval($_POST['standardAmount']);
    $vip = intval($_POST['vipAmount']);
    $aantal_tickets = $std + $vip;

    $voornaam = $_POST['voornaam'];
    $tussenstuk = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $straatnaam = $_POST['straat'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];

    $sql = "INSERT INTO ticketverkoop
    (
        voornaam,
        tussenstuk,
        achternaam,
        email,
        telefoonnummer,
        postcode,
        straatnaam,
        huisnummer,
        woonplaats,
        aantal_tickets
    )
    VALUES
    (
        '$voornaam',
        '$tussenstuk',
        '$achternaam',
        '$email',
        '$telefoonnummer',
        '$postcode',
        '$straatnaam',
        '$huisnummer',
        '$woonplaats',
        '$aantal_tickets'
    )";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: bestel.php?success=1");
        exit();
    } else {
        echo "Fout: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/talentenshow logo - kopie.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bestelpagina voor de Talentenshow, waar bezoekers tickets kunnen bestellen voor het evenement.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Talentenshow Bestellen</title>
</head>
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
                    <a class="nav-link active" href="bestel.php">Tickets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="aanmelddeelnemers.php">Aanmelden</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<main>
<div class="container py-5">

    <div class="row g-5 justify-content-between">

        <!-- LINKERKANT (SMALLE FORM CARD) -->
        <div class="col-lg-7">

            <div class="p-4 border rounded shadow-sm bg-white" style="max-width: 650px;">

                <h1 class="mb-4">Bestelpagina</h1>

                <!-- SUCCESS MELDING -->
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="alert alert-success">
                        Je bestelling is succesvol verzonden!
                    </div>
                <?php endif; ?>

                <form action="bestel.php" method="POST" class="row g-4">

                    <!-- 1. Tickets -->
                    <h4 class="mt-2 mb-1">1. Selecteer je tickets</h4>
                    <hr>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Standaard ticket – €15,00</label>
                        <input type="number" id="standardAmount" name="standardAmount"
                               class="form-control" min="0" value="0">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">VIP ticket – €25,00</label>
                        <input type="number" id="vipAmount" name="vipAmount"
                               class="form-control" min="0" value="0">
                    </div>


                    <!-- 2. Gegevens -->
                    <h4 class="mt-4 mb-1">2. Jouw gegevens</h4>
                    <hr>

                    <div class="col-md-4">
                        <label class="form-label">Voornaam</label>
                        <input type="text" name="voornaam" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tussenvoegsel</label>
                        <input type="text" name="tussenvoegsel" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Achternaam</label>
                        <input type="text" name="achternaam" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">E-mailadres</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Telefoonnummer</label>
                        <input type="text" name="telefoonnummer" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Straatnaam</label>
                        <input type="text" name="straat" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Huisnummer</label>
                        <input type="text" name="huisnummer" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Postcode</label>
                        <input type="text" name="postcode" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Woonplaats</label>
                        <input type="text" name="woonplaats" class="form-control" required>
                    </div>


                    <!-- 3. Bevestiging -->
                    <h4 class="mt-4 mb-1">3. Bevestiging</h4>
                    <hr>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="privacy" required>
                        <label class="form-check-label" for="privacy">
                            Ik ga akkoord met de privacyverklaring.
                        </label>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100 py-2 fs-5">
                            Reserveren en doorgaan
                        </button>
                    </div>

                </form>

            </div>

        </div>


        <!-- RECHTERKANT (SIDEBAR) -->
        <div class="col-lg-4">

            <div class="border rounded p-3 shadow-sm bg-white">

                <h2 class="h4">Jouw reservering</h2>

                <img src="img/sidebar foto.png" alt="Evenement" class="img-fluid rounded mb-3">

                <h3 class="h5">The Stage Is Yours</h3>

                <p class="text-muted mb-1">26 oktober 2025</p>
                <p class="text-muted mb-1">19:30 uur</p>
                <p class="text-muted mb-3">Schaffelaar Theater, Barneveld</p>

                <div class="border-top pt-3">
                    <p class="mb-1" id="ticketLineStandard"></p>
                    <p class="mb-1" id="ticketLineVIP"></p>
                    <h3 class="h4" id="ticketTotal">€0,00</h3>
                </div>

            </div>

        </div>

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

<!-- TICKET UPDATE SCRIPT -->
<script>
function update() {
    let std = parseInt(document.getElementById("standardAmount").value) || 0;
    let vip = parseInt(document.getElementById("vipAmount").value) || 0;

    let total = std * 15 + vip * 25;

    document.getElementById("ticketLineStandard").textContent =
        std > 0 ? std + " x standaard ticket" : "";

    document.getElementById("ticketLineVIP").textContent =
        vip > 0 ? vip + " x VIP ticket" : "";

    document.getElementById("ticketTotal").textContent =
        "€" + total + ",00";
}

document.getElementById("standardAmount").oninput = update;
document.getElementById("vipAmount").oninput = update;

update();
</script>

</body>
</html>
