<?php
/* Smarty version 4.1.1, created on 2024-05-29 09:20:55
  from '/app/www/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656c947aad2f2_13540051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0bf018e2eb30e6de0af296aa1079c2b0cb4e77' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_6656c947aad2f2_13540051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0, false);
}
}
