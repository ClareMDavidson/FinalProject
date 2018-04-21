<?php

class Image {
    private $imageName;
    
    public function __construct($imageName){
        $this->imageName = $imageName;
    }
    
    const AllowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    
    public function uploadFile($inputkey){
        try {
            if (empty($_FILES[$inputkey])) {
                throw new Exception("File Missing!");
            }
            if ($_FILES[$inputkey]['error'] > 0) {
                throw new Exception("Handle the error! " . $_FILES[$inputkey]['error']);
            }
            if (!in_array($_FILES[$inputkey]['type'], self::AllowedTypes)) {
                throw new Exception("Handle File Type Not Allowed: " . $_FILES[$inputkey]['type']);
            }
            $_POST['imageFileName'] = $_FILES[$inputkey]['name'];
            filter_input(INPUT_POST,'imageFileName', FILTER_SANITIZE_SPECIAL_CHARS);
            $tempFile = $_FILES[$inputkey]['tmp_name'];
            $path = "./views/images/userImages/";
            $destinationFile = $path . $_POST['imageFileName'];
            if (!move_uploaded_file($tempFile, $destinationFile)) {
                throw new Exception("Handle Error");
            }
            if (file_exists($tempFile)) {
                unlink($tempFile); 
            }
            return new image($_POST['imageFileName']);
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
}