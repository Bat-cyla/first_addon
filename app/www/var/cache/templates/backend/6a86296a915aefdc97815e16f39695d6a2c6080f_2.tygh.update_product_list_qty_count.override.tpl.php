<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:50
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668505320edaf4_15181610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a86296a915aefdc97815e16f39695d6a2c6080f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668505320edaf4_15181610 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_qty_count")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
