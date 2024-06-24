<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:11:15
  from '/app/www/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f0463546d76_22003815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a91b338a788c37f18f84661bf9fc2da81b083e7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_665f0463546d76_22003815 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
