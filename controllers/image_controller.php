<?php
class imageController {
    const imageUploadKey = 'myfile';
    public function upload(){   
        require_once('views/blogPost/uploadImage.php');
    }
    
    public function save(){
        try{
            if(!$_SERVER['REQUEST_METHOD'] === 'POST'){
                throw new Exception('Not a form submission');
            }

            require_once('models/image.php');
            if(!$image = Image::uploadFile('myfile')){ 
            //an assignment (=) in an if block checks to see if the assignment suceeds. It happens and then it's truthy if it suceeds.
            //The ! is checking to see if the assignment DID NOT suceed.
                throw new Exception('Image upload failed');
            }
            require_once('views/blogPost/viewImageCode.php');
            echo "Congratulations! Your image has been successfully uploaded. Please take a note of the following code and post it into your blog post, where you would like your image to appear:". $_POST['imageFileName'];
        } catch (Exception $ex) {
            echo "File upload error: ".$ex->getMessage();
            require_once('views/blogPost/uploadImage.php');
        }
    }
 }
