<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:57
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4d848d97_87944099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ccaea96de454d4bf3dc954c6798ce53f0d9956d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4d848d97_87944099 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
