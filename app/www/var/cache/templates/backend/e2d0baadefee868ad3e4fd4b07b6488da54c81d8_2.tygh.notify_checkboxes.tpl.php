<?php
/* Smarty version 4.1.1, created on 2024-07-10 13:21:51
  from '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/context_menu/notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e60bf0fa982_64663804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d0baadefee868ad3e4fd4b07b6488da54c81d8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/context_menu/notify_checkboxes.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_668e60bf0fa982_64663804 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_customer'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_customer"),'name_prefix'=>"notify"), 0, false);
}
}
