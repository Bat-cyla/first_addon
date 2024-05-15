<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:57
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_full_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4d8b8ff8_28196429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4095d9aadac1033258277497bed20eec305c872b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_full_description.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4d8b8ff8_28196429 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("full_description")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
