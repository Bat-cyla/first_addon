<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:54:22
  from '/app/www/design/backend/templates/common/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fabcead2875_94539793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359c3bdb9967ff45048506330f0c315de593e01d' => 
    array (
      0 => '/app/www/design/backend/templates/common/tooltip.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fabcead2875_94539793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign"),$_smarty_tpl);?>
</a><?php }
}
}
