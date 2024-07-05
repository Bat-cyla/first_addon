<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:50
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6685053276bb01_75770824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '373ea9265d124ff2d87dbeadf4fef310b1bd262f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6685053276bb01_75770824 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("out_of_stock_actions")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
