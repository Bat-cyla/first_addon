<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:11:15
  from '/app/www/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f04633a4dd7_74775643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ece87ce5204f2c90300396f269cb8cebe013b48' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_665f04633a4dd7_74775643 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
