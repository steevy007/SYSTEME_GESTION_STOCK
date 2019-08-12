<?php
  session_start();
  $username=$_SESSION['nom'];
  $password=$_SESSION['password'];
  require_once('../MODEL/article.php');
  $Ar=new article("","","",0);
  $reponse=$Ar->listerAR($_SESSION['nom'],$_SESSION['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php'); ?>
    
    <title>Consulter Article</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Consulter Article</h3>
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
            <tr>
                <th>References</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <?php
            while($data=mysqli_fetch_array($reponse)){
        ?>
            <tr>
                <td><?php print($data[0]) ?></td>
                <td><?php print($data[1]) ?></td>
                <td><?php print($data[2]) ?></td>
                <td><?php print($data[3]) ?></td>
                <?php
                        if($username=='STEEVE'){
                    ?>
                    <td> 
                      <a href="../CONTROLLER/modifierarticle.controller?ID=<?php print($data[0]); ?>" ><img src="ICONES/icons8_Edit_24px.png" alt="" title="Modifier <?php print($data[1])?>"></i></a>           
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
            <tr>
            <tr>
            <th>References</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
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