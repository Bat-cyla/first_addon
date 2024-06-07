<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

//TODO:Переписать удаление тэгов
function fn_get_tags_ext($params = array(), $items_per_page = 0, $object_type,$company_id)
{
    // Set default values to input params
    $default_params = array(
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);
    $sortings = array(
        'timestamp' => '?:cp_tags_ext.timestamp',
        'tag' => '?:cp_tags_ext.tag',
        'status' => '?:cp_tags_ext.status',
    );

    $condition = $limit = $join = '';

    if (!empty($params['limit'])) {
        $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
    }

    $sorting = db_sort($params, $sortings, 'tag', 'desc');

    if(isset($params['is_search'])){
       if(!empty($params['status']) || !empty($params['tag'])){
           $condition = db_quote(' AND (status = ?s OR tag = ?s)', $params['status'], $params['tag']);
       }
    }

    if (!empty($params['item_ids'])) {
        $condition .= db_quote(' AND ?:cp_tags_ext.tag_id IN (?n)', explode(',', $params['item_ids']));
    }


    if (!empty($params['status'])) {
        $condition .= db_quote(' AND ?:cp_tags_ext.status = ?s', $params['status']);
    }

    $fields = array(
        '?:cp_tags_ext.tag_id',
        '?:cp_tags_ext.tag',
        '?:cp_tags_ext.status',
        '?:cp_tags_ext.timestamp',
    );


    /**
     * This hook allows you to change parameters of the banner selection before making an SQL query.
     *
     * @param array $params The parameters of the user's query (limit, period, item_ids, etc)
     * @param string $condition The conditions of the selection
     * @param string $sorting Sorting (ask, desc)
     * @param string $limit The LIMIT of the returned rows
     * @param array $fields Selected fields
     */
    fn_set_hook('get_tags_ext', $params, $condition, $sorting, $limit, $fields);

    $join .= db_quote(' LEFT JOIN ?:cp_tags_ext_links ON ?:cp_tags_ext.tag_id = ?:cp_tags_ext_links.tag_id ');

    $fields[]="(SELECT COUNT(tag_id) FROM ?:cp_tags_ext_links WHERE tag_id=?:cp_tags_ext.tag_id) as popularity";

    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(tag) FROM ?:cp_tags_ext $join WHERE 1 $condition");
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }
    $condition.= db_quote('AND ?:cp_tags_ext_links.object_type=?s ',$object_type);

    if($company_id!==0){
        $condition.=db_quote('AND ?:cp_tags_ext_links.company_id=?s',$company_id);
    }
    $tags = db_get_hash_array(
        "SELECT ?p FROM ?:cp_tags_ext " .
        $join .
        "WHERE 1 ?p ?p ?p",
        'tag_id', implode(', ', $fields), $condition, $sorting, $limit
    );

    if (!empty($params['item_ids'])) {
        $tags = fn_sort_by_ids($tags, explode(',', $params['item_ids']), 'tag_id');
    }
    fn_set_hook('get_tags_ext_post', $tags, $params);

    return array($tags, $params);
}


function fn_tags_ext_get_orders($params, $fields, $sortings, &$condition, &$join, &$group){
    if(isset($params['is_search']) and isset($params['tags'])){

            $join .= db_quote(" LEFT JOIN ?:cp_tags_ext_links ON ?:orders.order_id=?:cp_tags_ext_links.object_id");
            $tag_ids= db_get_fields('SELECT tag_id FROM ?:cp_tags_ext WHERE tag IN (?a)',$params['tags']);
            $condition .= db_quote(" AND ?:cp_tags_ext_links.tag_id IN (?n)",$tag_ids);
            $group = ' GROUP BY ?:orders.order_id';
    }
}
function fn_tags_ext_get_promotion_data_post($promotion_id,$lang_code, &$promotion_data):array
{
     $promotion_data['tags'] = db_get_field("SELECT tags FROM ?:promotions WHERE promotion_id = ?i", $promotion_id);


     return $promotion_data;
}
function fn_tags_ext_update_order_details_post($params, &$order_info):void
{
    $tags=$_REQUEST['order_info']['tags'];
    $company_id=$order_info['company_id'];
    fn_print_r($company_id);
    $object_type='O';
    $order_id=$_REQUEST['order_id'];
    foreach ($tags as $key => $tag) {
        if ($key !== 0) {
            //Checking if there is tag with that name in db
            if (!empty(fn_cp_tags_ext_check_if_exist($tag))) {
                $tag_id=fn_cp_tags_ext_check_if_exist($tag);
                //Checking if there is a link to this tag
                if(!empty(fn_cp_tags_ext_check_ids_match($tag_id,$order_id,$object_type,$company_id))){
                    //Updating tag info
                    fn_cp_tags_ext_update_tags_info($tag_id,$order_id,$company_id);
                }else{
                    //Adding a link to an existing tag
                    fn_cp_tags_ext_add_link($tag_id, $order_id, $object_type,$company_id);
                }
            }else{
                //Adding tag
                fn_cp_tags_ext_add_tag($order_id, $object_type, $tag,$company_id);
            }
        }

    }

    fn_cp_tags_ext_get_tags_ids($tags,$order_id,$object_type);
    fn_tags_ext_delete_tags();
}

