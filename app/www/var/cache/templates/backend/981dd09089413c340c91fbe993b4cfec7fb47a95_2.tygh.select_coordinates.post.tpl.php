<?php
/* Smarty version 4.1.1, created on 2024-05-31 14:14:12
  from '/app/www/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659b1041c5480_04239477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981dd09089413c340c91fbe993b4cfec7fb47a95' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6659b1041c5480_04239477 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('select'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0, false);
}
}
