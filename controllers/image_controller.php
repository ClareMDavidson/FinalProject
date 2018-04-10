<?php
 class imageController {
     
    public function upload(){   
        const InputKey = 'myfile';
        const AllowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];            
        if (empty($_FILES[InputKey])) {
                echo "Please attach a file to upload.";
            }
            if ($_FILES[InputKey]['error'] > 0) {
                return call('pages', 'error');
            }
            if (!in_array($_FILES[InputKey] ['type'], AllowedTypes)) {
                echo "Please upload .jpg, .jpeg, .png or .gif files only.";
            }
            
            $tmpFile = $_FILES[InputKey]['tmp_name'];
            $dstFile = 'images/userImages/'.$_FILES[InputKey]['name'];
            
            if (!move_uploaded_file($tmpFile, $dstFile)){
                    die("Failed to move file.");
                }
            
           if (file_exists($tmpFile)) {
               unlink($tmp);
           }
     }
     
     
     
     
 }
