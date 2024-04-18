<!DOCTYPE html>
<html>
<head>
  <title>Galerie d'images</title>
  <link rel="stylesheet" href="../bootstrap-5.3.0-dist/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../font-awsome/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/galerie.css">
  
</head>
<body>
<div class="container-fluid">
    <div class="banner">
        <nav class="navbar">
          <div class="logo">
            <img src="../assets/img/img-logo.png" alt="Logo du site">
            <h1 class="site-title">Warriors Nation</h1>
          </div>
          <ul class="menu">
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="pages/blog.php">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="galerie.php">Gallery</a></li>
          </ul>
          <div class="buttons">
            <a href="pages/boutique.php" class="icon-button">
                <i class="bi bi-cart"></i>
            </a>
            <a href="panier.php" class="icon-button">
                <i class="bi bi-bell-fill"></i>
            </a>
            <a href="login.php" class="icon-button">
                <i class="bi bi-person-circle"></i>
            </a>
          </div>
        </nav>
        <div class="banner-content">
          <h1>Warrior Nation Shop</h1>
          <p></p>
        </div>
    </div>

    <div class="container">
      <h1>Galerie d'images</h1>
      <div class="row">
        <!-- Ici la boucle sert à generer 100 boites d'images -->
        <!-- Pour afficher chaque image en plein ecran, je vais y travailler à la maison et je t'enverai le bout de code -->
        <?php for ($i = 1; $i <= 100; $i++) { ?>
          <div class="col-md-3">
            <div class="image-box">
              <!-- Ici tu vas afficher les images qui sont dans les fichiers lié à la base de données -->
              <!-- Tout ce qui vas être affiché ici proviendra de la base de données  -->
              <img class="image" src="image-<?php echo $i; ?>.jpg" alt="Image <?php echo $i; ?>">
              <div class="image-details">
                <h5>Titre de l'image <?php echo $i; ?></h5>
                <p>Description de l'image <?php echo $i; ?></p>
                <p>Date de publication</p>
              </div>
              <div class="image-reactions">
                <i class="bi bi-hand-thumbs-up"></i>
                <i class="bi bi-chat-dots"></i>
                <i class="bi bi-share"></i>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/bootstrap-icons@1.7.3/icons/bootstrap-icons.min.js"></script>
</body>
</html>