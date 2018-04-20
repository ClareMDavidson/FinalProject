
<div class="blogPost">
    <?php
    foreach($multiPost->getMultiPost() as $posts) {?>
        <h2><?php echo $posts->getTitle(); ?></h2>
        <p><?php echo $posts->getShortContent().'...<br><div class="blogLink"><a href="index.php?controller=blogPost&action=view&blogPostID='.$posts->getID().'">View full post</a></div>'; ?></p>
        <p><b><?php echo "Posted on: ".$posts->getDate(); ?></b></p>
        <p id="keywords"><?php echo "Keywords: ";
        echo implode(', ', $posts->getKeywords());?></p>
            <hr id="style1">
            <?php
    }?> 
</div>