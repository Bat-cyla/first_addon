<?php
/* Smarty version 4.1.1, created on 2024-05-15 10:06:12
  from '/app/www/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445ee4c38965_29183580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09337f7fde8e4561cd56db088150811cfc053c59' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1715756768,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_66445ee4c38965_29183580 (Smarty_Internal_Template $_smarty_tpl) {
?><p>Test</p>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
}
}
}
