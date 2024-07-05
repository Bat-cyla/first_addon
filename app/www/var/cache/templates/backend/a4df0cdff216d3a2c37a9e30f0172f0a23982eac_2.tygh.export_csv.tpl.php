<?php
/* Smarty version 4.1.1, created on 2024-07-02 15:47:04
  from '/app/www/design/backend/templates/views/exim/components/export_csv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683f6c888d064_80834299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4df0cdff216d3a2c37a9e30f0172f0a23982eac' => 
    array (
      0 => '/app/www/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1719923446,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683f6c888d064_80834299 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['fields']->value) {
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
