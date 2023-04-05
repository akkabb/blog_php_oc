<?php
// $tet = __DIR__;
// echo $tet;
include('config.php');
//session_start();
if (isset($_POST['submit']))
{
    // echo "Yes data submited";
    // Create variables to store email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    // sql to select form database
    $sql = "SELECT * FROM `user` WHERE `email` = ? AND `password` = ? ";
    // Execute the query
    $statement = $database->prepare($sql);
    // 
    $statement->execute([$email,$password]);
    $row = $statement->rowCount();
    $fetch = $statement->fetch();
    if ($row == 1)
    {
        if( $fetch['role'] = 1){
            header('location: http://localhost/p5_oc_blog/admin/home.php');
        }
        else{
            $_SESSION['loginMessage'] = '<span>Binvenue ' .$email. '</span>';
            header('location: http://localhost/p5_oc_blog/dashboard.php');
            exit();
        }
    }else{
        $_SESSION['noAdmin'] = '<span>'. $email . ' n\'est pas connu</span>'; 
        header('location: http://localhost/p5_oc_blog/login.php');   
        exit();
    }
}
/*
<?php
	session_start();
 
	require_once 'conn.php';
 
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['mem_id'];
				header("location: home.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
?>

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
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog PHP | Se Connecter </title>
</head>
<body>
    <?php
        if (isset($_SESSION['accountCreated'])){
            echo $_SESSION['accountCreated'];
            unset($_SESSION['accountCreated']);
        }
    ?>
    <div class="container">
        <header>
            <a href="#" class="logo_link"><img src="img/logo.png" class="logo" alt="logo"></a>
            <nav class="menu">
                <ul class="menu_list">
                    <li><a href="http://localhost/p5_oc_blog/homepage.php">Accueil</a></li> 
                    <li><a href="http://localhost/p5_oc_blog/articles.php">Articles</a></li>
                    <li><a href="http://localhost/p5_oc_blog/login.php">Se connecter</a></li>
                    <li><a href="http://localhost/p5_oc_blog/register.php">S'inscrire</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="form_login">
                <div class="overlay">
    
                </div>
                <div class="titleDiv">
                    <h2 class="login_title">Se connecter</h2>
                    <span class="login_subTitle">Welcome back</span>
                </div>
                <?php
                    if (isset($_SESSION['noAdmin']))
                    {
                        echo $_SESSION['noAdmin'];
                        unset($_SESSION['noAdmin']);
                    }
                ?>
                <form action="" method="POST">
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
                            <span class="registerLink">Vous êtes nouveau ici ? <a href="register.php">S'inscrire</a></span>
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