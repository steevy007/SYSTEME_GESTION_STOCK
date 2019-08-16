<?php
    class Achat {
        private $id_achat;
        private $id_client;
        private $id_article;
        private $quantite;
        private $date;
        private $prix_Article;
        private $prix_total;

        //constructeur de la classe

        public function __construct($id_achat,$id_client,$id_article,$quantite,$date,$prix_Article,$prix_total){
            $this->id_achat=$id_achat;
            $this->id_client=$id_client;
            $this->id_article=$id_article;
            $this->quantite=$quantite;
            $this->date=$date;
            $this->prix_Article=$prix_Article;
            $this->prix_total=$prix_total;
        }


        //accesseur

        public function getid_achat(){return $this->id_achat;}
        public function getid_client(){return $this->id_client;}
        public function getid_article(){return $this->id_article;}
        public function getquantite(){return $this->quantite;}
        public function getdate(){return $this->date;}
        public function getprix_Article(){return $this->prix_Article;}
        public function getprix_total(){return $this->prix_total;}

        //mutateur

        public function setid_achat($id_achat){$this->id_achat=$id_achat;}
        public function setid_client($id_client){$this->id_client=$id_client;}
        public function setid_article($id_article){$this->id_article=$id_article;}
        public function setquantite($quantite){$this->quantite=$quantite;}
        public function setdate($date){$this->date=$date;}
        public function setprix_Article($prix_Article){ $this->prix_Article=$prix_Article;}
        public function setprix_total($prix_total){$this->prix_total=$prix_total;}


        public function listerIDCL($nom,$pass){
			$connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
			$selectionner = "SELECT numero FROM clients ";
			$execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
			mysqli_close($connexion);
			return $execution;
        }


        public function listerIDAR($nom,$pass){
			$connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
			$selectionner = "SELECT reference FROM articles ";
			$execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
			mysqli_close($connexion);
			return $execution;
        }

        public function inserer($nom,$pass){
            $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
            $this->prix_total=($this->prix_Article*$this->quantite);
            $insertion = "INSERT INTO achats(id_client,id_article,quantite,date,prix_article,prix_total) VALUES('".$this->id_client."','". $this->id_article."','".$this->quantite."',now(),'".$this->prix_Article."','".$this->prix_total."')";
            $execution = mysqli_query($connexion, $insertion) or die(mysqli_error($connexion));
            if($execution){
                return true;
            }else{
                echo mysql_error();
            }
    }

    public function listerAC($nom,$pass){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $selectionner = "SELECT * FROM achats, clients,articles WHERE  achats.id_client= clients.numero AND achats.id_article=articles.reference;";
        $execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }

    public function listerID($nom,$pass,$id){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $selectionner = "SELECT * FROM achats where id_achat=$id";
        $execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }
    
    public function listerprixAR($nom,$pass,$id){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $selectionner = "SELECT prix FROM articles where reference=$id";
        $execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
       
        while($data=mysqli_fetch_array($execution)){
            return $data[0];
        }
        mysqli_close($connexion);
        
    }

    public function Update($nom,$pass,$id){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $update = "UPDATE achats set quantite='$this->quantite' where id_achat=$id ";
        $execution = mysqli_query($connexion, $update) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }

    }
?>