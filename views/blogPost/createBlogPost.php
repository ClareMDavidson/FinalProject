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
