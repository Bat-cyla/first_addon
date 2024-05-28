<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729caa0480_22657678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dde18127e46d4f1f84e897cb4615c2a73cadd51' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729caa0480_22657678 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isTabAvailable("addons")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
