<?php
require_once('db.php');
require_once('Model.php');

Class AuthorModel extends Model{
    //protected $db; // new PDO();
    //protected $tableName;

    public function __construct()
    {
        $this->db = getDataBase();
        $this->tableName = 'authors';

    }

    public function addOne($name, $lastName){
        $query = $this->db->prepare("INSERT INTO `{$this->tableName}` (`name`, `last_name`) VALUES (?,?)");
        $query->execute(array($name, $lastName));
    }

    public function updateById($id, $name, $lastName){
        $query = $this->db->prepare("UPDATE `{$this->tableName}` SET `name`=?, `last_name`=? WHERE `id` = ?");
        $query->execute(array($name, $lastName, $id));
    }

    /*
    // HEREDADAS
    public function getAll(){
        return parent::getAll();
    }

    public function getAll(){
        return parent::getAll();
    }

    public function deleteById($id){
        return parent::deleteById($id);
    }
    */
}
?>