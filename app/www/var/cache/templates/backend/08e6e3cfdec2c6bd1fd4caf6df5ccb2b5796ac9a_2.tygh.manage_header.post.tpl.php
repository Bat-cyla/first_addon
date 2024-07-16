<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:09:16
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/manage_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100cc344138_27170457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e6e3cfdec2c6bd1fd4caf6df5ccb2b5796ac9a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/manage_header.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/table_col_head.tpl' => 1,
  ),
),false)) {
function content_669100cc344138_27170457 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>
<th width="14%">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("tags")), 0, false);
?>
</th><?php }
}
