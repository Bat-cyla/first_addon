<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:58
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_promo_text.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4e9716e0_17644036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d3676f1d590ecffdd31c892b6f25f767b09912' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_promo_text.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4e9716e0_17644036 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("promo_text")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
