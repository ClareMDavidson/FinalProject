<h2><?php echo $blogPost->getTitle();?></h2>
<p><?php echo $blogPost->getContent(); ?></p>
<p><b><?php echo "Posted on: ". $blogPost->getDate(); ?></b></p>
<p><?php echo "Keywords: ".$blogPost->getKeywords(); ?></p>




<h2>Leave a Comment</h2>
<form action="index.php?controller=comment&action=saveComment" method="POST">
    <div class="form-label-group">
        <label for="username">Username:</label>
        <input class="form-control" id="Title" type="text" name="username" autofocus="true" required />
    </div>
     <div class="form--label-group">
                  <label class="control-label col-sm-2" for="userEmail">Email: </label>
                  <div class="col-sm-8"><input type="email"  class="form-control" maxlength="50" name="userEmail" placeholder="Type a valid e-mail address" required/> </div>
             </div>
    <div class="form-label-group">
        <label for="content">Comment</label>
        <textarea name="content" id="content" class="form-control" required /></textarea>
    </div>
        <button class="loginButton form-control hvr-fade" type="submit" name="Submit">Submit</button>
</form>

<!--comment section-->
<!--<a href="index.php?controller=comment&action=writeComment"> 
    Leave a Comment </a>-->
