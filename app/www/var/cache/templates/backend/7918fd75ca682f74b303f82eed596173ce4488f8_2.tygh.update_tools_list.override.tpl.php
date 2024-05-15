<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:59
  from '/app/www/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4f071da3_71222692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7918fd75ca682f74b303f82eed596173ce4488f8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4f071da3_71222692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['product_data']->value['product_type'] == smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }
}
}
