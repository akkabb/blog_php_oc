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
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog PHP | Se Connecter </title>
</head>
<body>
    <div class="container">
        <header>
            <a href="login.php">
                <img src="" alt="">
            </a>
            <nav>
                <ul>
                    <li><a href="">Se connecter</a></li>
                    <li><a href="">S'inscrire</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="login_register">
                <div class="overlay">
    
                </div>
                <div class="titleDiv">
                    <h2 class="login_title">Se connecter</h2>
                    <span class="login_subTitle">Welcome back</span>
                </div>
                <form action="" method="">
                    <div class="row grid">
                        <div class="row">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="loginEmail" placeholder="Entrez votre adresse mail">
                        </div>
                        <div class="row">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="loginPassword" placeholder="Entrez votre mot de passe" required>
                        </div>
                        <div class="row">
                            <input type="submit" name="submit" id="submitBtn" value="Se connecter" required>
                            <span class="registerLink">Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a></span>
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