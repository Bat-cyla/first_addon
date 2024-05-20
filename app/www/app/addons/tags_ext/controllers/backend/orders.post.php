<?php
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    return;

}

if($mode=='details'){

    $order=Tygh::$app['view']->getTemplateVars('orders.details');
    //fn_print_r($order);

}

if($mode=='update_details'){
    fn_print_r($_REQUEST);
}