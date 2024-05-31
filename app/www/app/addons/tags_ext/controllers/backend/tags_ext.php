<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if($mode == 'manage')
{
    $tags=fn_get_tags_ext_info("O");
    Tygh::$app['view']->assign('tags', $tags);
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

}