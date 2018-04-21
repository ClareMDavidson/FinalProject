<?php

class Reaction{
    private $blogPostID;
    private $reactionPostID;
        private $liked;
    private $loved;
    private $wowed;
    private $angered;
    
    public function __construct($reactionPostID=NULL) {
            try {
        if ($reactionPostID!=NULL){
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("SELECT * FROM reaction WHERE reactionPostID = :reactionPostID");
            $stmt->execute(["reactionPostID"=>$reactionPostID]);
            $this->blogpostID = $results['blogPostID'];
            $this->liked = $results['liked'];
            $this->loved = $results['loved'];
            $this->wowed = $results['wowed'];
            $this->angered = $results['angered'];
        }
            } catch (Exception $ex) {
              echo $ex->getMessage().PHP_EOL;
            }
    
        } 
public function getReactionPostID(){
    return $this->reactionPostID;
}
    public function getLiked(){
        return $this->liked;
    }
    
    public function getLoved(){
        return $this->loved;
    }
    
    public function getWowed(){
        return $this->wowed;
    }
    
    public function getAngered(){
        return $this->angered;
    }
    
    public function addLike($reactionPostID,$addLike){
        try {
            $pdo=DB::getInstance();
            if($addLike=='plus'){
                $stmt = $pdo->prepare("UPDATE reaction SET liked = liked + 1 WHERE reactionPostID = :reactionPostID;");       
            }
            $stmt->execute(array("reactionPostID"=>$reactionPostID));
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
        public function addLove($reactionPostID,$addLove){
        try {
            $pdo=DB::getInstance();
            if($addLove=='plus'){
                $stmt = $pdo->prepare("UPDATE reaction SET loved = loved + 1 WHERE reactionPostID = :reactionPostID;");       
            }
            $stmt->execute(array("reactionPostID"=>$reactionPostID));
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
        public function addWow($reactionPostID,$addWow){
        try {
            $pdo=DB::getInstance();
            if($addWow=='plus'){
                $stmt = $pdo->prepare("UPDATE reaction SET wowed = wowed + 1 WHERE reactionPostID = :reactionPostID;");       
            }
            $stmt->execute(array("reactionPostID"=>$reactionPostID));
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
        public function addAnger($reactionPostID,$addAngered){
        try {
            $pdo=DB::getInstance();
            if($addAngered=='plus'){
                $stmt = $pdo->prepare("UPDATE reaction SET angered = angered + 1 WHERE reactionPostID = :reactionPostID;");       
            }
            $stmt->execute(array("reactionPostID"=>$reactionPostID));
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
            }