<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729cb042a9_73724423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd665759a356326c7fceff49362503cedf39a6ce6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/social_buttons/common/facebook_types.tpl' => 1,
  ),
),false)) {
function content_6655729cb042a9_73724423 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0, false);
}
}
}
