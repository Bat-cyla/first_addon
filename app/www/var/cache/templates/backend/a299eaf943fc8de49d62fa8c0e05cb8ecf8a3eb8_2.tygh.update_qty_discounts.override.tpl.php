<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_qty_discounts.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729c81be09_55264269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a299eaf943fc8de49d62fa8c0e05cb8ecf8a3eb8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_qty_discounts.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729c81be09_55264269 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
