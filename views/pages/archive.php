<?php
$posts = $archivePost->getArchivePost();
if (empty($posts)) {
    ?>
    <div class="blogPost">
        <h2>Sorry there are no archived blog posts for this month</h2><br>
        <h2>Please select another month</h2>
    </div>
    <?php } else {
    ?>
    <div class="archiveTitle"><h2 style="font-size:2.5vw;padding-top: 4px"><?php echo $_GET['month'] ?></h2></div>
    <br>
    <div class="blogPost">
        <?php foreach ($archivePost->getArchivePost() as $posts) { ?>
        
        <div class="blogLink"><h2><a href="index.php?controller=blogPost&action=view&blogPostID=<?php echo $posts->getID();?>"><?php echo $posts->getTitle();?></a></h2></div>                            
            <p><b>Posted by <?php echo $posts->getUser()->getName(); ?> on <?php echo $posts->getDate(); ?></b></p>
            <p><?php echo $posts->getContent(); ?></p>
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
            <?php }
        ?> 
    </div>
    <?php
}
?>