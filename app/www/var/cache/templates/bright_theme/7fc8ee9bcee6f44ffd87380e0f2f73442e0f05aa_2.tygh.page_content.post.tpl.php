<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:14:50
  from '/app/www/design/themes/responsive/templates/addons/tags/hooks/pages/page_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446efa688534_40333681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc8ee9bcee6f44ffd87380e0f2f73442e0f05aa' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/tags/hooks/pages/page_content.post.tpl',
      1 => 1715579486,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/tags.tpl' => 2,
  ),
),false)) {
function content_66446efa688534_40333681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/pages/page_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/pages/page_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0, true);
}
}
}
}
