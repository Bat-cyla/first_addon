<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:27:01
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e7005ecda73_50327762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc917ac52f5f1362ba2c4fb1d9ceca9fa1fdb48' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/scripts.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e7005ecda73_50327762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_panel_configurator/vendor_panel_configurator.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_panel_configurator/colors.js"),$_smarty_tpl);?>

<?php }
}
