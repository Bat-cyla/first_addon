<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:51
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_options_type.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729ba51824_96003040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cd40f27b5875d04e603244da80f52819e2c32b5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_options_type.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729ba51824_96003040 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("options_type")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
