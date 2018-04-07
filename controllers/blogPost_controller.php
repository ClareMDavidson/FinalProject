<?php

class blogPostController {
  
    
    public function write() {
        require_once('views/blogPost/createBlogPost.php');
    }
    
    public function save() {
        filter_input(INPUT_POST, 'Title', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Post', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Keywords', FILTER_SANITIZE_STRING);
        if (true){
            require_once('views/blogPost/viewBlogPost.php');
        }
        else{
            require_once('views/blogPost/createBlogPost.php');
        }
    }
    
}