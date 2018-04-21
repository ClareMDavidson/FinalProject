<?php

    class searchController {
    
        public function view(){
            include_once ('models/multiPostDisplay.php');
            filter_input(INPUT_GET, 'keyword', FILTER_SANITIZE_STRING);
            $multiPost = new MultiPostDisplay();
            $multiPost->generateByKeyword($_GET['keyword']);
            include_once ('views/blogPost/search.php');
        }
    }
