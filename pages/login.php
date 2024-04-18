<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../font-awsome/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow form-container">
            <div class="card-body">
                <h4 class="card-title mb-4 text-light">Connexion</h4>
                <form id="loginForm">
                <div class="form-group">
                    <label for="loginUsername">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="loginUsername" placeholder="Entrez votre nom d'utilisateur" required>
                </div>
                <div class="form-group">
                    <label for="loginEmail">Adresse email</label>
                    <input type="email" class="form-control text-light" id="loginEmail" placeholder="Entrez votre adresse email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Mot de passe</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="loginPrivacy" required>
                    J'accepte les règles de confidentialité
                    </label>
                </div>
                <div class="text-center">
                    <p class="form-subtitle text-light">Vous n'avez pas encore de compte ? <span class="toggle-form-link" onclick="toggleForm()">Inscrivez-vous ici</span></p>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
                </form>
        
                <form id="registerForm" style="display: none;">
                <h4 class="card-title mb-4 text-light">Inscription</h4>
                <div class="form-group">
                    <label for="registerUsername">Nom d'utilisateur</label>
                    <input type="text" class="form-control text-light" id="registerUsername" placeholder="Entrez votre nom d'utilisateur" required>
                </div>
                <div class="form-group">
                    <label for="registerGender">Sexe</label>
                    <select class="form-control text-light" id="registerGender" required>
                    <option value="" class="text-dark">Sélectionnez</option>
                    <option value="male" class="text-dark">Homme</option>
                    <option value="female" class="text-dark">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Adresse email</label>
                    <input type="email" class="form-control text-light" id="registerEmail" placeholder="Entrez votre adresse email" required>
                </div>
                <div class="form-group">
                    <label for="registerPhone">Téléphone</label>
                    <input type="text" class="form-control text-light" id="registerPhone" placeholder="Entrez votre numéro de téléphone" required>
                </div>
                <!-- <div class="form-group">
                    <label for="registerAddress">Adresse postale</label>
                    <textarea class="form-control" id="registerAddress" rows="3" placeholder="Entrez votre adresse postale" required></textarea>
                </div> -->
                <div class="form-group">
                    <label for="registerPassword">Mot de passe</label>
                    <input type="password" class="form-control text-light" id="registerPassword" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <label for="registerConfirmPassword">Confirmation du mot de passe</label>
                    <input type="password" class="form-control text-light" id="registerConfirmPassword" placeholder="Confirmez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="registerTerms" required>
                    J'accepte les conditions d'utilisation
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        </div>
    </div>

    <script src="../assets/js/login.js"></script>
</body>
</html>