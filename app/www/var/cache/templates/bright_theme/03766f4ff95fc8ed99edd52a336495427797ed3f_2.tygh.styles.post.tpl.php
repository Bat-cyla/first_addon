<?php
/* Smarty version 4.1.1, created on 2024-05-27 14:38:13
  from '/app/www/design/themes/responsive/templates/addons/blog/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665470a558f864_36762412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03766f4ff95fc8ed99edd52a336495427797ed3f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/blog/hooks/index/styles.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665470a558f864_36762412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/blog/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/blog/responsive.less"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/blog/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/blog/responsive.less"),$_smarty_tpl);
}
}
}
