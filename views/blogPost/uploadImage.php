<form action="index.php?controller=image&action=save" method="POST" enctype="multipart/form-data">
    <div class="">
    <label for="Image">Image Uploader (jpeg, png or gif files only):</label>
    <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <input class="form-control" type="file" name="myfile" />
    </div>
    <button class="loginButton form-control hvr-fade" type="sumbit" name="Submit">Submit Image</button>
</form>