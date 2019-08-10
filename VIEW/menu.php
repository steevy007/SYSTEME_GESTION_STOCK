<div class="menu">
                    <center><span><i>Insertion</i></span></center>
                        <ul>
                        <?php
                           
                            if($username=='SANON'){
                               
                            
                           print' <li><a href="Error.php"> <img src="ICONES/icons8_Add_25px.png" alt=""> Client</a></li>';
                           print ' <li><a href="Error.php"> <img src="ICONES/icons8_Add_Property_25px.png" alt=""> Article</a></li>';
                            print ' <li><a href="Error.php"> <img src="ICONES/icons8_Add_Shopping_Cart_25px.png" alt=""> Achat</a></li>';
                       
                        }elseif($username=='STEEVE'){
                            print' <li><a href="ajouterclient.php"> <img src="ICONES/icons8_Add_25px.png" alt=""> Client</a></li>';
                            print ' <li><a href="ajouterarticle.php"> <img src="ICONES/icons8_Add_Property_25px.png" alt=""> Article</a></li>';
                             print ' <li><a href="effectuerachat.php"> <img src="ICONES/icons8_Add_Shopping_Cart_25px.png" alt=""> Achat</a></li>';
                        
                        }
                            ?>
                        </ul>
                        <center><span><i>Modification</i></span></center>
                        <ul>   <?php
                           
                           if($username=='SANON'){
                              
                           
                          print' <li><a href="Error.php"> <img src="ICONES/icons8_Add_25px.png" alt=""> Client</a></li>';
                          print ' <li><a href="Error.php"> <img src="ICONES/icons8_Add_Property_25px.png" alt=""> Article</a></li>';
                           print ' <li><a href="Error.php"> <img src="ICONES/icons8_Add_Shopping_Cart_25px.png" alt=""> Achat</a></li>';
                      
                       }elseif($username=='STEEVE'){
                        print' <li><a href="modifierclient.php"> <img src="ICONES/icons8_Add_25px.png" alt=""> Client</a></li>';
                        print ' <li><a href="modifierarticle.php"> <img src="ICONES/icons8_Add_Property_25px.png" alt=""> Article</a></li>';
                         print ' <li><a href="modifierachat.php"> <img src="ICONES/icons8_Add_Shopping_Cart_25px.png" alt=""> Achat</a></li>';
                    
                       }
                           ?></ul>
                            <center><span><i>Consultation</i></span></center>
                            <ul>
                                
                                    <li><a href="consulterclient.php"> <img src="ICONES/icons8_Add_25px.png" alt=""> Client</a></li>
                                    <li><a href="consulterarticle.php"> <img src="ICONES/icons8_Add_Property_25px.png" alt=""> Article</a></li>
                                    <li><a href="consulterachat.php"> <img src="ICONES/icons8_Add_Shopping_Cart_25px.png" alt=""> Achat</a></li>
                                </ul>
                    </div>