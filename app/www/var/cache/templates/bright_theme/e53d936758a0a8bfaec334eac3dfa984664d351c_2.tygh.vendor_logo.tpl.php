<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/blocks/vendors/vendor_logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b53ca6e1_89330636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53d936758a0a8bfaec334eac3dfa984664d351c' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/vendors/vendor_logo.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6686a6b53ca6e1_89330636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-logo-container-vendor">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'],'images'=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image'],'class'=>"ty-logo-container-vendor__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y']),'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0, false);
?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-logo-container-vendor">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'],'images'=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image'],'class'=>"ty-logo-container-vendor__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y']),'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0, true);
?>
</div><?php }
}
}
