<div class="blogPost">
    <h2><?php echo $blogPost->getTitle();?></h2>
    <p><b><?php echo "Posted on: ". $blogPost->getDate(); ?></b></p>
    <p><?php echo $blogPost->getContent(); ?></p>
    <p id="keywords"><?php echo "Keywords: ".$blogPost->getKeywords(); ?></b></p>
</div>
<div class="sharethis-inline-share-buttons" id="socialmedia"></div>
<br />
<div class="col-sm-12" id="reactionbar" style="height:auto; margin: 0 auto; text-align: center">
<?php foreach($blogPost->getReactions() as $reaction){
echo '<h2 id="likeCount"style="display:inline">'. $reaction->getLikes() . '</h2>'; ?>
<a href="index.php?controller=reaction&action=addLike&=plus&reactionPostID=<?php echo $reaction->getReactionPostID();?>&blogPostID=<?php echo $blogPost->getID();?>" name="comment<?php echo $reaction->getReactionPostID();?>"> 
<?php echo '<img id="like" style="height: 40px; width: auto; display:inline;" src="views/images/like.png" alt="like"/></a>';
echo '<h2 id="loveCount" style="display:inline">'. $reaction->getLoves() . '</h2>';
echo '<img id="love" style="height: 40px; width: auto; display:inline;" src="views/images/love.png" alt="love"/>';
echo '<h2 id="wowCount" style="display:inline">' . $reaction->getWows() . '</h2>';
echo '<img id="wow" style="height: 40px; width: auto; display:inline;" src="views/images/wow.png" alt="wow"/>';
echo '<h2 id="angerCount" style="display: inline">' . $reaction->getAngers() . '</h2>';
echo '<img id="anger" style="height: 40px; width: auto; display:inline" src="views/images/anger.png" alt="anger"/>';
 }?> 
     </div>
<hr id="style1">
<p><b>Comments:</b></p> 
<?php
    foreach($blogPost->getComments() as $comment) { ?>
        <h5 align="left"><b><?php echo $comment->getUsername(); ?></b></h5>
        <p><?php echo $comment->getContent(); ?></p>
        <div class="row"><div class="col-sm-10"></div><div class="col-sm-2"><a href="index.php?controller=comment&action=alterScore&score=plus&commentPostID=<?php echo $comment->getCommentPostID();?>&blogPostID=<?php echo $blogPost->getID();?>" name="comment<?php echo $comment->getCommentPostID();?>"><img name="plus" style="height: 20px; width: auto;" src="views/images/uparrow.png"></a></div></div><p></p>
        <div class="row"><div class="col-sm-10"></div><div class="col-sm-2" style="float: right"><p><span id="score"><?php echo $comment->getScore();?></span></p></div></div>
        <div class="row"><div class="col-sm-10"></div><div class="col-sm-2"><a href="index.php?controller=comment&action=alterScore&score=minus&commentPostID=<?php echo $comment->getCommentPostID();?>&blogPostID=<?php echo $blogPost->getID();?>" name="comment<?php echo $comment->getCommentPostID();?>"><img name="minus" style="height: 20px; width: auto;" src="views/images/downarrow.png"></a></div></div>
        <h5><?php echo $comment->getTimeCommented() . " | " . $comment->getDateCommented()?></h5>    
        <hr>   
    <?php 
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

