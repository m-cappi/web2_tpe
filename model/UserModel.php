<?php
require_once('db.php');
require_once('Model.php');

Class UserModel extends Model{
    //protected $db; // new PDO();
    //protected $tableName;

    public function __construct()
    {
        $this->db = getDataBase();
        $this->tableName = 'users';
    }

    public function getUser($email){
        $query = $this->db->prepare("SELECT * FROM `{$this->tableName}` WHERE `email` = ?");
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function addOne($email, $hashedPassword, $alias, $isAdmin = false){
        $query = $this->db->prepare("INSERT INTO `{$this->tableName}`(`email`, `password`, `alias`, `is_admin`) VALUES (?,?,?,?)");
        $query->execute(array($email, $hashedPassword, $alias, $isAdmin));
        return $query->fetch(PDO::FETCH_OBJ);
    }
}

?>