<div class="blogPost">
    <h2><?php echo $blogPost->getTitle();?></h2>
    <p><b>Posted by <?php echo $blogPost->getUser()->getName(); ?> on <?php echo $blogPost->getDate(); ?></b></p>
    <p><?php echo $blogPost->getContent(); ?></p>
    <p id="keywords">Keywords:
    <?php
        //echo implode(', ', $blogPost->getKeywords());
        $loop=0;
        $numberOfKeywords=count($blogPost->getKeywords());
        foreach($blogPost->getKeywords() as $keyword){
            $loop++;?>
            <a href="index.php?controller=search&action=view&keyword=<?php echo $keyword;?>">
                <?php echo $keyword;
                if($loop != $numberOfKeywords){
                    echo ", ";
                }?>
            </a><?php
        }?>
    </p>
        <h2 class="reactions" >
            <?php echo $blogPost->getLikes()?>
                <a href="index.php?controller=reaction&action=addReaction&reaction=like&blogPostID=<?php echo $blogPost->getID();?>">
                    <img src="views/images/reactions/like.png" alt="thumbs up" />
                </a>
            <?php echo $blogPost->getLoves()?>
                <a href="index.php?controller=reaction&action=addReaction&reaction=love&blogPostID=<?php echo $blogPost->getID();?>">
                    <img src="views/images/reactions/love.png" alt="thumbs up" />
                </a>
            <?php echo $blogPost->getWows()?>
            <a href="index.php?controller=reaction&action=addReaction&reaction=wow&blogPostID=<?php echo $blogPost->getID();?>">
                <img src="views/images/reactions/wow.png" alt="thumbs up" />
            </a>
            <?php echo $blogPost->getAngers()?>
                <a href="index.php?controller=reaction&action=addReaction&reaction=angry&blogPostID=<?php echo $blogPost->getID();?>">
                    <img src="views/images/reactions/anger.png" alt="thumbs up" />
                </a>
        </h2>
</div>
<br />
<br />
<br />
<div class="sharethis-inline-share-buttons" id="socialmedia"></div>
<br />
<hr id="style1">
<h6 style="text-align:left;font-size:1.5vw;text-indent:2%;">Comments:</h6><br>
<?php
    foreach($blogPost->getComments() as $comment) { ?>
        <h5 align="left" style="text-indent:5%"><b><?php echo $comment->getUsername(); ?></b></h5>
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