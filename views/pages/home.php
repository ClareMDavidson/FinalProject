
<div class="blogPost">
    <?php
    foreach($multiPost->getMultiPost() as $posts) {?>
        <h2><?php echo $posts->getTitle(); ?></h2>
        <p><?php echo substr($posts->getContent(), 0, 300).'...<br><div class="blogLink"><a href="http://localhost/FinalProject/index.php?controller=blogPost&action=view&blogPostID='.$posts->getID().'">View full post</a></div>'; ?></p>
        <p><b><?php echo "Posted on: ".$posts->getDate(); ?></b></p>
        <p><?php echo "Keywords: ".$posts->getKeywords(); ?></p>
            <hr id="style1">
            <?php
    }?> 
</div>
