
<div class="blogPost">
    <?php
    foreach($multiPost->getMultiPost() as $posts) {?>
        <h2><?php echo $posts->getTitle(); ?></h2>
        <p><b>Posted by <?php echo $posts->getUser()->getName(); ?> on <?php echo $posts->getDate(); ?></b></p>
        <p><?php echo $posts->getShortContent().'...<br><div class="blogLink"><a href="index.php?controller=blogPost&action=view&blogPostID='.$posts->getID().'">View full post</a></div>'; ?></p>
        <p id="keywords"><?php echo "Keywords: ";
        //echo implode(', ', $blogPost->getKeywords());
        $loop=0;
        $numberOfKeywords=count($posts->getKeywords());
        foreach($posts->getKeywords() as $keyword){
            $loop++;?>
            <a href="index.php?controller=search&action=view&keyword=<?php echo $keyword;?>">
                <?php echo $keyword;
                if($loop != $numberOfKeywords){
                    echo ", ";
                }?>
            </a><?php
        }?>
            <hr id="style1">
            <?php
    }?> 
</div>