function fn_tags_ext_update_user_profile_post():void
{
    $tags=$_REQUEST['user_data']['tags'];
    $company_id=$_REQUEST['user_data']['company_id'];
    $object_type='C';
    $user_id=$_REQUEST['user_id'];
    foreach($tags as $key=>$tag){
        if($key!==0){
            //Checking if there is tag with that name in db
            if (!empty(fn_cp_tags_ext_check_if_exist($tag))) {
                $tag_id=fn_cp_tags_ext_check_if_exist($tag);
                //Checking if there is a link to this tag
                if(!empty(fn_cp_tags_ext_check_ids_match($tag_id,$user_id,$object_type))){
                    //Updating tag info
                    fn_cp_tags_ext_update_tags_info($tag_id,$user_id);
                }else{
                    //Adding a link to an existing tag
                    fn_cp_tags_ext_add_link($tag_id, $user_id, $object_type);
                }
            }else{
                //Adding tag
                fn_cp_tags_ext_add_tag($user_id, $object_type, $tag, $company_id);
            }
        }

    }

    fn_cp_tags_ext_get_tags_ids($tags,$user_id,$object_type);
    fn_tags_ext_delete_tags();
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
}

function fn_cp_tags_ext_add_tag($object_id,$object_type,$tag,$company_id):void
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
        'company_id'=>$company_id
    );

    db_query("INSERT INTO ?:cp_tags_ext_links ?e",$tag_link_data);

}

function fn_cp_tags_ext_check_if_exist($tag):string
{
    $tag_data=array(
        'tag'=>$tag,

    );
          return  db_get_field("SELECT tag_id FROM ?:cp_tags_ext WHERE ?w",$tag_data);

}

function fn_cp_tags_ext_check_ids_match($tag_id,$object_id,$object_type,$company_id):array
{
    $tag_data=array(
        'tag_id'=>$tag_id,
        'object_id'=>$object_id,
        'object_type'=>$object_type,
        'company_id'=>$company_id
    );
    //fn_print_die(db_get_row("SELECT tag_id FROM ?:cp_tags_ext_links WHERE ?w",$tag_data));
    return db_get_row("SELECT tag_id FROM ?:cp_tags_ext_links WHERE ?w",$tag_data);
}
function fn_cp_tags_ext_add_link($tag_id,$object_id,$object_type,$company_id):void
{
    $tag_link_data = array(
        'tag_id'=>$tag_id,
        'object_id'=>$object_id,
        'object_type'=>$object_type,
        'company_id'=>$company_id
    );

    db_query("INSERT INTO ?:cp_tags_ext_links ?e",$tag_link_data);
}
function fn_cp_tags_ext_get_tags_ids($tags,$object_id,$object_type):void
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
    $tag_links_to_delete = db_get_hash_single_array(
        'SELECT tag_id  FROM ?:cp_tags_ext_links  WHERE object_id=?i AND object_type=?s AND tag_id NOT IN (?n) ',
        ['tag_id', 'tag_id'],
        $object_id,
        $object_type,
        $tags_arr
    );

    if (!empty($tag_links_to_delete)) {
        db_query('DELETE FROM ?:cp_tags_ext_links WHERE tag_id IN (?n) AND object_id=?i', $tag_links_to_delete,$object_id,);
    }

}
function fn_tags_ext_delete_tags():void
{
    $links=db_get_fields('SELECT DISTINCT(tag_id) FROM ?:cp_tags_ext_links');
    db_query('DELETE FROM ?:cp_tags_ext WHERE tag_id NOT IN (?n)',$links);
}

function fn_delete_tag_by_id($tag_id):void
{
    db_query('DELETE FROM ?:cp_tags_ext_links WHERE tag_id=?i',$tag_id);
    db_query('DELETE FROM ?:cp_tags_ext WHERE tag_id=?i',$tag_id);
}






