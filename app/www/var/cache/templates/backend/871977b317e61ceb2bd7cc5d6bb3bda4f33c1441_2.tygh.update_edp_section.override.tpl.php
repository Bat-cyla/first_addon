<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:07:32
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e24405be98_09173002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871977b317e61ceb2bd7cc5d6bb3bda4f33c1441' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e24405be98_09173002 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("edp")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
