<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:57
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4df3c911_57402165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8246919492e5dc095fab64812e5ce2abbbe5510' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4df3c911_57402165 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tracking")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
