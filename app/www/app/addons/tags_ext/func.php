<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

//TODO:Переписать удаление тэгов

function fn_tags_ext_get_orders($params, $fields, $sortings, &$condition, &$join, &$group){
    if(isset($params['is_search']) and isset($params['tags'])){
            $join .= db_quote(" LEFT JOIN ?:cp_tags_ext ON ?:orders.order_id=?:cp_tags_ext.object_id");
            $tags=$params['tags'];
            $condition .= db_quote(" AND ?:cp_tags_ext.tag IN (?a)",$tags);
            $group = ' GROUP BY ?:orders.order_id';


    }
}

function fn_tags_ext_update_order_details_post():void
{
    $tags=$_REQUEST['order_info']['tags'];
    $object_type='O';
    $order_id=$_REQUEST['order_id'];
    foreach ($tags as $key => $tag) {
        if ($key !== 0) {
            //Checking if there is tag with that name in db
            if (!empty(fn_cp_tags_ext_check_if_exist($tag))) {
                $tag_id=fn_cp_tags_ext_check_if_exist($tag)['tag_id'];
                //Checking if there is a link to this tag
                if(!empty(fn_cp_tags_ext_check_ids_match($tag_id,$order_id))){
                    //Updating tag info
                    fn_cp_tags_ext_update_tags_info($tag_id,$order_id, $object_type );
                }else{
                    //Adding a link to an existing tag
                    fn_cp_tags_ext_add_link($tag_id, $order_id, $object_type);
                }
            }else{
                //Adding tag
                fn_cp_tags_ext_add_tag($order_id, $object_type, $tag);
            }
        }
        fn_cp_tags_ext_get_tags_ids($tags,$order_id);
    }
    fn_tags_ext_delete_tags($object_type);
}

function fn_tags_ext_update_user_profile_post():void
{
    $tags=$_REQUEST['user_data']['tags'];
    $object_type='C';
    $user_id=$_REQUEST['user_id'];
    foreach($tags as $key=>$tag){
        if($key!==0){
            //Checking if there is tag with that name in db
            if (!empty(fn_cp_tags_ext_check_if_exist($tag))) {
                $tag_id=fn_cp_tags_ext_check_if_exist($tag)['tag_id'];
                //Checking if there is a link to this tag
                if(!empty(fn_cp_tags_ext_check_ids_match($tag_id,$user_id))){
                    //Updating tag info
                    fn_cp_tags_ext_update_tags_info($tag_id,$user_id, $object_type );
                }else{
                    //Adding a link to an existing tag
                    fn_cp_tags_ext_add_link($tag_id, $user_id, $object_type);
                }
            }else{
                //Adding tag
                fn_cp_tags_ext_add_tag($user_id, $object_type, $tag);
            }
        }
        fn_cp_tags_ext_get_tags_ids($tags,$user_id);
    }
    fn_tags_ext_delete_tags($object_type);
}

function fn_cp_tags_ext_get_object_tags_data($id,$object_type):array
{
    $data=array(
        'object_id'=>$id,
        'object_type'=>$object_type
    );
    return  db_get_array("SELECT * FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links as links ON ?:cp_tags_ext.tag_id=links.tag_id WHERE ?w",$data);

}

function fn_cp_tags_ext_get_object_tags($id,$object_type):array
{
    $data=array(
        'object_id'=>$id,
        'object_type'=>$object_type
    );
    return db_get_array('SELECT tag,status FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links as links ON ?:cp_tags_ext.tag_id=links.tag_id WHERE ?w', $data);
}

function fn_cp_tags_ext_update_tags_info($tag_id,$tag_status):void
{
    $tag_data = array(
        'status'=> $tag_status,
        'timestamp'=>TIME
    );

    db_query('UPDATE ?:cp_tags_ext SET ?u WHERE tag_id = ?i', $tag_data, $tag_id);
    /*
    $tag_data = array(
        "object_id" => $object_id,
        "object_type"=> $object_type,
    );
    db_query('UPDATE ?:cp_tags_ext_links SET ?u WHERE tag_id = ?i', $tag_data, $tag_id);
    */
}

