<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:58
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_features.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4eb77d29_12011195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66961f63189a8c6ad49a4f856425e9f832173afe' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_features.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4eb77d29_12011195 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("features")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
