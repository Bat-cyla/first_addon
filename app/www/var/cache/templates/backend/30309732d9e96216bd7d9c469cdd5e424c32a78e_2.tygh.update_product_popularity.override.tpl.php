<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:32
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2441c9cc1_16365576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30309732d9e96216bd7d9c469cdd5e424c32a78e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e2441c9cc1_16365576 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
