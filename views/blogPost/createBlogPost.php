<form action="index.php?controller=blogPost&action=save" method="POST">
    <div class="form-group">
        <label for="Title">Post Title:</label>
        <input type="text" name="Title" autofocus="true" placeholder="Title" required>
    </div>
    <div class="form-group">
        <label for="Content">Blog Post Content</label>
        <textarea name="Content" placeholder="Write the content for your blogpost here" required></textarea>
    </div>
    <div class="form-group">
        <label for="Keywords">Keywords</label>
        <input type="text" name="Keywords" placeholder="Add keywords, seperated by a comma">
    </div>
    <button type="sumbit" name="Submit">Submit</button>
</form>
