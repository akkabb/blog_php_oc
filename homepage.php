<?php
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/dist/css/fontawesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Basic&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
    <link rel="stylesheet" href="../css/style.css">
    <!-- <title>Blog PHP Openclassrooms</title> -->
    <?php $title = "Blog PHP Openclassrooms"; ?>
</head>
<body>
    <!-- <?php //ob_start(); ?> -->
    <div class="container">
        <header>
            <a href="#" class="logo_link"><img src="img/logo.png" class="logo" alt="logo"></a>
            <nav class="menu">
                <ul class="menu_list">
                    <li><a href="http://localhost/p5_oc_blog/homepage.php">Accueil</a></li> 
                    <!-- <li><a href="http://localhost/p5_oc_blog/articles.php">Articles</a></li> -->
                    <li><a href="http://localhost/p5_oc_blog/templates/articles.php">Articles</a></li>
                    <li><a href="http://localhost/p5_oc_blog/login.php">Se connecter</a></li>
                    <li><a href="http://localhost/p5_oc_blog/register.php">S'inscrire</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="catch_phrase">
                <h1>Martin Birikorang</h1>
            </section>
            <section class="about_me">
            <h2>Bienvenue sur mon blog !</h2>
                <div class="about_sentences">
                    <p class="about_paragraph">
                        <span class="bracket">{</span>
                        Je suis étudiant Openclassrooms.
                        Dans le cadre du parcours <b>Développeur d'Applications PHP / Symfony</b>. 
                    </p>
                    <p class="about_paragraph">
                        Je réalise ce blog pour monter en compétence, et démontrer que je peux vous aider à réaliser le votre.
                    </p>
                    <p class="about_paragraph">
                        Ici, je serai ravi de vous partager mes réalisations. <br> Par la même occasion, je vous partagerai mes découvertes dans l'univers de la programmation informatique. 
                        Pour cela, n'hésitez pas à lire mes articles. 
                    </p>
                    <p>
                        Bonne découvertes et bonne lecture...
                        <span class="bracket">}</span>
                    </p>
                </div>
                <ul class="about_links">
                    <li class="about_githubLink about_link"><a href="https://github.com/akkabb" class="github_btn"><i class="fa fa-github" aria-hidden="true"></i>Mon Github</a></li>
                    <li class="about_cv about_link"><a href="img/CV/CV_dev.pdf" class="cv_btn"><i class="fa fa-file" aria-hidden="true"></i>Voir mon CV</a></li>
                    <li class="about_twitterLink about_link"><a href="https://twitter.com/" class="twitter_btn"><i class="fa fa-twitter" aria-hidden="true"></i>Mon Twitter</a></li>
                </ul>
            </section>
            <section class="contact_form">
                <h2>Me contacter</h2>
                <form action="index.php" method="POST">
                    <label for="email">mail</label>
                    <input type="email" name="email" id="email" value="<?= $email ?? '' ?>">
                    <?php //if ($errors['email']) : ?>
                        <!-- <p class="text_danger"><?= $errors['email'] ?></p> -->
                    <?php //endif; ?>
                    <br>
                    <div class="form_name">
                        <label for="firstname">prenom</label>
                        <input type="text" name="firstname" id="firstname" value="<?= $firstname ?? '' ?> ">
                        <?php //if ($errors['firstname']) : ?>
                            <!-- <p class="text_danger"><?= $errors['firstname'] ?></p> -->
                        <?php //endif; ?>
                        <label for="lastname">nom</label>
                        <input type="text" name="lastname" id="lastname" value="<?= $lastname ?? '' ?>">
                        <?php //if ($errors['lastname']) : ?>
                            <!-- <p class="text_danger"><?= $errors['lastname'] ?></p> -->
                        <?php //endif; ?>
                    </div>
                    <br>
                    <label for="message">message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    <?php //if ($errors['message']) : ?>
                        <!-- <p class="text_danger"><?= $errors['message'] ?></p> -->
                    <?php //endif; ?>
                    <br>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
            <!-- A consever pour utiliser pour les posts <img src="https://picsum.photos/200/300" alt="test image "> -->
        </main>
        
        <footer>
            <p class="footer">2023 © Tous droits réservés</p>
        </footer>
    </div>
    <!-- <?php //$content = ob_get_clean(); ?> -->

    <!-- <?php //require('layout.php')?> -->
</body>
</html>