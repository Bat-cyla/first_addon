<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:31
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2435e0a63_97407617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3ba7d2ada97c731c836dd544b817705e4db7293' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e2435e0a63_97407617 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
