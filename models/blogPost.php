<?php
  class BlogPost {
    private $blogPostID;
    private $title;
    private $content;
    private $date;
    private $keywords;
    private $comments=array();
    private $reactions=array();

    public function __construct($blogPostID=NULL) {
        try {
            if ($blogPostID!=NULL){
                //Gayathri you will need to complete the constructor
                $pdo = DB::getInstance();
                $stmt = $pdo->prepare("SELECT * FROM blogPost WHERE blogPostID = :blogPostID");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                $results = $stmt->fetch();
                $this->blogPostID = $results['blogPostID'];
                $this->title = $results['title'];
                $this->content = $results['content'];
                $this->date = $results['datePosted'];
                $this->keywords = $results ['keywords'];
                
                $stmt = $pdo->prepare("SELECT commentPostID from comment
                    WHERE blogPostID = :blogPostID AND approved = 'Yes'
                    ORDER BY commentPostID DESC;");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                while ($results = $stmt->fetch()){
                   $comment = new Comment($results ['commentPostID']);
                   array_push($this->comments, $comment);
                }
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
                                        require_once("models/reaction.php");
                $pdo = DB::getInstance();
                $stmt = $pdo->prepare("SELECT reactionPostID from reaction "
                        . "WHERE blogPostID = :blogPostID;");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                while ($results = $stmt->fetch()){
                $reactions = new Reaction($results ['reactionPostID']);
                array_push($this->reactions, $reactions);
    }}
    
    public function create($title, $content, $keywords){
        try {
            $this->title = $title;
            $this->content = $content;
            $this->keywords = $keywords;
            $this->date = date('Y-m-d');
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO blogPost(title, content, datePosted, keywords) VALUES (:title, :content, :date, :keywords)");
            $stmt->execute(array(
                "title" => $this->title,
                "content" => $this->content,
                "date" => $this->date,
                "keywords" => $this->keywords
                ));
            $this->blogPostID = $pdo->lastInsertId();
            $pdo = DB::getInstance();
            $stmt2 = $pdo->prepare("INSERT INTO reaction(blogPostID, liked, loved, wowed, angered) VALUES (:blogPostID, :liked, :loved, :wowed, :angered;)");
            $stmt2->execute(array(
            "blogPostID" => $this->blogPostID,
            "liked" => 0,
            "loved" => 0,
            "wowed" => 0,
            "angered" => 0,
                ));

            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    public function getTitle() 
        { 
            return $this->title;
        }
        
    public function getContent() 
        {
            $content = $this->content;
            $content = preg_replace('/\!\((.*?)\)/', '<img src="./views/images/userImages/\1" />', $content);
            $content = preg_replace('/\*\*(.*?)\*\*/', '<b>\1</b>', $content);
            $content = preg_replace('/\_(.*?)\_/', '<i>\1</i>', $content);
            $content = preg_replace('/\>\>(.*?)\>\>/', '<center>\1</center>', $content);
            return $content;
        }
    
     public function getKeywords() 
        { 
            return $this->keywords;
        } 
     public function getDate() 
        { 
            return $this->date;
        }
     public function getID() 
        { 
            return $this->blogPostID;
        }
    public function getComments() 
        { 
            return $this->comments;
        }  
    public function getReactions()
    {
        return $this->reactions;
    } 
  }