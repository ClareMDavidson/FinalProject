<?php
  class BlogPost {

    // we define 3 attributes
    private $blogPostID;
    private $title;
    private $post;
    private $date;
    private $keywords;

    public function __construct($blogPostID=NULL) {
        if ($blogPostID!=NULL){
            //Gayathri you will need to complete the constructor
        };
    }
    
    public function create($title, $post, $keywords){
        try {
            $this->title = $title;
            $this->post = $post;
            $this->keywords = $keywords;
            $this->date = date('Y-m-d');
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO blogPost(title, content, datePosted, keywords) VALUES (:title, :post, :date, :keywords)");
            $stmt->execute(array(
                "title" => $this->title,
                "post" => $this->post,
                "date" => $this->date,
                "keywords" => $this->keywords
                ));
            $this->blogPostID = $pdo->lastInsertId();
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }

        

  }