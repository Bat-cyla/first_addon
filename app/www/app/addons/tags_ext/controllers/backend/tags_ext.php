<?php
use Tygh\Registry;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if($mode == 'manage' )
{
    $company_id=fn_get_runtime_company_id();

    list($tags, $params)=fn_get_tags_ext($_REQUEST,Registry::get('settings.Appearance.admin_elements_per_page'),'O',$company_id);

    Tygh::$app['view']->assign(array(
        'tags'  => $tags,
        'search' => $params,
    ));
}


if ($_SERVER['REQUEST_METHOD']	== 'POST') {
    if ($mode == 'm_update') {
        $tags = $_REQUEST['tags_data'];

        foreach ($_REQUEST['tags_data'] as $tag_id => $tag) {
            if (isset($tag[1])) {
                fn_cp_tags_ext_update_tags_info($tag_id, 'A');
            } else
                fn_cp_tags_ext_update_tags_info($tag_id, 'D');
        }

    }

    if ($mode == 'delete') {
        if (!empty($_REQUEST['tag_id'])) {
            fn_delete_tag_by_id($_REQUEST['tag_id']);
        }
    }
    
    return array(CONTROLLER_STATUS_OK, 'tags_ext.manage');
}