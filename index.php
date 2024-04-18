<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Accueil - </title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="config/include/banner/css/style.css">
</head>
<body>
  <!-- Debut de l'entete -->
    
  
      
  
          
    <!-- Fin de l'entete -->
    <header class="container-fluid position-fixed-top">
    <!-- Banner -->
      <?php

        require_once 'banner.php';
        
      ?>
  
    <!-- Fin du Banner -->
    </header>
    <!-- Contenu de la page -->

    </section>
    <!-- SECTION ACTUALITE -->

    <!-- Actualité -->
    
    <section class="section-actualite">
      <h3 class="text-center" style="margin: 10px 0;">-- Actualité du club --</h3>
      <div class="album py-5 bg-body-tertiary">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm"">
              <img src="assets/img/bg/Stadium-3.jpg"/>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
              <img src="assets/img/bg/stephen.jpg"/>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
              <img src="assets/img/img-bg-2.jpg"/>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <a href="pages/blog.php"><button class="btn btn-lg rounded-pill px-3d" id="btn-plus-actual">Voir plus</button></a>
    <!-- Actualité Fin -->


    <!-- SECTION ABONNEMENT -->
    <section class="section-abonnement row">
      <div class="col">
        <h3>Souscrire à un abonnement premium en tant que socio du club</h3>
        <p>vous souhaitez soutenir votre équipe de coeur et ainsi devenir un des membres essentiel du club, devenez socio du club en souscrivant moyennant de ce bouton en bas.</p>
        <i class="bi bi-arrow-right" style="font-size: 80px; color: #1ee76b;"></i>
      </div>
      <div class="col-sm-3 bloc1">
        <img src="assets/img/image3.JPG" alt="" class="img-fluid">
        <h4 class="mt-10">Super Fan</h4>
        <p>Devenez super fan et soutenez votre équipe de coeur en contribuant à son budget annuel</p>
        <button class="btn btn-souscribe">Souscrire</button>
        <span class="montant-abonnement">117$ / an</span>
      </div>
      
      <div class="col-sm-3 bloc1">
        <img src="assets/img/image1.JPG" alt="" class="img-fluid">
        <h4 class="mt-10">Ultra</h4>
        <p>Devenez ultra fan et soutenez votre équipe en participant à chaque match et en encourageant l'équipe</p>
        <button class="btn btn-souscribe">Souscrire</button>
        <span class="montant-abonnement">350$ / an</span>
      </div>

      <div class="col-sm-3 bloc1">
        <img src="assets/img/image5.JPG" alt="" class="img-fluid b-radius-3">
        <h4 class="mt-10">Socios</h4>
        <p>Devenez Socios et possedez une part du club tout en contribuant à sa croissance chaque année</p>
        <button class="btn btn-souscribe">Souscrire</button>
        <span class="montant-abonnement">2,870$ / an</span>
      </div>

    </section>

    <!-- Section presentation maillot -->
    <section class="section-maillot row mt-50">
      <div class="col-md-4 maillot-titre">
        <h1 class="title">Decouvrez notre collection des maillots pour cette année</h1>
        <p class="desc">Nous vous presentons nos maillots domicile, exterieur et troisième maillot pour cette saison
          <br><br>En achetant votre maillot dans la boutique, vous benefiez de plusieurs cadeau et surprises, alors hatez-vous et procurez-lvous le votre
        </p>
        <a href="https://shop.warriors.com/"></a><button class="btn btn-lg rounded-pill px-3d bouton">Visiter la boutique</button></a>
      </div>
      <div class="col-2"></div>
      <div class="col-md-6">
        <div id="maillotSlide" class="carousel slide mb-6 carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner"> 
            <div class="carousel-item active">
              <img src="assets/img/jersey/Plan de travail 1.png" class="bd-placeholder-img mx-auto d-block img-fluid" width="260" height="50%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
              
            </div>
            <div class="carousel-item">
              <img src="assets/img/jersey/Plan de travail 3.png" class="bd-placeholder-img mx-auto d-block img-fluid" width="260" height="50%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
              
            </div>
            <div class="carousel-item">
              <img src="assets/img/jersey/Plan de travail 2.png" class="bd-placeholder-img mx-auto d-block img-fluid" width="260" height="50%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
              
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#maillotSlide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"   style="background-color: #111010;"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#maillotSlide" data-bs-slide="next">
            <span class="carousel-control-next-icon text-dark" aria-hidden="true"  style="background-color: #0c0c0c;"></span>
            <span class="visually-hidden"">Next</span>
          </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Section newletter -->
    <section class="section-newsletter">
      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Abonnez-vous à newsletter pour ne rien rater sur le club</h1>
            <p class="col-lg-10 fs-4">En vous abonnant à notre newsletter, vous recevrez des nouvelles du club par mail et vous serez mis au courant de toutes les nouveautés du club dés leur publication.</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Address email</label>
              </div>
              <!-- <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div> -->
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">S'abonner</button>
              <hr class="my-4">
              <small class="text-body-secondary">En cliquant sur s'abonner, vous acceptez de recevoir des email.</small>
            </form>
          </div>
        </div>
      </div>
    </section>


    
  

    <!-- Fin Contenu de la page -->


    <!-- Debut du pied de page -->
    <?php
      include 'config/include/footer/footer.php';
    ?>
    <!-- Fin du pied de page -->

    <script src="js/main.js"></script>
    <script src="bootstrap-5.3.0-dist\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
    <script src="config/include/banner/js/main.js"></script>
</body>
</html>