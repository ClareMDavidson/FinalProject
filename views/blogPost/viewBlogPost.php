<h2><?php echo $blogPost->getTitle();?></h2>
<p><?php echo $blogPost->getContent(); ?></p>
<p><b><?php echo "Posted on: ". $blogPost->getDate(); ?></b></p>
<p><?php echo "Keywords: ".$blogPost->getKeywords(); ?></p>

<hr id="style1">
<p><b>Comments:</b></p> 
    <?php
    foreach($blogPost->getComments() as $comment) {?>
<h5 align="left"><b><?php echo $comment->getUsername(); ?></b></h5>
        <p><?php echo $comment->getContent(); ?></p><br>
        <h5><?php echo $comment->getTimeCommented() . " | " . $comment->getDateCommented()?></h5>    
        <hr>   <?php
    } ?>


        <hr> 

<div class="col-sm-8" id="commentForm" style="height:auto; margin: 0 auto; align:center;">
<form action="index.php?controller=comment&action=saveComment" method="POST">
    <h4>Leave a Comment</h4><br>
    <input type="hidden" name="blogPostID" value="<?php echo $blogPost->getID();?>" />
    <div class="form-group">
        <input class="form-control"type="text" name="username" placeholder="Username" required />
<!--        <label for="username">Username:</label>-->
    </div>
    <div class="form-group">
        <input type="email"  class="form-control" maxlength="50" name="userEmail" placeholder="E-mail" required />
<!--        <label class="control-label col-sm-2" for="userEmail">Email: </label>     -->
    </div><br>
    <div class="form-group">
<!--        <label for="content">Comment</label><br /><br />-->
        <textarea name="content" id="content" class="form-control" placeholder="Comment" required /></textarea>
    </div>
        <button class="loginButton form-control hvr-fade" type="submit" name="Submit">Submit</button>
</form>
    </div>

