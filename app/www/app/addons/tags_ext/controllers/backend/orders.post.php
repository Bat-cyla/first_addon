<?php
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    return;

}

if($mode=='details'){
    $tags=fn_cp_tags_ext_get_order_tags_data($_REQUEST['order_id']);
    $order_info=Tygh::$app['view']->getTemplateVars('order_info');
    $order_info['tags']=$tags;
    Tygh::$app['view']->assign('order_info', $order_info);
}
if($mode=='manage'){
    $orders=Tygh::$app['view']->getTemplateVars('orders');

    foreach($orders as $key=>$order){
        $orders[$key]['tags']=fn_cp_tags_ext_get_order_tags($order['order_id']);
    }

    Tygh::$app['view']->assign('orders', $orders);
}

if($mode=='update_details'){

}