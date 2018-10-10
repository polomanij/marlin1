<?php

class Image {
    private $uploaddir = __DIR__ . "/../uploads/";
    private $db;
    private $validator;
    private $table = "image";
            
    function __construct(QueryBuilder $db, Validator $validator)
    {
        $this->db = $db;
        $this->validator = $validato;
    }

    public function upload(array $image_file)
    {
        if ( !$this->validator::validateImage($image_file) ) return;
        
        $image_name = uniqid() . $image_file["name"];
        $tmp_name = $image_file["tmp_name"];
        
        if ( move_uploaded_file($tmp_name, self::$uploaddir . $image_name) ) {
            $this->db->create($this->table, $image_name);
            $_SESSION["upload-result"] = "File was uploaded !";
        } else {
            $_SESSION["upload-result"] = "Error was happened, try again !";
        }
    }
    
    public function delete($id)
    {
        $image = $this->db->getOne($this->table, $id);
        
        $this->db->delete($this->table, $id);
        unlink(self::$uploaddir . $image["title"]);
    }
}
