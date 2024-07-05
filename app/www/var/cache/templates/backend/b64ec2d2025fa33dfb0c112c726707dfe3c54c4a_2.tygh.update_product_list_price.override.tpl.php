<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:49
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66850531c716b5_19490561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64ec2d2025fa33dfb0c112c726707dfe3c54c4a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66850531c716b5_19490561 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_price")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
