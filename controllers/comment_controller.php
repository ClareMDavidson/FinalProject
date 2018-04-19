<?php

class commentController {
  
    
//    public function writeComment() {
//        require_once('views/blogPost/viewBlogPost.php');
////         $blogPostID = isset($_GET['blogPostID']) ? $_GET['blogPostID'] : "";
//    }
    
    public function saveComment() {
        require_once('models/comment.php');
        require_once('models/blogPost.php');
        filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
        $content = isset($_POST['content']) ? $_POST['content'] : "";
        $content = nl2br($content);
        $comment = new Comment();
        //$blogPostID = isset($_GET['blogPostID']) ? $_GET['blogPostID'] : "";
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : "";
        if ($comment->create($_POST['blogPostID'], $username, $userEmail, $content)){
            //what does this mean^^
            //require_once('views/blogPost/viewBlogPost.php');
            header("Location: index.php?controller=blogPost&action=view&blogPostID=". $_POST['blogPostID']);
        }
        else{
            require_once('views/blogPost/viewBlogPost.php');
        }
    }
    public function alterScore(){
        require_once('models/comment.php');
        $scoreChange = filter_input(INPUT_GET, 'score', FILTER_SANITIZE_STRING);
        $commentPostID = filter_input(INPUT_GET, 'commentPostID', FILTER_SANITIZE_STRING);
        filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
        $comment = new Comment($commentPostID);
        if ($comment->alterScore($commentPostID, $scoreChange)){
            header("Location: index.php?controller=blogPost&action=view&blogPostID=". $_GET['blogPostID']. "#comment". $_GET['commentPostID']);
        }
        else {
            require_once('views/pages/error.php');
        }
    }
//    public function viewComment() {
//        require_once('models/comment.php');
//        //require_once('models/blogPost.php');
////        filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
////        $blogPost = new blogPost($_GET['blogPostID']);
//        //require_once('views/blogPost/viewBlogPost.php');
//        header("http://localhost/FinalProject/index.php?controller=blogPost&action=view&blogPostID=$blogPostID");
//    }
//
    public function viewUnapproved(){
        if (!empty ($_SESSION['username'])){
            require_once('models/commentList.php');
            require_once('models/comment.php');
            $commentList = new CommentList();
            require_once('views/blogPost/commentModeration.php');
        }
        else {
            require_once('views/pages/login.php');
        }
    }
    
    public function moderate(){
        require_once('models/comment.php');
        $decision = filter_input(INPUT_POST, 'moderate', FILTER_SANITIZE_STRING);
        $commentPostID = filter_input(INPUT_POST, 'commentPostID',FILTER_SANITIZE_STRING);
        $comment = new Comment($commentPostID);
        $comment->moderate($decision);
        header("Location: index.php?controller=comment&action=viewUnapproved");
    }
        
        
}
        