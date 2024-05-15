<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:58
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4e79a6b1_57859561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871977b317e61ceb2bd7cc5d6bb3bda4f33c1441' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_edp_section.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4e79a6b1_57859561 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("edp")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
