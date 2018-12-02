<?php

class ModelNews extends Model {
    private $db;

    public function getNews(){
        $this->db = new mysqli('localhost','root', '', 'news');
        if($this->db->connect_errno === 0){
            $query = "SELECT * from news";
            $res = $this->db->query($query);
            if($res){
                $news = $res->fetch_all(MYSQLI_ASSOC);
                return $news;
            } else{
                return false;
            }
        }
    }
}
