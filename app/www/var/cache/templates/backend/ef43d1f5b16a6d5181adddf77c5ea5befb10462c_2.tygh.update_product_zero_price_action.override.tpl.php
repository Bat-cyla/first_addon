<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:51
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_zero_price_action.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729bc803d2_69709356',
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
function content_6655729bc803d2_69709356 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("zero_price_action")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
