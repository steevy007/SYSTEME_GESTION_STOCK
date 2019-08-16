<?php
session_start();
    require_once('MODEL/connexion.php');
    $message="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="VIEW/CSS/index.css">
    <title>Login</title>
</head>
<body>
<?php
                   
                   
                   if(isset($_POST['nom'])){
                       //$result=$con->connecter($_POST['nom'],$_POST['password']);
                       $con=new connexion("","");
                       $con->setUsername($_POST['nom']);
                       $con->setPassword($_POST['password']);
                       $reponse=$con->connecter($con->getUsername(),$con->getPassword());
                       if($reponse==true){
                           header('Location:VIEW/dashboard.php');
                       $_SESSION['nom']=$con->getUsername();
                       $_SESSION['password']=$con->getPassword();
                      
                       }else{
                           $message='Nom ou Mot de passe incorrect';
                       }
                   }
                  
               ?>
    <div class="content">
        <div class="box1">
            <form action="" <?php print($_SERVER['PHP_SELF']); ?> method="POST">
                <div class="f-inp">
                    <label for="nom">Votre Nom</label><br>
                    <input type="text" name="nom" required placeholder="votre nom">
                </div>
                <div class="f-inp">
                    <label for="password">Votre Password</label><br>
                    <input type="password" name="password" required placeholder="votre mot de passe">
                </div>
                
                <center style="color:red"><i><b><?php print $message ?></b></i></center>
                <div class="btn" style="margin-top: 5px">
                    <button type="submit" value="Connecter" name="btn">Connecter</button>
                </div>
            </form>
        </div>
     
    </div>
</body>
</html>