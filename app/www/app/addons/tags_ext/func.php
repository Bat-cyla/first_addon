<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_tags_ext_update_order_details_post($params, &$order_info, $edp_data, $force_notification){
    $tags=$_REQUEST['order_info']['tags'];
    $order_info=$_REQUEST['order_info'];
    foreach ($tags as $key => $tag) {
        if ($key !== 0) {
            //Checking if there is tag with that name in db
            $exist_tag = db_get_field("SELECT tag FROM ?:cp_tags_ext WHERE tag='$tag'");
            if (!empty($exist_tag)) {
                $tag_data = array(
                    "order_id" => $_REQUEST['order_id'],
                    'tag' => $exist_tag,
                    'timestamp'=>TIME
                );

                db_query('UPDATE ?:cp_tags_ext SET ?u WHERE tag = ?s', $tag_data, $tag);
            } else {
                //Adding tag
                $tag_data = array(
                    "order_id" => $_REQUEST['order_id'],
                    'tag' => $tag,
                    'timestamp'=>TIME
                );
                db_query('INSERT INTO ?:cp_tags_ext ?e', $tag_data);
            }
        }

    $tags_ids = fn_cp_tags_ext_get_tags_ids($tags);
    $tag_ids_to_delete = db_get_hash_single_array(
        'SELECT tag_id FROM ?:cp_tags_ext WHERE order_id=?i AND tag_id NOT IN (?n) ',
        ['tag_id', 'tag_id'],
        $order_info['order_id'],
        $tags_ids
    );
    fn_print_die($order_info);

    if (!empty($tag_ids_to_delete)) {
        db_query('DELETE FROM ?:cp_tags_ext WHERE tag_id IN (?n)', $tag_ids_to_delete);
    }
}
}

function fn_cp_tags_ext_get_order_tags_data($id):array
{
    $tags=db_get_array("SELECT * FROM ?:cp_tags_ext WHERE order_id='$id'");
    return $tags;
}

function fn_cp_tags_ext_get_order_tags($id):array
{
    $data=array(
        'order_id'=>$id
    );
    return db_get_fields('SELECT tag FROM ?:cp_tags_ext WHERE ?w', $data);
}

function fn_cp_tags_ext_get_tags_ids($tags): array
{
    if (isset($tags)) {

        $tags_arr = [];
        $db_tags_arr=[];
        foreach ($tags as $key => $tag) {
            if ($key !== 0) {
                $data = array(
                    'tag' => $tag
                );
                $db_tags_arr[] = db_get_row("SELECT * FROM ?:cp_tags_ext WHERE ?w", $data);
            }
        }

        foreach ($db_tags_arr as $elem) {
            if(isset($elem['tag_id'])){
                $tags_arr[] = $elem['tag_id'];
            }
            else {
                return $tags_arr;
            }
        }
    }

    return$tags_arr;
}




