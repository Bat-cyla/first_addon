<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729ceac119_09177426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8bff5acbe0929c2bee7ec91a7ff0129de7478eb' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729ceac119_09177426 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product_data']->value['product_type'] === constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_clone', false ,false ,2);
}
}
}
