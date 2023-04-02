<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/css/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Basic&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
    <link rel="stylesheet" href="style.css">
    <title>Blog PHP | S'inscrire</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="">
                <img src="" alt="">
            </a>
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="form_register">
                <div class="overlay">
    
                </div>
                <div class="titleDiv">
                    <h2 class="register_title">S'inscrire</h2>
                    <span class="login_subTitle">Merci de nous avoir choisi !</span>
                </div>
                <form action="" method="">
                    <div class="row grid"> 
                        <div class="row">
                            <label for="userName">Nom d'utilistaeur</label>
                            <input type="text" name="userName" id="" placeholder="Entrez votre nom d'utilisateur">
                        </div>
                        <div class="row">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="registerEmail" placeholder="Entrez votre adresse mail">
                        </div>
                        <div class="row">
                            <label for="firstname">Prénom</label>
                            <input type="text" name="firstname" id="registerFirstname" placeholder="Entrez votre prénom">
                        </div>
                        <div class="row">
                            <label for="lastname">Nom</label>
                            <input type="text" name="lastname" id="registerLastname" placeholder="Entrez votre nom">
                        </div>
                        <div class="row">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="loginPassword" placeholder="Entrez votre mot de passe" required>
                        </div>
                        <div class="row">
                            <input type="submit" name="submit" id="submitBtn" value="Se connecter" required>
                            <span class="registerLink">Vous avez déjà un compte ? <a href="login.php">Se connecter</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </main> 
        <footer>
            <p class="footer">2023 © Tous droits réservés</p>
        </footer>
    </div>
</body>