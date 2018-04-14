<?php
    foreach($multiPost->getMultiPost() as $posts) {?>
        <h2><?php echo $posts->getTitle(); ?></h2>
        <p><?php echo substr($posts->getContent(), 0, 300).'...<a href="http://localhost/FinalProject/index.php?controller=blogPost&action=view&blogPostID='.$posts->getID().'">CLICK TO READ MORE</a>'; ?></p>
        <p><b><?php echo "Posted on: ".$posts->getDate(); ?></b></p>
        <p><?php echo "Keywords: ".$posts->getKeywords(); ?></p><?php
    } 
 
