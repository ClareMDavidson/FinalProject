<?php
class imageController {
    const imageUploadKey = 'myfile';
    public function upload(){   
        require_once('views/blogPost/uploadImage.php');
    }
    
    public function save(){
        try{
            if(!isset($_POST['Submit'])){
                throw new Exception('Not a form submission');
            }
            $_POST['imageFileName'] = $_FILES[self::imageUploadKey]['name'];
            filter_input(INPUT_POST,'imageFileName', FILTER_SANITIZE_SPECIAL_CHARS);
            require_once('models/image.php');
            if(!Image::uploadFile($_POST['imageFileName'])){
                throw new Exception('Image upload failed');
            }
            $image = new image($_POST['imageFileName']);
            require_once('views/blogPost/viewImageCode.php');
        } catch (Exception $ex) {
            echo "File upload error: ".$ex->getMessage();
            require_once('views/blogPost/uploadImage.php');
        }
    }
 }
