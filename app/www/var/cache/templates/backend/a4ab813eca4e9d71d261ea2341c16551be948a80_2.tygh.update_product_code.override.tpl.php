<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:49
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_code.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66850531bf5793_16570859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4ab813eca4e9d71d261ea2341c16551be948a80' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_code.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66850531bf5793_16570859 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("product_code")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}