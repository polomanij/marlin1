<?php

class Image {
    private $uploaddir = __DIR__ . "/../uploads/";
    private $db;
    
    function __construct($db) {
        $this->db = $db;
    }

    public function upload(array $image_file)
    {
        $errors = self::checkImage($image_file);
        if ( !empty($errors) ) {
            $_SESSION["image-errors"] = $errors;
            return;
        }

        $_SESSION["image-errors"] = [];
        
        $image_name = uniqid() . $image_file["name"];
        $tmp_name = $image_file["tmp_name"];
        
        if ( move_uploaded_file($tmp_name, self::$uploaddir . $image_name) ) {
            $_SESSION["upload-result"] = "File was uploaded !";
        } else {
            $_SESSION["upload-result"] = "Error was happened, try again !";
        }
    }
    
    private function checkImage(array $imageFile)
    {
        $errors = [];
        
        if ($imageFile["type"] != "image/png" &&
            $imageFile["type"] != "image/jpeg") {
            $errors[] = "Wrong file !";
        }
        
        return $errors;
    }
}
