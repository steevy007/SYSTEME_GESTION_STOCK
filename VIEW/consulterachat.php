<?php
  session_start();
  $username=$_SESSION['nom'];
  $password=$_SESSION['password'];
  require_once('../MODEL/achat.php');
  $AC=new achat("",0,0,0,0);
  $reponse=$AC->listerAC($username,$password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Consulter Achat</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Consulter Achat</h3>
                            </div>
                            <div class="el2">
                            <div class="panel">
        <div class="body">
            <div class="input-group">
                <label for="searchBox">Recherché</label>
                <input type="search" id="searchBox" placeholder="Recherché...">
            </div>
        </div>
    </div>
    <table class="myTable table hover">
    <thead>
            <tr style="font-size:9px;font-weight: bolder">
                <th>IDAchat</th>
                <th>IDClient</th>
                <th>IDArticle</th>
                <th>Q%</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>C-Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Tel</th>
                <th>N-Art</th>
                <th>Desc-Art</th>
                <th>Prix-Art</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($data=mysqli_fetch_array($reponse)){
            ?>
                    <tr style="font-size:8px;font-weight: bolder">
                        <td><?php print($data[0]) ?></td>
                        <td><?php print($data[1]) ?></td>
                        <td><?php print($data[2]) ?></td>
                        <td><?php print($data[3]) ?></td>
                        <td><?php print($data[4]) ?></td>
                        <td><?php print($data[6]) ?></td>
                        <td><?php print($data[7]) ?></td>
                        <td><?php print($data[8]) ?></td>
                        <td><?php print($data[9]) ?></td>
                        <td><?php print($data[10]) ?></td>
                        <td><?php print($data[11]) ?></td>
                        <td><?php print($data[12]) ?></td>
                        <td><?php print($data[14]) ?></td>
                        <td><?php print($data[15]) ?></td>
                        <td><?php print($data[16]) ?></td>
                        <?php
                        if($username=='STEEVE'){
                    ?>
                        <td> 
                      <a href="../CONTROLLER/modifierachat.controller?ID=<?php print($data[0]); ?>" ><img src="ICONES/icons8_Edit_16px.png" alt="" title="Modifier <?php print($data[1])?>"></i></a>           
                     </td>
                     <?php
               }
           ?>
                    </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot>
        <tr style="font-size:9px;font-weight: bolder">
                <th>IDAchat</th>
                <th>IDClient</th>
                <th>IDArticle</th>
                <th>Q%</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>C-Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Tel</th>
               
                <th>Desc-Art</th>
                <th>Prix-Art</th>
            </tr>
        </tfoot>
    
    </table> 
                                </div>
                    </div>
        </div>
    </div>
    <?php require_once('JS.php'); ?>
</body>
</html>