<?php
    class Client{
        private $numero_client;
        private $nom_client;
        private $prenom_client;
        private $code_postal_client;
        private $ville_client;
        private $telephone_client;
        private $pays_client;
        private $adresse_client;
        
        //constructeur
        public function __construct($numero_client,$nom_client,$prenom_client,$code_postal_client,$ville_client,$telephone_client,$pays_client,$adresse_client){
            $this->numero_client=$numero_client;
            $this->nom_client=$nom_client;
            $this->prenom_client=$prenom_client;
            $this->code_postal_client=$code_postal_client;
            $this->ville_client=$ville_client;
            $this->telephone_client=$telephone_client;
            $this->pays_client=$pays_client;
            $this->adresse_client=$adresse_client;
        }

        //accesseur
        public function getnumero_client(){return $this->numero_client;}
        public function getnom_client(){return $this->nom_client;}
        public function getprenom_client(){return $this->prenom_client;}
        public function getcode_postal_client(){return $this->nom_client;}
        public function getville_client(){return $this->ville_client;}
        public function gettelephone_client(){return $this->telephone_client;}
        public function getpays_client(){return $this->pays_client;}
        public function getadresse_client(){return $this->adresse_client;}

        //mutateur
        public function setnumero_client($numero_client){$this->numero_client=$numero_client;}
        public function setnom_client($nom_client){$this->nom_client=$nom_client;}
        public function setprenom_client($prenom_client){$this->prenom_client=$prenom_client;}
        public function setcode_postal_client($code_postal_client){$this->code_postal_client=$code_postal_client;}
        public function setville_client($ville_client){$this->ville_client=$ville_client;}
        public function settelephone_client($telephone_client){$this->telephone_client=$telephone_client;}
        public function setpays_client($pays_client){$this->pays_client=$pays_client;}
        public function setadresse_client($adresse_client){$this->adresse_client=$adresse_client;}

        //fonction permettant d'inserer un client
        public function inserer($nom,$pass){
                $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
                $insertion = "INSERT INTO clients(nom,prenom,adresse,ville,pays,telephone,codepostal) VALUES('".$this->nom_client."','". $this->prenom_client."','".$this->adresse_client."','".$this->ville_client."','".$this->pays_client."','".$this->telephone_client."','".$this->code_postal_client."')";
                $execution = mysqli_query($connexion, $insertion) or die(mysqli_error($connexion));
                if($execution){
                    return true;
                }else{
                    echo mysql_error();
                }
        }

        public function listerID($nom,$pass,$id){
			$connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
			$selectionner = "SELECT * FROM clients where numero=$id";
			$execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
			mysqli_close($connexion);
			return $execution;
        }
        

        
        public function listerCL($nom,$pass){
			$connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
			$selectionner = "SELECT * FROM clients";
			$execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
			mysqli_close($connexion);
			return $execution;
        }
        
        public function Update($nom,$pass,$id){
			$connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
            $update = "UPDATE clients set nom='$this->nom_client',prenom='$this->prenom_client',adresse='$this->adresse_client',codepostal='$this->code_postal_client',ville='$this->ville_client',pays='$this->pays_client',telephone='$this->telephone_client' where numero=$id ";
			$execution = mysqli_query($connexion, $update) or die(mysqli_error($connexion));
			mysqli_close($connexion);
			return $execution;
        }
    }
    
?>