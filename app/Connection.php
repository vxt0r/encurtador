<?php

namespace app;

require 'Config.php';

class Connection{

    public static function getDb(){
        try{
            $conn = new \PDO('mysql:host='.DB['host'].';dbname='.DB['db'].';charset=utf8',DB['user'],DB['pass']);
            return $conn;
        }
        catch(\PDOException $e){
          echo '<p>'.$e->getMessage().'</p>';
        }

    }
}
