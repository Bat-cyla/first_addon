<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}
if($mode==='manage'){
    $shippings=Registry::get('view')->getTemplateVars('shippings');
    foreach($shippings as $key=>$shipping){
        $shippings[$key]['my_param']='my_param:' . $shipping['shipping'];
    }
    Tygh::$app['view']->assign('shippings', $shippings);
   //fn_print_r($shippings);

}