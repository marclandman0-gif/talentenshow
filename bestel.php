<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Talentenshow Homepage</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="index.html">
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
          <a class="nav-link" href="login.php">login</a>
        </li>

      </ul>
    </div>

  </div>
</nav>


<main>

</main>

<footer>

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