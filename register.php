<?php
    include('config.php');
    // Register a new account to the database and login with the same account later
    if (isset($_POST['submit']))
    {
        if ($_POST['firstname'] != "" || $_POST['usrname'] != "" || $_POST['passord'] != ''){
            //Create variables to store form elements 
            $username = $_POST['username'];
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
            if ($role = 2)
            {
                $role == "User";
            }else if ($role = 1){
                $role == "Admin";
            }
    
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to insert into
            
                $sql = "INSERT INTO `user`( `username`, `email`, `first_name`, `last_name`, `password`, `role`) 
                VALUES (:username, :email, :first_name, :last_name, :password, :role )";
            /*
                $sql = "INSERT INTO `user` (`username`, `email`, `first_name`, `last_name`, `password`)
                VALUES ('$username', '$email', '$firstname', '$lastname', '$password')";
            */
            // Execute query
            $statement = $database->prepare($sql);
        
            $affectedLInes = $statement->execute([
                ':username' => $username, 
                ':email' => $email, 
                ':first_name' => $firstname, 
                ':last_name' => $lastname,
                ':password' => $password,
            ':role' => $role,]);

            // message to show account created succefully...
            $_SESSION['accountCreated'] = '<span>' . $username . ' votre compte est créée !</span>';
            header('location: http://localhost/p5_oc_blog/login.php');
            exit();
        }else{
            $_SESSION['failedAccount'] = '<span>' . $username . ' La création de votre compte a echoué !</span>';
            header('location: http://localhost/p5_oc_blog/register.php');
            exit();
        }
        
    }

?>


<?php
/*
	session_start();
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `member` VALUES ('', '$firstname', '$lastname', '$username', '$password')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			header('location:index.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registration.php'</script>
            			";
		}
	}
*/
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
                <form action="" method="POST">
                    <div class="row grid"> 
                        <div class="row">
                            <label for="username">Nom d'utilistaeur</label>
                            <input type="text" name="username" id="" placeholder="Entrez votre nom d'utilisateur">
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
                            <input type="submit" name="submit" id="submitBtn" value="S'inscrire" required>
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