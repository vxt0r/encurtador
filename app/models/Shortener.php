<?php

namespace app\models;
use MF\model\Model;
use PDO;

class Shortener extends Model{

    /**
     * @param string
     * @return void
     */
    public function saveURL($url){
        $query = 'INSERT INTO urls(url) VALUES (?);';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1,$url);
        $stmt->execute();
    }
    /**
     * @param string|int
     * @return array
     */
    public function getURL($id){
        $query = 'SELECT url FROM urls WHERE id = ?;';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    /**
     * @return array
     */
    public function getURLS(){
        $query = 'SELECT id,url FROM urls ORDER BY id DESC';
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string|int
     * @return void
     */
    public function delete($id)
    {
        $query = 'DELETE FROM urls WHERE id = ?';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
}
