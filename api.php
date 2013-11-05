<?php
/**
 * Package   api.php
 * @author   Faisal Islam <faisal@nascenia.com>
 * @create   11/6/13
 * @modified 11/6/13 (12:30 AM)
 */

require_once 'Api.class.php';

$api = new \Api\Api();

if(isset($_REQUEST['method'])) {

    $method = $_REQUEST['method'];
    $params = explode(',',$_REQUEST['params']);

    /**
     * Dynamic way to call the method
     */
    // TODO :: use magic method __call instead of Simple Way

    // Simple way : bad format

    $response = '';

    switch($method) {
        case 'createCustomer':
            $response = $api->createCustomer($params);
            break;
        default:
            break;
    }

    echo $response ;

}


