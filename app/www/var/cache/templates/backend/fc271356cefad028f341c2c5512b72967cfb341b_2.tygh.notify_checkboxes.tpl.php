<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:27:52
  from '/app/www/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e70890ebf4_86537026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc271356cefad028f341c2c5512b72967cfb341b' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_6656e70890ebf4_86537026 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0, false);
}
}
