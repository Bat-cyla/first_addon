<?php
/* Smarty version 4.1.1, created on 2024-07-11 10:53:18
  from '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/export_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f8f6e62ce20_38319027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0161d1ab7ce46ec1ef09260339f758c7a6f0f061' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/export_view.tpl',
      1 => 1720684389,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_668f8f6e62ce20_38319027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_csv_table','cp_pdf_commercial_proposal','cp_export_view_message','download','send','cp_csv_table','cp_pdf_commercial_proposal','cp_export_view_message','download','send'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="cp_export_cart_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_unload_file_form" class="form-horizontal " enctype="multipart/form-data">
            <div class="cp-row">
                <div class="cp-row-item-main">
                    <?php if ($_smarty_tpl->tpl_vars['export_format']->value == 'pdf_csv') {?>
                    <input type="radio" name="format" id="formatChoice1" value="csv_table" />
                    <label for="formatChoice1"><?php echo $_smarty_tpl->__("cp_csv_table");?>
</label>
                    <input type="radio" name="format" id="formatChoice2" value="pdf_cp" />
                    <label for="formatChoice2"><?php echo $_smarty_tpl->__("cp_pdf_commercial_proposal");?>
</label>
                    <?php } else { ?>
                        <input type="hidden" name="format" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['export_format']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                    <div class="cp-message">
                        <?php echo $_smarty_tpl->__("cp_export_view_message");?>

                    </div>

                    <div class="buttons-container">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("download"),'but_name'=>"dispatch[cp_generate_cart_export_file.generate]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"cp_unload_file_form"), 0, false);
?>
                        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="email_address" class="form-horizontal " enctype="multipart/form-data">
                            <input type="email" id="emailField" name="email_address">
                            <label for="emailField"></label>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[cp_generate_cart_export_file.send_mail]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"email_address"), 0, true);
?>
                    </div>
                </div>
            </div>
    </form>
    <?php echo '<script'; ?>
>
        $('#cp_export_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>

    <!--cp_export_cart_modal--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_generate_cart_from_file/views/export_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_generate_cart_from_file/views/export_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="cp_export_cart_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_unload_file_form" class="form-horizontal " enctype="multipart/form-data">
            <div class="cp-row">
                <div class="cp-row-item-main">
                    <?php if ($_smarty_tpl->tpl_vars['export_format']->value == 'pdf_csv') {?>
                    <input type="radio" name="format" id="formatChoice1" value="csv_table" />
                    <label for="formatChoice1"><?php echo $_smarty_tpl->__("cp_csv_table");?>
</label>
                    <input type="radio" name="format" id="formatChoice2" value="pdf_cp" />
                    <label for="formatChoice2"><?php echo $_smarty_tpl->__("cp_pdf_commercial_proposal");?>
</label>
                    <?php } else { ?>
                        <input type="hidden" name="format" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['export_format']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                    <div class="cp-message">
                        <?php echo $_smarty_tpl->__("cp_export_view_message");?>

                    </div>

                    <div class="buttons-container">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("download"),'but_name'=>"dispatch[cp_generate_cart_export_file.generate]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"cp_unload_file_form"), 0, true);
?>
                        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="email_address" class="form-horizontal " enctype="multipart/form-data">
                            <input type="email" id="emailField" name="email_address">
                            <label for="emailField"></label>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[cp_generate_cart_export_file.send_mail]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"email_address"), 0, true);
?>
                    </div>
                </div>
            </div>
    </form>
    <?php echo '<script'; ?>
>
        $('#cp_export_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>

    <!--cp_export_cart_modal--></div><?php }
}
}
