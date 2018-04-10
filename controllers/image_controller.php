<?php
 class imageController {
     
    public function upload(){   
        require_once('views/blogPost/uploadImage.php');
    }
    
    public function save(){
        require_once('models/image.php');
        //$req->bindParam(':name', $name);
        if(isset($_POST['name'])&& $_POST['name']!=""){
            $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $imageName = $filteredName;
        //$req->execute();
        Image::uploadFile($imageName);

        $image = new image();
    }
    
//    public function save(){
//        const InputKey = 'myfile';
//        const AllowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];            
//        if (empty($_FILES[InputKey])) {
//                echo "Please attach a file to upload.";
//            }
//            if ($_FILES[InputKey]['error'] > 0) {
//                return call('pages', 'error');
//            }
//            if (!in_array($_FILES[InputKey] ['type'], AllowedTypes)) {
//                echo "Please upload .jpg, .jpeg, .png or .gif files only.";
//            }
//            
//            $tmpFile = $_FILES[InputKey]['tmp_name'];
//            $dstFile = 'images/userImages/'.$_FILES[InputKey]['name'];
//            
//            if (!move_uploaded_file($tmpFile, $dstFile)){
//                    die("Failed to move file.");
//                }
//            
//           if (file_exists($tmpFile)) {
//               unlink($tmp);
//           }
//     }
     
     
     
     
 }
