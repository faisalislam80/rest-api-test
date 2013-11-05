<?php
/**
 * Package   Customer.php
 * @author   Faisal Islam <faisal@nascenia.com>
 * @create   11/6/13
 * @modified 11/6/13 (12:44 AM)
 */

namespace Customer;

use Database\CRUD;
use \PDO;

require_once 'CRUD.class.php';

class Customer extends CRUD {

    protected $tableName = 'customer';

    protected $id;

    protected $name;

    protected $email;


    public function __construct() {
        parent::__construct();
    }

    public function set($key,$value) {
        $this->{$key} = $value;
    }

    public function save(){
        $objPdoStatement = $this->db->prepare('INSERT INTO '. $this->tableName . ' SET  name = :name, email = :email');
        $objPdoStatement->bindParam(':name',$this->name,PDO::PARAM_STR);
        $objPdoStatement->bindParam(':email',$this->email,PDO::PARAM_STR);
        if($objPdoStatement->execute()){
            return json_encode(array(
                'result'        => true,
                'code'    => 200,
                'message' => 'Customer created successfully'
            ));
        }
        else{
            return json_encode(array(
                'result'        => false,
                'code'    => 400,
                'message' => 'PDO Execute Fails'
            ));
        }
    }

}