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
    
    public function __construct($commentPostID=NULL) {
        try {
            if ($commentPostID!=NULL){
                $pdo = DB::getInstance();
                $stmt = $pdo->prepare("SELECT * FROM comment WHERE blogPostID = :blogPostID");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                $results = $stmt->fetch();
                $this->username = $results['username'];
                $this->userEmail = $results['userEmail'];
                $this->blogPostID = $results['blogPostID'];
                $this->commentPostID = $results['commentPostID'];
                $this->content = $results['content'];
                $this->timeCommented = $results['timeCommented'];
                $this->dateCommented = $results['dateCommented'];
                $this->commentScore = $results ['commentScore'];
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
        public function create($blogPostID, $username, $userEmail, $content){
            require_once('models/blogPost.php');
        try {
            $this->blogPostID = $blogPostID;
            $this->username = $username;
            $this->userEmail = $userEmail;
            $this->content = $content;
            $this->dateCommented = date('Y-m-d');
            $this->timeCommented = date('h:i');
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO comment(username, userEmail, content) VALUES (:username, :userEmail, :content)");
            $stmt->execute(array(
                "blogPostID" => $this->blogPostID, "username" => $this->username,"userEmail" => $this->userEmail, 
                "content" => $this->content, "dateCommented" => $this->dateCommented, "timeCommented" => $this->timeCommented
                ));
            $blogPost = new BlogPost($blogPostID);
//            $this->commentPostID = $pdo->lastInsertId(); 
            return true;
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
    public function addOneToScore(){
        $currentScore = $this->commentScore;
        $newScore = $currentScore + 1;
        try {
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO comment(commentScore)) VALUE (:newscore)");
            $stmt->execute(array(
                "commentPostID" => $this->blogPostID, "username" => $this->username,"userEmail" => $this->userEmail, 
                "content" => $this->content, "dateCommented" => $this->dateCommented, "timeCommented" => $this->timeCommented
                ));
//            $this->commentPostID = $pdo->lastInsertId(); 
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    public function minusOneToScore(){
        
    }
  }
    
    
