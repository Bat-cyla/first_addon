<?php
/* Smarty version 4.1.1, created on 2024-07-02 11:46:54
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683be7ec97d84_75163838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b1c54f08aad60806198f9f60e997efc1df3d36b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_6683be7ec97d84_75163838 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0, false);
}
}
}
