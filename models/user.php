<?php
    class User {

        private $name;

        public function __construct($userID){
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("SELECT username FROM users WHERE users_id = :userID");
            $stmt->execute (["userID"=>$userID]);
            $results = $stmt->fetch();
            $this->name = $results['username'];
          }
          
        public function getName(){
            return $this->name;
        }
    }