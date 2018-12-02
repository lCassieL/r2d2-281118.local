<?php

class ModelAdmin extends Model {
    private $db;

    public function addNews($title, $text, $author){
        $this->db = new mysqli('localhost','root', '', 'news');
        if($this->db->connect_errno === 0){
            $query = "INSERT INTO news (title, text, author) VALUES ('".$title."','".$text."','".$author."')";
            $this->db->query($query);
        }
    }
}