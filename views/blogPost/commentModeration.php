<div class="blogPost">
    <?php
        if (count($commentList->getCommentList())>0){ ?>

                <?php foreach($commentList->getCommentList() as $comment) { ?>
                <h2>Comment left on: <?php echo $comment->getPost()->getTitle();?></h2>
                <h5><b><?php echo $comment->getUsername(); ?></b></h5>
                <p><?php echo $comment->getContent(); ?></p>
                <h5><?php echo $comment->getTimeCommented() . " | " . $comment->getDateCommented(); ?></h5>

             <form action="index.php?controller=comment&action=moderate" method="POST">
                <p>Approve Comment:</p>
                <div class="moderate">    
                    <input type="hidden" name="commentPostID" value="<?php echo $comment->getCommentPostID();?>" />
                    <label for="radioButton1">Yes:</label>
                    <input type="radio" name="moderate" value="Yes" checked id="radioButton1" />
                    <label for="radioButton2">No:</label>
                    <input type="radio" name="moderate" value="No" id="radioButton2"/>
                </div>
                <div class="moderate">
                    <button type="submit" name="Submit" class="markup">Submit</button>
                </div>
                <p>Comments that are <b>not</b> approved will be deleted.</p>
                <hr>
            </form>
            <?php 
            }
        } else {
            echo '<h2>There are no comments waiting to be moderated</h2>';
        }
    ?>
</div>