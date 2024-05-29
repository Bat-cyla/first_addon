<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:31
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_timestamp.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e243cd79c4_92945464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11559198525ce409daec906d4535678fd9a8248' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_timestamp.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e243cd79c4_92945464 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("timestamp")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
