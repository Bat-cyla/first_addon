<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:35:08
  from '/app/www/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644498c30b909_82821140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5128b23d54e9a636994b3c49a1096ada151c397e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl',
      1 => 1715579490,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/view.tpl' => 2,
  ),
),false)) {
function content_6644498c30b909_82821140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "discussion") {?>hidden<?php }?>">
<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0, false);
?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "discussion") {?>hidden<?php }?>">
<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0, true);
?>
</div><?php }
}
}
