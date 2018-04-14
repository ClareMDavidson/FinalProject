<?php
class MultiPostDisplay {
    private $multiPost=array();


    public function __construct(){
        require_once('blogPost.php');
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("SELECT blogPostID FROM blogPost ORDER BY datePosted DESC LIMIT 3");
                $stmt->execute();
                while ($results = $stmt->fetch()){
                   $blogPost = new BlogPost($results ['blogPostID']);
                   array_push($this->multiPost, $blogPost);
                }
    }
    public function getMultiPost()
    {
        return $this->multiPost;
    }
}