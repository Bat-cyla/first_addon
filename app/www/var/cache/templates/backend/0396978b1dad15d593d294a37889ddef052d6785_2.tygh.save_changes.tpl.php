<?php
/* Smarty version 4.1.1, created on 2024-06-26 16:35:47
  from '/app/www/design/backend/templates/buttons/save_changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667c1933bfda44_30791199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0396978b1dad15d593d294a37889ddef052d6785' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/save_changes.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_667c1933bfda44_30791199 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
