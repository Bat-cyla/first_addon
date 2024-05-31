<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:47:59
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e08fcf9259_90384686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04eb47ed83256aed2ed197344237eb509ce3b88f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_header.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/table_col_head.tpl' => 1,
  ),
),false)) {
function content_6655e08fcf9259_90384686 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>
<th width="14%">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("tags")), 0, false);
?>
</th><?php }
}
