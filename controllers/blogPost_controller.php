<?php

class blogPostController {
  
    
    public function write() {
        require_once('views/blogPost/createBlogPost.php');
    }
    
    public function save() {
        require_once('models/blogPost.php');
        filter_input(INPUT_POST, 'Title', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Post', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Keywords', FILTER_SANITIZE_STRING);
        $blogPost = new blogPost();
        if ($blogPost->create($_POST['Title'], $_POST['Post'], $_POST['Keywords'])){
            require_once('views/blogPost/viewBlogPost.php');
        }
        else{
            require_once('views/blogPost/createBlogPost.php');
        }
    }
    
}