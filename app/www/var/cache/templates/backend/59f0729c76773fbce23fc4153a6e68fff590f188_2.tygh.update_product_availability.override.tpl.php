<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:31
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e243906235_50241551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f0729c76773fbce23fc4153a6e68fff590f188' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e243906235_50241551 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
