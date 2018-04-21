<?php
class MultiPostDisplay {
    private $multiPost=array();


    public function generateLastThreePosts(){
        require_once('blogPost.php');
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("SELECT blogPostID FROM blogPost ORDER BY datePosted DESC LIMIT 3");
        $stmt->execute();
        while ($results = $stmt->fetch()){
            $blogPost = new BlogPost($results ['blogPostID']);
            array_push($this->multiPost, $blogPost);
        }
    }
    
    public function generateByKeyword($keyword){
        require_once('blogPost.php');
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("SELECT blogPost.blogPostID
            FROM blogPost
            INNER JOIN blogPostKeyword
            ON blogPost.blogPostID = blogPostKeyword.blogPostID
            INNER JOIN keyword
            ON blogPostKeyword.keywordID = keyword.keywordID
            WHERE keyword.keyword = :keyword
            ORDER BY blogPost.datePosted DESC;");
        $stmt->execute(['keyword'=>$keyword]);
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