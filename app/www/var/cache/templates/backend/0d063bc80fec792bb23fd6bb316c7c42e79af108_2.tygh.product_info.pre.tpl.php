<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:27:20
  from '/app/www/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664455c8b897f2_53535936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d063bc80fec792bb23fd6bb316c7c42e79af108' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_664455c8b897f2_53535936 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0, false);
}
}
}