function fn_cp_tags_ext_add_tag($object_id,$object_type,$tag):void
{
    $tag_data = array(
        'tag' => $tag,
        'timestamp'=>TIME,
        'status'=>'D'
    );
    db_query("INSERT INTO ?:cp_tags_ext ?e",$tag_data);
    $data=array(
        'tag' => $tag,
    );
    $tag_id=db_get_field('SELECT tag_id FROM ?:cp_tags_ext WHERE ?w',$data);
    $tag_link_data = array(
        'tag_id'=>$tag_id,
        "object_id" => $object_id,
        "object_type"=> $object_type,
    );

    db_query("INSERT INTO ?:cp_tags_ext_links ?e",$tag_link_data);

}

function fn_cp_tags_ext_check_if_exist($tag):array
{

    $tag_data=array(
        'tag'=>$tag,
    );
    //fn_print_die(db_get_row("SELECT tag_id,tag FROM ?:cp_tags_ext WHERE ?w",$tag_data));
        return db_get_row("SELECT tag_id FROM ?:cp_tags_ext WHERE ?w",$tag_data);

}

function fn_cp_tags_ext_check_ids_match($tag_id,$object_id):array
{
    $tag_data=array(
        'tag_id'=>$tag_id,
        'object_id'=>$object_id
    );
    //fn_print_die(db_get_row("SELECT tag_id FROM ?:cp_tags_ext_links WHERE ?w",$tag_data));
    return db_get_row("SELECT tag_id FROM ?:cp_tags_ext_links WHERE ?w",$tag_data);
}
function fn_cp_tags_ext_add_link($tag_id,$object_id,$object_type):void
{
    $tag_link_data = array(
        'tag_id'=>$tag_id,
        'object_id'=>$object_id,
        'object_type'=>$object_type,
    );

    db_query("INSERT INTO ?:cp_tags_ext_links ?e",$tag_link_data);
}
function fn_get_tags_ext_info($object_type): array
{
    $arr=[];
    $tags=db_get_fields('SELECT DISTINCT(?:cp_tags_ext.tag_id) FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links AS links ON ?:cp_tags_ext.tag_id = links.tag_id WHERE object_type=?s',$object_type);
    if(!empty($tags)){
        foreach($tags as $id){
            $arr[]=db_get_row('SELECT ?:cp_tags_ext.tag_id,tag, COUNT(links.tag_id) as P,status as S FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links AS links ON ?:cp_tags_ext.tag_id = links.tag_id WHERE ?:cp_tags_ext.tag_id=?i',$id);
        }
    }
    return $arr;
}
function fn_cp_tags_ext_get_tags_ids($tags,$object_id):void
{
    if (isset($tags)) {
        $tags_arr = [];
        $db_tags_arr=[];
        foreach ($tags as $key => $tag) {
            if ($key !== 0) {
                $data = array(
                    'tag' => $tag,
                    'object_id'=>$object_id
                );
                $db_tags_arr[] = db_get_row("SELECT * FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links as links ON ?:cp_tags_ext.tag_id=links.tag_id WHERE ?w", $data);
            }
        }

        foreach ($db_tags_arr as $elem) {
            if(isset($elem['tag_id'])){
                $tags_arr[] = $elem['tag_id'];
            }
        }
    }


    $tag_ids_to_delete = db_get_hash_single_array(
        'SELECT ?:cp_tags_ext.tag_id  FROM ?:cp_tags_ext LEFT JOIN ?:cp_tags_ext_links as links ON ?:cp_tags_ext.tag_id=links.tag_id WHERE object_id=?i AND ?:cp_tags_ext.tag_id NOT IN (?n) ',
        ['tag_id', 'tag_id'],
        $object_id,
        $tags_arr
    );

    if (!empty($tag_ids_to_delete)) {
        db_query('DELETE FROM ?:cp_tags_ext_links WHERE tag_id IN (?n) AND object_id=?i', $tag_ids_to_delete,$object_id);
    }
}
function fn_tags_ext_delete_tags($object_type):void
{
    $tag_links=db_get_fields('SELECT tag_id FROM ?:cp_tags_ext_links WHERE object_type=?s',$object_type);
    //fn_print_die($tag_links);
    db_query('DELETE FROM ?:cp_tags_ext WHERE tag_id NOT IN (?n)',$tag_links);
}

function fn_delete_tag_by_id($tag_id):void
{
    db_query('DELETE FROM ?:cp_tags_ext_links WHERE tag_id=?i',$tag_id);
    db_query('DELETE FROM ?:cp_tags_ext WHERE tag_id=?i',$tag_id);
}




