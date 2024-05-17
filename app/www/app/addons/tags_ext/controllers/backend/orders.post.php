<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if($mode=='details'){

    fn_get_orders_tags();

    $order=Registry::get('view')->getTemplateVars('order_info');
    //fn_print_r($order);

}
