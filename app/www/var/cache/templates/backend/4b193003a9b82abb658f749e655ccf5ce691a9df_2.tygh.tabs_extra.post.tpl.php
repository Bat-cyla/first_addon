<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:53
  from '/app/www/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729d5d1528_28739525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b193003a9b82abb658f749e655ccf5ce691a9df' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_6655729d5d1528_28739525 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0, false);
}
}
}
