<?php
/* Smarty version 4.1.1, created on 2024-07-02 11:46:55
  from '/app/www/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683be7f7cfec2_99078728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71939998bcd16eb41c6a07fb653d4a7369717c43' => 
    array (
      0 => '/app/www/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683be7f7cfec2_99078728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
