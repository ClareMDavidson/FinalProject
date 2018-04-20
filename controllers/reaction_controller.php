<?php

class reactionController {
    
    
 public function addLike(){
     require_once('models/reaction.php');
     $addLike = filter_input(INPUT_GET, 'like', FILTER_SANITIZE_STRING);
     $reactionPostID = filter_input(INPUT_GET, 'reactionPostID', FILTER_SANITIZE_STRING);
     filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
     $reaction = new Reaction($reactionPostID);
     if ($reaction->addLike($reactionPostID, $addLike)){
         header("Location: index.php?controller=blogPost&action=view&blogPostID=". $_GET['blogPostID']. "#comment". $_GET['reactionPostID']);
           }
           else {
               require_once("views/pages/error.php");
           }
           
        }
    }

