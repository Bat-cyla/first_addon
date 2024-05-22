<?php
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    return;

}

if($mode=='details'){
    $tags=fn_tags_ext_get_order_tags($_REQUEST['order_id']);
    $order_info=Tygh::$app['view']->getTemplateVars('order_info');
    $order_info['tags']=$tags;
    Tygh::$app['view']->assign('order_info', $order_info);
}

if($mode=='update_details'){

}