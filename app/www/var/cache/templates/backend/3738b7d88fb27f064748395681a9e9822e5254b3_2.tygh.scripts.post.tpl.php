<?php
/* Smarty version 4.1.1, created on 2024-06-26 16:28:30
  from '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667c177ecf6d27_91077366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3738b7d88fb27f064748395681a9e9822e5254b3' => 
    array (
      0 => '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667c177ecf6d27_91077366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>

<?php }
}
