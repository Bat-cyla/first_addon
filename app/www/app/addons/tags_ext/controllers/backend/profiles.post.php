<?php
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    return;

}
if($mode=='manage'){
    $users=Tygh::$app['view']->getTemplateVars('users');
    foreach($users as $key=>$user){
        $users[$key]['tags']=fn_cp_tags_ext_get_object_tags($user['user_id'],'C');
    }
    Tygh::$app['view']->assign('users', $users);
}
if($mode=='update'){
    $user_data=Tygh::$app['view']->getTemplateVars('user_data');

    $tags=fn_cp_tags_ext_get_object_tags_data($user_data['user_id'],'C');
    $user_data['tags']=$tags;
    Tygh::$app['view']->assign('user_data', $user_data);

}