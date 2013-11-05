<?php
/**
 * Package   Api
 * @author   Faisal Islam <faisal@nascenia.com>
 * @create   11/6/13
 * @modified 11/6/13 (12:31 AM)
 */

namespace Api;

use Customer\Customer;

require_once 'Customer.php';

class Api{

    public function __construct() {

    }

    public function createCustomer($params)
    {
        $name = $params[0];
        $email = $params[1];

        $objCustomer = new Customer();
        $objCustomer->set('email',$email);
        $objCustomer->set('name',$name);
        return $objCustomer->save();
    }

} 