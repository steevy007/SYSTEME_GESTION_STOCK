<?php
    class Achat {
        private $id_achat;
        private $id_client;
        private $id_article;
        private $quantite;
        private $date;


        //constructeur de la classe

        public function __construct($id_achat,$id_client,$id_article,$quantite,$date){
            $this->id_achat=$id_achat;
            $this->id_client=$id_client;
            $this->id_article=$id_article;
            $this->quantite=$quantite;
            $this->date=$date;
        }


        //accesseur

        public function getid_achat(){return $this->id_achat;}
        public function getid_client(){return $this->id_client;}
        public function getid_article(){return $this->id_article;}
        public function getquantite(){return $this->quantite;}
        public function getdate(){return $this->date;}

        //mutateur

        public function setid_achat($id_achat){$this->id_achat=$id_achat;}
        public function setid_client($id_client){$this->id_client=$id_client;}
        public function setid_article($id_article){$this->id_article=$id_article;}
        public function setquantite($quantite){$this->quantite=$quantite;}
        public function setdate($date){$this->date=$date;}
    }
?>