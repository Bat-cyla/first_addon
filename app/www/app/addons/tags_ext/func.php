<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_get_orders_tags(){
    $order_info=Registry::get('view')->getTemplateVars('order_info');

    $tags= db_get_array("SELECT tag FROM ?:orders_tags LEFT JOIN ?:orders ON ?:orders_tags.order_id = ?:orders.order_id WHERE ?:orders_tags.order_id={$order_info["order_id"]}");

    $order_info['tags']=$tags;

    Registry::get('view')->assign('order_info',$order_info);
}