<?php
class Comment {
    private $blogPostID;
    private $commentPostID;
    private $username;
    private $userEmail;
    private $content;
    private $timeCommented;
    private $dateCommented;
    private $commentScore;
    private $approved;
    private $post=NULL;
    
    public function __construct($commentPostID=NULL) {
        try {
            if ($commentPostID!=NULL){ 
                $pdo = DB::getInstance();
                $stmt = $pdo->prepare("SELECT * FROM comment WHERE commentPostID = :commentPostID");
                $stmt->execute (["commentPostID"=>$commentPostID]);
                $results = $stmt->fetch();
                $this->username = $results['username'];
                $this->userEmail = $results['userEmail'];
                $this->blogPostID = $results['blogPostID'];
                $this->commentPostID = $results['commentPostID'];
                $this->content = $results['content'];
                $this->timeCommented = $results['timeCommented'];
                $this->dateCommented = $results['dateCommented'];
                $this->commentScore = $results ['commentScore'];
                $this->approved = $results ['approved'];
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
        public function create($blogPostID, $username, $userEmail, $content){
            date_default_timezone_set('Europe/London');
            require_once('models/blogPost.php');
        try {
            $this->blogPostID = $blogPostID;
            $this->username = $username;
            $this->userEmail = $userEmail;
            $this->content = $content;
            $this->dateCommented = date("Y-m-d");
            $this->timeCommented = date("H:i");
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO comment(blogPostID, username, userEmail, content, dateCommented, timeCommented) VALUES (:blogPostID, :username, :userEmail, :content, :dateCommented, :timeCommented)");
            $stmt->execute(array(
                "blogPostID" => $this->blogPostID,
                "username" => $this->username,
                "userEmail" => $this->userEmail, 
                "content" => $this->content, 
                "dateCommented" => $this->dateCommented,
                "timeCommented" => $this->timeCommented
                ));
            //$blogPost = new BlogPost($blogPostID);
//            $this->commentPostID = $pdo->lastInsertId(); 
            return $blogPostID;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
//    public function getBlogPostID() 
//        { 
//            return $this->blogPostID;
//        }
//    public function getCommentPostID() 
//        { 
//            return $this->commentPostID;
//        }
    public function getUsername() 
        { 
            return $this->username;
        }
//    public function getUserEmail() 
//        { 
//            return $this->userEmail;
//        }    
    public function getContent() 
        { 
            return $this->content;
        }
   
    public function getTimeCommented() 
        { 
            return $this->timeCommented;
        } 

    public function getDateCommented() 
        { 
            return $this->dateCommented;
        }
     
    public function getScore() 
        { 
            return $this->commentScore;
        } 
    public function getCommentPostID(){
        return $this->commentPostID;
    }
    public function getApproved(){
        return $this->approved;
    }
    public function getPost(){
        require_once("models/blogpost.php");
        if(!isset($this->post)){
            $this->post=new BlogPost($this->blogPostID);
        } //only load the object when you need to use it, but once it's loaded reuse it.
        return $this->post;
    }
    
    public function alterScore($commentPostID,$scoreChange){
        try {
            $pdo=DB::getInstance();
            if($scoreChange=='plus'){
                $stmt = $pdo->prepare("UPDATE comment SET commentScore = commentScore + 1 WHERE CommentPostID = :commentPostID;");       
            } else {
                $stmt = $pdo->prepare("UPDATE comment SET commentScore = commentScore - 1 WHERE CommentPostID = :commentPostID;");
            }
            $stmt->execute(array("commentPostID"=>$commentPostID));
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
    public function moderate($decision){
        try{
            $pdo=DB::getInstance();
            if ($decision=='Yes'){
                $stmt = $pdo->prepare("UPDATE comment SET approved='Yes' WHERE commentPostID= :commentPostID;");
            } else {
                $stmt = $pdo->prepare("DELETE FROM comment WHERE commentPostID= :commentPostID;");
            }
            $stmt->execute(array("commentPostID"=>$this->commentPostID));
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }

}
    
