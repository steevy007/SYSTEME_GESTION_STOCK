<?php
  session_start();
  $username=$_SESSION['nom'];
  $password=$_SESSION['password'];
  require_once('../MODEL/Client.php');
  $cl=new Client("","","","","","","","","");
  $reponse=$cl-> listerCL($username,$password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
 
    <title>Consulter Client</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Consulter Client</h3>
                            </div>
                            <div class="el2">
                            <table class="mdl-data-table" id="example" style="width:100%">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
           <?php
            while($result=mysqli_fetch_array($reponse)){
           ?>
                <tr>
                    <td><?php print($result[0]); ?></td>
                    <td><?php print($result[1]); ?></td>
                    <td><?php print($result[2]); ?></td>
                    <td><?php print($result[3]); ?></td>
                    <td><?php print($result[4]); ?></td>
                    <td><?php print($result[5]); ?></td>
                    <td><?php print($result[6]); ?></td>
                    <td><?php print($result[7]); ?></td>
                    <td>
                                    
                                   
                                    <a href="../CONTROLLER/modifierclient.controller?ID=<?php print($result[0]); ?>" ><img src="ICONES/icons8_Edit_24px.png" alt="" title="Modifier <?php print($result[1])?>"></i></a>
                                    
                                </td>
                </tr>
           <?php
               }
           ?>
        </tbody>
        <tfoot>
            <tr>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Telephone</th>
            </tr>
            </tr>
        </tfoot>
    </table>
                                </div>
                    </div>
        </div>
    </div>
    
    <?php
        require_once('JS.php');
    ?>

    
</body>
</html>