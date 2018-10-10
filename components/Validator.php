<?php

class Validator {
    public static function validateImage($image_file)
    {
        $errors = [];
        
        if ($imageFile["type"] != "image/png" &&
            $imageFile["type"] != "image/jpeg") {
            $errors[] = "Wrong file !";
        }
        
        if ( !empty($errors) ) {
            $_SESSION["image-errors"] = $errors;
            return false;
        }
        
        $_SESSION["image-errors"] = [];
        return true;
    }
}
