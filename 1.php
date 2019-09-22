<?php 
class Article {
    public $id;
    public $title;
    public $content;
    public $published_at;
    public $errors = [];

    public static function getAll($conn){
        $sql = "SELECT * FROM article ORDER BY published_at;";
        $results = $conn -> query($sql);
        return $results -> fetchAll(PDO::FETCH_ASSOC);
    }

    public  static function getByID($conn, $id, $columns = '*'){
        $sql = "SELECT $columns FROM article WHERE id = :id";
        
    }
}

?>