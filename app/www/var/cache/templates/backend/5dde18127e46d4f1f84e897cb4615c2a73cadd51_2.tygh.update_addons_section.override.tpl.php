<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:58
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4ecdb759_49479094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dde18127e46d4f1f84e897cb4615c2a73cadd51' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_addons_section.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4ecdb759_49479094 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isTabAvailable("addons")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
