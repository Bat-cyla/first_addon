<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:49
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_zero_price_action.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66850531d72fc0_20551890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef43d1f5b16a6d5181adddf77c5ea5befb10462c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_zero_price_action.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66850531d72fc0_20551890 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("zero_price_action")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
