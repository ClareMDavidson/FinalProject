<form action="index.php?controller=blogPost&action=save" method="POST">
    <div class="form-label-group">
        <label for="Title">Post Title:</label>
        <input class="form-control" id="Title" type="text" name="Title" autofocus="true" required />
    </div>
    <div class="form-label-group">
        <label for="Content">Blog Post Content</label>
        <textarea name="Content" id="Content" class="form-control" required /></textarea>
    </div>
    <div class="form-label-group">
        <label for="Keywords">Keywords</label>
        <input class="form-control" id="Keywords" type="text" name="Keywords" placeholder="Add keywords, seperated by a comma">
    </div>
    <button class="loginButton form-control hvr-fade" type="sumbit" name="Submit">Submit</button>
</form>
<form action="index.php?controller=image&action=upload" method="POST" enctype="multipart/form-data">
    <div class="">
    <label for="Image">Image Uploader (jpeg, png or gif files only):</label>
    <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <input class="form-control" type="file" name="myfile" />
    </div>
    <button class="loginButton form-control hvr-fade" type="sumbit" name="Submit">Submit Image</button>
</form>



<!-- <input type="text" value="name" onfocus="this.value = this.value=='name'?'':this.value;" onblur="this.value = this.value==''?'name':this.value;"> -->
<!--index.php?controller=image&action=upload