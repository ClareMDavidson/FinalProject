<div class="archiveTitle"><h2 style="padding-top: 4px"><b><?php echo $_GET['month'] ?></b></h2></div>
<br>
<div class="blogPost">
    <?php
    foreach($archivePost->getArchivePost() as $posts) {?>
        <h2><?php echo $posts->getTitle(); ?></h2>
        <p><?php echo $posts->getContent(); ?></p>
        <p><b><?php echo "Posted on: ".$posts->getDate(); ?></b></p>
        <p><?php echo "Keywords: ".$posts->getKeywords(); ?></p>
            <hr id="style1">
            <?php
    }?> 
</div>
