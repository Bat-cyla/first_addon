<?php
/* Smarty version 4.1.1, created on 2024-07-02 11:46:54
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683be7ee16a31_48000984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c257c22c55f2e7d8c187c7bc5784beed9e5c347' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl' => 1,
  ),
),false)) {
function content_6683be7ee16a31_48000984 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapprove_product'));
$_smarty_tpl->_subTemplateRender("tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product']))), 0, false);
}
}
