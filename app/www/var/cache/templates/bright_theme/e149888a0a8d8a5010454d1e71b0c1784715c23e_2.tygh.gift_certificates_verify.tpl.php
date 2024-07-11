<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:06
  from '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e267fc6d7_07524493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e149888a0a8d8a5010454d1e71b0c1784715c23e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl',
      1 => 1720682353,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
  ),
),false)) {
function content_668f9e267fc6d7_07524493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('certificate_verification','certificate_verification','gift_cert_code','enter_code','apply','apply','gift_certificate_verification','certificate_verification','certificate_verification','gift_cert_code','enter_code','apply','apply','gift_certificate_verification'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-gift-certificate-validate gift-validate">
    <form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->__("certificate_verification");?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="gift_cert_verify" />
        <h3 class="ty-gift-certificate-validate__title"><?php echo $_smarty_tpl->__("certificate_verification");?>
</h3>
        <div class="ty-input-append">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-gift ty-gift-certificate__icon"),$_smarty_tpl);?>
<label for="id_verify_code" class="hidden cm-required"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</label><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="ty-input-text cm-hint" /><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"gift_certificates.verify",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, false);
?>
        </div>
    </form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-gift-certificate-validate gift-validate">
    <form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->__("certificate_verification");?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="gift_cert_verify" />
        <h3 class="ty-gift-certificate-validate__title"><?php echo $_smarty_tpl->__("certificate_verification");?>
</h3>
        <div class="ty-input-append">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-gift ty-gift-certificate__icon"),$_smarty_tpl);?>
<label for="id_verify_code" class="hidden cm-required"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</label><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="ty-input-text cm-hint" /><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"gift_certificates.verify",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, true);
?>
        </div>
    </form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php }
}
}
