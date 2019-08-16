<?php 
    class connexion{
        private $username;
        private $password;
        


        public function __construct($username,$password){
           $this->username=$username;
           $this->password=$password;
        }

        //definition des Accesseur
        public function getUsername(){return $this->username;}
        public function getPassword(){return $this->password;}

        //definition des mutateurs
        public function setUsername($username){$this->username=$username;}
        public function setPassword($password){$this->password=$password;}

        //methode permettant de faire la connexion;
        public function connecter($nom,$pass){
            if($nom=='SANON' and $pass=='comptable'){
                $link = mysqli_connect('localhost',$nom,$pass,'bon_bagay') or die(mysqli_error($link));
                return true;
            }elseif($nom=='STEEVE' and $pass=='vendeur'){
                $link = mysqli_connect('localhost',$nom,$pass,'bon_bagay') or die(mysqli_error($link));
                return true;
            }else{
                return false;
            }
          

        }

    }
?>