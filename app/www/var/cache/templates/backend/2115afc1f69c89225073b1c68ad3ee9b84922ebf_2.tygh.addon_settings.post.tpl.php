<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:27:19
  from '/app/www/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e7017c16631_90145096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2115afc1f69c89225073b1c68ad3ee9b84922ebf' => 
    array (
      0 => '/app/www/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e7017c16631_90145096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
