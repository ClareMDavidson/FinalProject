<form action="index.php?controller=blogPost&action=save" method="POST">
    <div class="form-label-group">
        
        <input class="form-control" id="Title" type="text" placeholder="Title" name="Title" autofocus="true" required />
        <label for="Title">Post Title:</label>
    </div>
    <div class="form-label-group">
        <div>
            <button type="button" id="bold" class="markup" onclick="formatting('**')" name="Bold">Bold</button>
            <button type="button" id="italic" class="markup" onclick="formatting('_')" name="Italic">Italic</button>
            <button type="button" id="bold" class="markup" onclick="formatting('>>')" name="Centre">Align Centre</button>
        </div>
        <textarea name="Content" id="Content" placeholder="Write your blog post here" class="form-control" required /></textarea>
    </div>
    <div class="form-label-group">
        <input class="form-control" id="Keywords" type="text" placeholder="Keywords" name="Keywords" placeholder="Add keywords, seperated by a comma">
        <label for="Keywords">Keywords</label>
    </div>
    <button class="loginButton form-control hvr-fade" type="submit" name="Submit">Submit</button>
</form>
<form id="file-form" action="index.php?controller=image&action=save" method="POST" enctype="multipart/form-data">
    <div "form-label-group">
        <label for="file">Image Uploader (jpeg, png or gif files only):</label>
        <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <input type="file" id="file-select" name="photos[]">
    </div>
    <button type="submit" name="Submit" id="upload-button" class="loginButton form-control hvr-fade">Upload</button>
</form>
<p id="imageCode"></p>

<script>
    var form = document.getElementById('file-form');
    var fileSelect = document.getElementById('file-select');
    var uploadButton = document.getElementById('upload-button');
    form.onsubmit = function(event) {
        event.preventDefault();
        uploadButton.innerHTML = 'Uploading...';
        var files = fileSelect.files;
        var formData = new FormData();
        for (var i = 0; i< files.length; i++){
            var file = files[i];
            if(!file.type.match('image.*')){
                continue;
            }
            formData.append('myfile', file, file.name);
        }
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?controller=image&action=save', true);
        xhr.onload = function(){
            if (xhr.status) { // === 200
                uploadButton.innerHTML = 'Upload';
                var re = /\!\(.*?\)/;
                var matches = xhr.responseText.match(re);
                if (matches!=null){
                    document.getElementById("imageCode").innerHTML = 'Congratulations! Your image has been successfully uploaded. Your image has been added to the end of your blog post. If you would like it to appear somewhere else, please move the image code. Thank you.<br />Your image code is:'+matches[0];
                    document.getElementById("Content").value=document.getElementById("Content").value+matches[0];
                }else {
                    document.getElementById("imageCode").innerHTML = 'File upload failed, please try again.';
                }
            }else {
                document.getElementById("imageCode").innerHTML = 'File upload failed, please try again.';
            }
        };
        xhr.send(formData);
    }
    
    function formatting(markup) // javascript
{
    // obtain the object reference for the <textarea>
    var txtarea = document.getElementById("Content");
    // obtain the index of the first selected character
    var start = txtarea.selectionStart;
    // obtain the index of the last selected character
    var finish = txtarea.selectionEnd;
    // obtain the selected text
    var selection = txtarea.value.substring(start, finish);
    // do something with the selected content
    var formatted = markup+selection+markup;
    // put the markup langauge around the selected content
    var before = txtarea.value.substring(0, start);
    // obtain the start position that the string needs to go back into
    var after = txtarea.value.substring(finish, txtarea.value.length);
    // obtain the end position that the string needs to go back into
    txtarea.value = before+formatted+after;
    // put all three parts back together again inside the text area
    
}
</script>