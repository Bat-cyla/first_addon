<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:51:50
  from '/app/www/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641aa7663d550_23776575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '101eefdf31722f13ae38550f763981bef79928a7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641aa7663d550_23776575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);
}
}