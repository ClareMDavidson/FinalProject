<?php
class CommentList {
    private $commentList=array();


    public function __construct(){
        //require_once('blogPost.php');
        try{
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("SELECT commentPostID FROM comment
                    WHERE approved IS NULL;");
                    $stmt->execute();
                    while ($results = $stmt->fetch()){
                       $comment = new Comment($results ['commentPostID']);
                       array_push($this->commentList, $comment);
                    }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    public function getCommentlist()
    {
        return $this->commentList;
    }
    
}