<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:32
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_seo_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2443a8e63_23149563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cea5041ddd6b1354a47198667ae8589293a677' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_seo_settings.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e2443a8e63_23149563 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("seo")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
