<?php

class Image {
    private $imageName;
    
    public function __construct($imageName){
        $this->imageName    = $imageName;
    }
    
    
//Product::uploadFile($name);
//    }

    const AllowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    const InputKey = 'myfile';
    
    public function uploadFile($imageName){
        if (empty($_FILES[self::InputKey])) {
            throw new Exception("File Missing!");
        }
        if ($_FILES[self::InputKey]['error'] > 0) {
            throw new Exception("Handle the error! " . $_FILES[InputKey]['error']);
        }
        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            throw new Exception("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "./views/images/userImages/";
        $destinationFile = $path . $imageName;

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            throw new Exception("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile); 
        }

        return true;
    }
    
}

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