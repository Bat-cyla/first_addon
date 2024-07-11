<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:31:38
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/products/options_modifiers.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e711a4c5bc1_33383521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10be44b67a74d64b2349bfa80838eeb9c0bebc5' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/products/options_modifiers.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/common/point_modifier.tpl' => 2,
  ),
),false)) {
function content_668e711a4c5bc1_33383521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_modifiers.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_modifiers.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0, true);
}
}
}
}
