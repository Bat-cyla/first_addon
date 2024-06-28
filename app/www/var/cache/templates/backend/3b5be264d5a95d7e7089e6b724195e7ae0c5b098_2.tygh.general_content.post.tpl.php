<?php
/* Smarty version 4.1.1, created on 2024-06-27 09:47:44
  from '/app/www/design/backend/templates/addons/product_reviews/hooks/usergroups/general_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d0b108bf112_04638886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b5be264d5a95d7e7089e6b724195e7ae0c5b098' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/hooks/usergroups/general_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d0b108bf112_04638886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/product_reviews/backend/usergroup_privileges.js"),$_smarty_tpl);
}
}
