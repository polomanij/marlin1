<?php

class Validator {
    public static function checkFields(array $fields, array $reg_expressions, $errors_message = [])
    {
        $errors = [];
        
        foreach ($fields as $field => $field_value) {
            if ( array_key_exists($field, $reg_expressions) ) {
                
                if ( !preg_match($reg_expressions[$field], $field_value) ) {
                    
                    if ( array_key_exists($field, $errors_message) ) {
                        $errors[] = $errors_message[$field];
                    } else {
                        $errors[] = "{$field} field is incorrect !";
                    }
                }
            }
        }
        
        return $errors;
    }

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
