<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:32
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_short_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e24410e2a9_09906174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9094c7a9c5c9cf8cd5702574e258398e34afa277' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_short_description.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e24410e2a9_09906174 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("short_description")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
