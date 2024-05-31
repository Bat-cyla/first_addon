<?php
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    return;

}

if($mode=='details'){
    $tags=fn_cp_tags_ext_get_object_tags_data($_REQUEST['order_id'],'O');
    //fn_print_r($tags);
    $order_info=Tygh::$app['view']->getTemplateVars('order_info');
    $order_info['tags']=$tags;
    Tygh::$app['view']->assign('order_info', $order_info);
}

if($mode=='manage'){


    $orders=Tygh::$app['view']->getTemplateVars('orders');

    foreach($orders as $key=>$order){
        $orders[$key]['tags']=fn_cp_tags_ext_get_object_tags_data($order['order_id'],'O');
    }
    $tags=db_get_fields("SELECT tag FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links as links ON ?:cp_tags_ext.tag_id=links.tag_id WHERE object_type = 'O'");
    //fn_print_r($orders);
    Tygh::$app['view']->assign('tags',$tags);
    Tygh::$app['view']->assign('orders', $orders);


}


