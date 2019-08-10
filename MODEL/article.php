<?php
    class Article{
        private $references_article;
        private $nom_article;
        private $description_article;
        private $prix_article;
        

        //constructeur de la classe

        public function __construct($references_article,$nom_article,$description_article,$prix_article){
            $this->references_article=$references;
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
        public function setnom_article_article($nom_article){$this->nom_article=$nom_article;}
        public function setdescription_article($description_article){$this->description_article=$description_article;}
        public function setprix_article($prix_article){$this->prix_article=$prix_article;}
    }
?>