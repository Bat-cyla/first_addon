<?php
/* Smarty version 4.1.1, created on 2024-06-26 16:28:30
  from '/app/www/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667c177eeb4608_02143368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '101eefdf31722f13ae38550f763981bef79928a7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667c177eeb4608_02143368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);
}
}
