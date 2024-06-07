<?php
/* Smarty version 4.1.1, created on 2024-05-29 12:38:04
  from '/app/www/design/backend/templates/addons/age_verification/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656f77c309267_88793616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ba7a3c396c7a62ab2b6dd4987ce18d4a5b0f91' => 
    array (
      0 => '/app/www/design/backend/templates/addons/age_verification/hooks/products/detailed_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:addons/age_verification/views/age_verification/components/update_fields.tpl' => 1,
  ),
),false)) {
function content_6656f77c309267_88793616 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('array_name'=>"product_data",'record'=>$_smarty_tpl->tpl_vars['product_data']->value), 0, false);
}
}
