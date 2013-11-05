<?php
/**
 * Package   Database
 * @author   Faisal Islam <faisal@nascenia.com>
 * @create   11/6/13
 * @modified 11/6/13 (12:32 AM)
 */

namespace Database;

use \PDO;

require_once 'config.php';

class Database {

    public $db;

    public function __construct(){
        try{
            $this->db = new PDO('mysql:host='. DBHOST .';dbname='. DBNAME , DBUSER , DBPASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }

}