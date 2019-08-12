<?php
    class Article{
        private $references_article;
        private $nom_article;
        private $description_article;
        private $prix_article;
        

        //constructeur de la classe

        public function __construct($references_article,$nom_article,$description_article,$prix_article){
            $this->references_article=$references_article;
            $this->nom_article=$nom_article;
            $this->description_article=$description_article;
            $this->prix_article=$prix_article;
        }

        //accesseur

        public function getreference_article(){return $this->references_article;}
        public function getnom_article(){return $this->nom_article;}
        public function getdescription_article(){return $this->description_article;}
        public function getprix_article(){return $this->prix_article;}

        //mutateur

        public function setreference_article($references_article){$this->references_article=$references_article;}
        public function setnom_article($nom_article){$this->nom_article=$nom_article;}
        public function setdescription_article($description_article){$this->description_article=$description_article;}
        public function setprix_article($prix_article){$this->prix_article=$prix_article;}


        public function inserer($nom,$pass){
            $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
            $insertion = "INSERT INTO articles(nom,description,prix) VALUES('".$this->nom_article."','". $this->description_article."','".$this->prix_article."')";
            $execution = mysqli_query($connexion, $insertion) or die(mysqli_error($connexion));
            if($execution){
                return true;
            }else{
                echo mysql_error();
            }
    }


    public function listerAR($nom,$pass){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $selectionner = "SELECT * FROM articles";
        $execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }


    public function listerID($nom,$pass,$id){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $selectionner = "SELECT * FROM articles where reference=$id";
        $execution = mysqli_query($connexion, $selectionner) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }

    public function Update($nom,$pass,$id){
        $connexion = mysqli_connect("localhost",$nom,$pass, "bon_bagay") or die(mysqli_error($connexion));
        $update = "UPDATE articles set nom='$this->nom_article',description='$this->description_article',prix='$this->prix_article' where reference=$id ";
        $execution = mysqli_query($connexion, $update) or die(mysqli_error($connexion));
        mysqli_close($connexion);
        return $execution;
    }


    }
?>