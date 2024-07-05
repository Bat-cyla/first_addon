<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/addons/vendor_communication/hooks/companies/products.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b5c2b677_13912472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a318a9a1e8bb062b70335f6d9ba75dab76d143a0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_communication/hooks/companies/products.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
  ),
),false)) {
function content_6686a6b5c2b677_13912472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_vendor'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value,'',(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),array("use_i18n_fields"=>true))), 0, false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/companies/products.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/companies/products.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_vendor'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value,'',(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),array("use_i18n_fields"=>true))), 0, true);
}?>

<?php }
}
}
