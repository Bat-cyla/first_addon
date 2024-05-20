<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_tags_ext_update_order_details_post($params, $order_info, $edp_data, $force_notification){


 $tags=$_REQUEST['order_info']['tags'];
 $id=$_REQUEST['order_id'];

    foreach($tags as $key=>$tag){
        db_query("INSERT INTO ?:tags_ext (tag_id, order_id, tag) VALUES ($key, $id, $tag)");

    }




}