<?php
// -----------------------------
// FORM VERWERKEN
// -----------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Tickets
    $std = intval($_POST['standardAmount']);
    $vip = intval($_POST['vipAmount']);

    // Gegevens
    $voornaam = $_POST['voornaam'];
    $tussen = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $straat = $_POST['straat'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];

    // Je doet hier verder niets mee, alleen success tonen
    header("Location: bestel.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Tickets bestellen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container py-5">

    <div class="row g-5">

        <!-- LINKERKANT -->
        <div class="col-lg-8">

            <h1>Bestelpagina</h1>

            <!-- SUCCESS MELDING -->
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="alert alert-success">
                    Je bestelling is succesvol verzonden!
                </div>
            <?php endif; ?>

            <form action="bestel.php" method="POST">

                <!-- 1. Tickets -->
                <h2 class="h4 mb-3">1. Selecteer je tickets</h2>

                <label class="form-label fw-bold">Standaard ticket – €15,00</label>
                <input type="number" id="standardAmount" name="standardAmount" class="form-control w-25 mb-3" min="1" value="0">

                <label class="form-label fw-bold">VIP ticket – €25,00</label>
                <input type="number" id="vipAmount" name="vipAmount" class="form-control w-25 mb-3" min="1" value="0">

                <!-- 2. Gegevens -->
                <div class="mb-4">
                    <h2 class="h4 mb-3">2. Jouw gegevens</h2>

                    <div class="row g-3">

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

                        <div class="col-12">
                            <label class="form-label">E-mailadres</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Straatnaam:</label>
                            <input type="text" name="straat" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Huisnummer</label>
                            <input type="text" name="huisnummer" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Postcode</label>
                            <input type="text" name="postcode" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Woonplaats</label>
                            <input type="text" name="woonplaats" class="form-control" required>
                        </div>

                    </div>
                </div>

                <!-- 3. Bevestiging -->
                <div class="mb-4">
                    <h2 class="h4 mb-3">3. Bevestiging</h2>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="privacy" required>
                        <label class="form-check-label" for="privacy">
                            Ik ga akkoord met de privacyverklaring.
                        </label>
                    </div>

                    <button class="btn btn-primary btn-lg">
                        Reserveren en doorgaan
                    </button>
                </div>

            </form>

        </div>

        <!-- RECHTERKANT (SIDEBAR) -->
        <div class="col-lg-4">

            <div class="border rounded p-3 shadow-sm">

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
