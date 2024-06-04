<?php
/* Smarty version 4.1.1, created on 2024-06-04 16:51:02
  from '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/companies/top_links.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f1bc667c0e8_45744849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14855c1a2858d3f343b1e42914b8cb1dd2f12c48' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/companies/top_links.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f1bc667c0e8_45744849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['hide_vendor_store']->value) {?>&nbsp;<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/companies/top_links.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/companies/top_links.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['hide_vendor_store']->value) {?>&nbsp;<?php }
}
}
}
