<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/panier.css">
    <link rel="stylesheet" href="../font-awsome/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>
    <div class="banner">
        <nav class="navbar">
          <div class="logo">
            <img src="../assets/img/img-logo.png" alt="Logo du site">
            <h1 class="site-title">Warriors Nation</h1>
          </div>
          <ul class="menu">
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="blog.php">Blog</a></li>
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
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos dolore incidunt voluptates veritatis nihil nam rerum quia nostrum, quis dolor sequi ab neque, facilis possimus iure reprehenderit totam voluptatum autem?</p>
        </div>
    </div>



    <div class="container">
        <h1>Panier</h1>
        <table class="table">
        <thead>
            <tr>
            <th>Image</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Remplacer les lignes suivantes par une boucle pour afficher les articles du panier -->
            <tr>
            <td><img src="../assets/img/jersey/Plan de travail 1.png" alt="Maillot 1" width="200"></td>
            <td>Maillot domicile</td>
            <td>180 $</td>
            <td>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
            </tr>
            <tr>
            <td><img src="../assets/img/tracksuit/survet1.png" alt="Maillot 2" width="200"></td>
            <td>Maillot extérieur</td>
            <td>180 $</td>
            <td>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
            </tr>
            <tr>
            <td><img src="../assets/img/sneakers/sneaker2.png" alt="Maillot 2" width="200"></td>
            <td>Maillot extérieur</td>
            <td>180 $</td>
            <td>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
            </tr>
        </tbody>
        </table>
        <div class="text-end">
        <h5>Montant total: <span id="total-amount">$360</span></h5>
        </div>
        <div class="text-end">
        <button class="btn btn-primary">Valider la commande</button>
        <button class="btn btn-secondary">Annuler la commande</button>
        </div>
    </div>
    <br><br>
    <?php
        require_once '../config/include/footer/footer.php';
    ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>