<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_tags_ext_update_order_details_post($params, &$order_info, $edp_data, $force_notification){
    $tags=$_REQUEST['order_info']['tags'];

    foreach($tags as $key=>$tag){
        if($key!==0){
            //Checking if there is tag with that name in db
            $exist_tag = db_get_field("SELECT tag FROM ?:tags_ext WHERE tag='$tag'");
            if (!empty($exist_tag)) {
                $tag_data = array(
                    "order_id" => $_REQUEST['order_id'],
                    'tag' => $exist_tag
                );

                db_query('UPDATE ?:tags_ext SET ?u WHERE tag = ?s', $tag_data, $tag);
            } else {
                //Adding tag
                $tag_data = array(
                    "order_id" => $_REQUEST['order_id'],
                    'tag' => $tag
                );
                db_query('INSERT INTO ?:tags_ext ?e', $tag_data);
            }
        }
    }
    fn_print_r(fn_tags_ext_orders_tags_to_delete($tags));
    /*if(!empty(fn_tags_ext_orders_tags_to_delete($tags))){
        $tags_arr=fn_tags_ext_orders_tags_to_delete($tags);
        foreach($tags_arr as $tag_id){
            db_query("DELETE FROM ?:tags_ext WHERE tag_id='$tag_id'");
        }
   }*/
}

function fn_tags_ext_get_order_tags($id){
    $tags=db_get_array("SELECT * FROM ?:tags_ext WHERE order_id='$id'");
    return $tags;
}

function fn_tags_ext_orders_tags_to_delete($tags){
    foreach($tags as $key=>$tag){
        if($key!==0){
            $arr[]=db_get_field("SELECT tag_id FROM ?:tags_ext WHERE tag = '$tag'");
        }
    }

fn_print_die($arr);

    return $ids_arr;
}
