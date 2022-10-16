<?php
require_once('db.php');
require_once('Model.php');

Class BookModel extends Model{
    //protected $db; // new PDO();
    //protected $tableName;

    public function __construct()
    {
        $this->db = getDataBase();
        $this->tableName = 'books';
    }

    public function getAllJoint(){
        $query = $this->db->prepare("SELECT A.*, CONCAT(B.last_name, ', ',B.name) as `author` FROM `{$this->tableName}` as A INNER JOIN `authors` as B WHERE A.FK_author_id = B.id;
        ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllByAuthorId($authorId){
        $query = $this->db->prepare("SELECT A.*, CONCAT(B.last_name, ', ',B.name) as `author` FROM `{$this->tableName}` as A INNER JOIN `authors` as B WHERE A.FK_author_id = B.id AND A.`FK_author_id` = ?");
        $query->execute(array($authorId));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addOne($title, $genre, $FK_author_id){
        $query = $this->db->prepare("INSERT INTO `{$this->tableName}` (`title`, `genre`, `FK_author_Id`) VALUES (?,?,?)");
        $query->execute(array($title, $genre, $FK_author_id));
    }

    public function updateById($id, $title, $genre, $FK_author_id){
        $query = $this->db->prepare("UPDATE `{$this->tableName}` SET `title`=?, `genre`=?, `FK_author_id`=? WHERE `id` = ?");
        $query->execute(array($title, $genre, $FK_author_id, $id));
    }

    /*
    // HEREDADAS
    public function getById($id){
        return parent::getById($id);
    }

    public function getAll(){
        return parent::getAll();
    }

    public function deleteById($id){
        return parent::deleteById($id);
    }
    */

    /*
    //OUT OF SCOPE
    public function getAllByGenreId($genreId){
        $query = $this->db->prepare("SELECT * FROM `books` WHERE `genre` = ?");
        $query->execute(array($genreId));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function queryAll($search){
        $query = $this->db->prepare("SELECT * FROM `books` WHERE `title` LIKE '%?%' OR `genre` LIKE '%?%'");
        $query->execute(array($search, $search));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    */

}


?>