<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Talentenshow Tickets</title>
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
    <div class="container py-5">

        <div class="row g-5">

            <!-- LINKERKANT -->
            <div class="col-lg-8">

                <h1>Bestelpagina</h1>

                <!-- 1. Tickets -->
                <h2 class="h4 mb-3">1. Selecteer je tickets</h2>

                <label class="form-label fw-bold">Standaard ticket – €15,00</label>
                <input type="number" id="standardAmount" class="form-control w-25 mb-3" min="0" value="0">

                <label class="form-label fw-bold">VIP ticket – €25,00</label>
                <input type="number" id="vipAmount" class="form-control w-25 mb-3" min="0" value="0">

                <!-- 2. Gegevens -->
                <div class="mb-4">
                    <h2 class="h4 mb-3">2. Jouw gegevens</h2>

                    <div class="row g-3">

                        <div class="col-md-4">
                            <label class="form-label">Voornaam</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Tussenvoegsel</label>
                            <input type="text" class="form-control" placeholder="(optioneel)">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Achternaam</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-12">
                            <label class="form-label">E-mailadres</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Straat + huisnummer</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Postcode</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Woonplaats</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>

                <!-- 3. Bevestiging -->
                <div class="mb-4">
                    <h2 class="h4 mb-3">3. Bevestiging</h2>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="privacy">
                        <label class="form-check-label" for="privacy">
                            Ik ga akkoord met de privacyverklaring.
                        </label>
                    </div>

                    <button class="btn btn-primary btn-lg">
                        Reserveren en doorgaan
                    </button>
                </div>

            </div>

            <!-- RECHTERKANT -->
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
</main>


<!-- FOOTER -->
<footer></footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

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