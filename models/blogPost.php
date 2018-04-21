<?php
  class BlogPost {
    private $blogPostID;
    private $title;
    private $content;
    private $date;
    private $keywords=array();
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
                $stmt = $pdo->prepare("SELECT keyword FROM keyword
                    INNER JOIN blogPostKeyword
                    ON keyword.keywordID = blogPostKeyword.keywordID
                    INNER JOIN blogPost
                    ON blogPostKeyword.blogPostID = blogPost.blogPostID
                    WHERE blogPost.blogPostID = :blogPostID");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                while ($keywordresults = $stmt->fetch()){
                    array_push($this->keywords, $keywordresults['keyword']);
                }
                $this->blogPostID = $results['blogPostID'];
                $this->title = $results['title'];
                $this->content = $results['content'];
                $this->date = $results['datePosted'];
                
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
            $stmt = $pdo->prepare("INSERT INTO blogPost(title, content, datePosted) VALUES (:title, :content, :date)");
            $stmt->execute(array(
                "title" => $this->title,
                "content" => $this->content,
                "date" => $this->date,
                //"keywords" => $this->keywords
                ));
            $this->blogPostID = $pdo->lastInsertId();
             $stmt = $pdo->prepare("INSERT IGNORE INTO keyword(keyword) VALUES (:keyword)");
            foreach($this->keywords as $keyword){
                $stmt->execute(array("keyword" =>$keyword));  
            }
            $stmt = $pdo->prepare("SELECT keywordID FROM keyword WHERE keyword = :keyword");
            $keywordstmt = $pdo->prepare("INSERT INTO blogPostKeyword(blogPostID, keywordID) VALUES (:blogPostID, :keywordID)");
            foreach($this->keywords as $keyword){
                $stmt->execute(array("keyword" =>$keyword));
                $keywordResult = $stmt->fetch();
                $keywordID= $keywordResult['keywordID'];
                $keywordstmt->execute(array("blogPostID" => $this->blogPostID, "keywordID" => $keywordID,));
            }
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
            $content = preg_replace('/\((.*?)\)\[(.*?)\]/', '<a href="\1" target="_blank">\2</a>', $content);
            $content = preg_replace('/\*\*(.*?)\*\*/', '<b>\1</b>', $content);
            $content = preg_replace('/\*(.*?)\*/', '<i>\1</i>', $content);
            $content = preg_replace('/\>\>(.*?)\>/', '<center>\1</center>', $content);
            return $content;
        }
    
    public function getShortContent()
        {
            $shortPost=substr($this->getContent(), 0, 800);
            //var_dump($shortPost);
            $shortPostParts=explode('<br />', $shortPost);
            //var_dump($shortPostParts);
            array_pop($shortPostParts);
            //var_dump($shortPostParts);
            $shortPost=implode('<br />', $shortPostParts);
            //var_dump($shortPost);
            return $shortPost;
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