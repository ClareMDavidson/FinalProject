<form action="index.php?controller=blogPost&action=save" method="POST">
    <div class="form-label-group">
        
        <input class="form-control" id="Title" type="text" placeholder="Title" name="Title" autofocus="true" required />
        <label for="Title">Post Title:</label>
    </div>
    <div class="form-label-group">
        <label for="Content">Blog Post</label><br /><br />
        <textarea name="Content" id="Content" placeholder="Write your blog post here" class="form-control" required /></textarea>
    </div>
    <div class="form-label-group">
        <input class="form-control" id="Keywords" type="text" placeholder="Keywords" name="Keywords" placeholder="Add keywords, seperated by a comma">
        <label for="Keywords">Keywords</label>
    </div>
    <button class="loginButton form-control hvr-fade" type="sumbit" name="Submit">Submit</button>
</form>
<!--<form action="index.php?controller=image&action=upload" method="POST" enctype="multipart/form-data">
    <div class="">
    <label for="Image">Image Uploader (jpeg, png or gif files only):</label>
    <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <input class="form-control" type="file" name="myfile" />
    </div>
    <button class="loginButton form-control hvr-fade" type="sumbit" name="Submit">Submit Image</button>
</form>-->



<!-- <input type="text" value="name" onfocus="this.value = this.value=='name'?'':this.value;" onblur="this.value = this.value==''?'name':this.value;"> -->
<!--index.php?controller=image&action=upload