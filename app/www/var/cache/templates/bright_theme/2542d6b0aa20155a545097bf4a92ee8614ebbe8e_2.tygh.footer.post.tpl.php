<?php
/* Smarty version 4.1.1, created on 2024-07-11 16:00:11
  from '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/hooks/index/footer.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fd75b2b1ca6_04265985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2542d6b0aa20155a545097bf4a92ee8614ebbe8e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/hooks/index/footer.post.tpl',
      1 => 1720697015,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fd75b2b1ca6_04265985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_generate_view','cp_export_view','cp_variations_modal','cp_generate_view','cp_export_view','cp_variations_modal'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_generate_cart_open_modal_link" data-ca-target-id="cp_generate_cart_modal" title="<?php echo $_smarty_tpl->__("cp_generate_view");?>
"></a>
<div id='cp_generate_cart_modal' class='hidden'><!--cp_generate_cart_modal--></div>

<a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_export_cart_open_modal_link" data-ca-target-id="cp_export_cart_modal" title="<?php echo $_smarty_tpl->__("cp_export_view");?>
"></a>
<div id='cp_export_cart_modal' class='hidden'><!--cp_export_cart_modal--></div>

<a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_variations_open_modal_link" data-ca-target-id="cp_variations_modal" title="<?php echo $_smarty_tpl->__("cp_variations_modal");?>
"></a>
<div id='cp_variations_modal' class='hidden'><!--cp_variations_modal--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_generate_cart_from_file/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_generate_cart_from_file/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_generate_cart_open_modal_link" data-ca-target-id="cp_generate_cart_modal" title="<?php echo $_smarty_tpl->__("cp_generate_view");?>
"></a>
<div id='cp_generate_cart_modal' class='hidden'><!--cp_generate_cart_modal--></div>

<a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_export_cart_open_modal_link" data-ca-target-id="cp_export_cart_modal" title="<?php echo $_smarty_tpl->__("cp_export_view");?>
"></a>
<div id='cp_export_cart_modal' class='hidden'><!--cp_export_cart_modal--></div>

<a class="btn cm-dialog-opener hidden cm-dialog-auto-size" id="cp_variations_open_modal_link" data-ca-target-id="cp_variations_modal" title="<?php echo $_smarty_tpl->__("cp_variations_modal");?>
"></a>
<div id='cp_variations_modal' class='hidden'><!--cp_variations_modal--></div><?php }
}
}
