<?php
  class BlogPost {
    private $blogPostID;
    private $title;
    private $content;
    private $date;
    private $keywords;

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
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
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
            return $this->content;
        }
    
     public function getKeywords() 
        { 
            return $this->keywords;
        } 
     public function getDate() 
        { 
            return $this->date;
        }
  }