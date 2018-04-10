<?php

class Image {
    private $imgName;
    
    public function __construct($imgName){
        $this->imageName    = $imageName;
    }
    
    
//Product::uploadFile($name);
//    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';
    
    public function uploadFile($imageName){
//        if(isset($_POST['name'])&& $_POST['name']!=""){
//            $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        $name = $filteredName;
//        $req->execute();

//upload product image
        try{
            if (empty($_FILES[self::InputKey])) {
                    //die("File Missing!");
                    trigger_error("File Missing!");
            }

            if ($_FILES[self::InputKey]['error'] > 0) {
                    trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
            }


            if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
                    trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
            }

            $tempFile = $_FILES[self::InputKey]['tmp_name'];
            $path = "/Applications/XAMPP/xamppfiles/htdocs/FinalProject/views/images/userImages";
            $destinationFile = $path . $imageName . '.jpeg';

            if (!move_uploaded_file($tempFile, $destinationFile)) {
                    trigger_error("Handle Error");
            }

            //Clean up the temp file
            if (file_exists($tempFile)) {
                    unlink($tempFile); 
            }

            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
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