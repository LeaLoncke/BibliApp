<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bibli'App</title>
  <meta name="description" content="This is a web application for librarians.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="../icon.png">
  <link rel="icon" href="../icon.ico" />

  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <header class="navbar navbarMobile">
        <h1>Bibli'App</h1>
        <div class="dropdown">
            <img src="../assets/img/arrow-bottom.png" alt="Dropdown" id="dropdownButton">
            <div id="dropdownContent">
                <a href="../controllers/users.php">Utilisateurs</a>
                <a href="../controllers/index.php">Livres</a>
                <a href="../controllers/connexion.php">Déconnexion</a>
            </div>
        </div>
    </header>

    <header class="navbar navbarTabletDesktop">
      <h1>Bibli'App</h1>
      <ul>
          <li><a href="../controllers/users.php">Utilisateurs</a></li>
          <li><a href="../controllers/index.php">Livres</a></li>
          <li><a href="../controllers/connexion.php"><img src="../assets/img/deconnexion.png" alt="Button of deconnexion"></a></li>
      </ul>
    </header>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close"><img src="../assets/img/red-cross.png" alt="Click on the red cross for close pop-up"></span>
            <p>Le back fonctionne pas.</p>
        </div>
    </div>
