<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_shipping_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729c79d998_48365173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28396643908683e9313e5649800b06baf6ef853' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_shipping_settings.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729c79d998_48365173 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("shippings")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
