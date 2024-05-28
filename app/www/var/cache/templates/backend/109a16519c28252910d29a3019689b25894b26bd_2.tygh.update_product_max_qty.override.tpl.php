<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:51
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729bd9e797_69384973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109a16519c28252910d29a3019689b25894b26bd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729bd9e797_69384973 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("max_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
