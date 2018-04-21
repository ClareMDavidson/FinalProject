<?php

class reactionController {
    
    
 public function addReaction(){
        require_once('models/blogPost.php');
        $reactionType = filter_input(INPUT_GET, 'reaction', FILTER_SANITIZE_STRING);
        $blogPostID = filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
        $blogPost = new blogPost();
        $blogPost->increaseReaction($blogPostID, $reactionType);
        ?>
           <script>
               window.location.replace("index.php?controller=blogPost&action=view&blogPostID=<?php echo $_GET['blogPostID'];?>");
           </script>
        <?php 
    }
    }

    
