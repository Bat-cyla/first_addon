<?php
/* Smarty version 4.1.1, created on 2024-06-28 14:32:35
  from '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e9f534f8680_85048634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c335d6c802ef40c040cfdde3495dccce929b90' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/view.tpl',
      1 => 1719573210,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_667e9f534f8680_85048634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_of_column_order','cp_name','cp_artiqle','cp_qty','cp_load_file_instruction','cp_load_file','cp_column_example','cp_warning','load','cancel','select_of_column_order','cp_name','cp_artiqle','cp_qty','cp_load_file_instruction','cp_load_file','cp_column_example','cp_warning','load','cancel'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="cp_generate_cart_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_upload_file_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
    <input type="hidden" name="result_ids" value="cp_variations_modal" />
        <fieldset>
            <div class="cp-row">
                <div class="cp-row-item-main">
                    <div class="control-group">
                        <label for="cp-controls" class="control-label"><h3><?php echo $_smarty_tpl->__("select_of_column_order");?>
:</h3></label>
                        <div id="cp-controls">
                            <div class="cp-row">
                                <div class="cp-row-item-fields">
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_name" class="control-label"><?php echo $_smarty_tpl->__("cp_name");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[name]" size="1" placeholder="A" class="input-micro cp-input" id="field_name">
                                        </div>
                                    </div>
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_artiqle" class="control-label cp-required"><?php echo $_smarty_tpl->__("cp_artiqle");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[artiqle]" size="1" placeholder="B" class="input-micro cp-input" id="field_artiqle">
                                        </div>
                                    </div>
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_amount" class="control-label cp-required"><?php echo $_smarty_tpl->__("cp_qty");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[amount]" size="1" placeholder="C" class="input-micro cp-input" id="field_amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="cp-row-item-empty"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input class="cp-upload-file" type="file" name="cp_generate_attach[]" id="upload-file" accept=".xls, .xlsx, .csv" size="1"/>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['template_data']->value['attachment_id']) {?>
                        <div class="cp-file-template">
                            <?php echo $_smarty_tpl->__("cp_load_file_instruction");?>
<br>
                            <a class="cp-upload-template-link" href="<?php echo htmlspecialchars((string) fn_url("cp_generate_cart_from_file.get_file?attachment_id=".((string)$_smarty_tpl->tpl_vars['template_data']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><b>(<?php echo $_smarty_tpl->__("cp_load_file");?>
)</b></a>
                        </div>
                    <?php }?>
                </div>
                <div class="cp-row-item-side">
                    <div class="cp-img">
                        <h4><?php echo $_smarty_tpl->__("cp_column_example");?>
:</h4><br>
                        <img src="design/themes/responsive/media/images/addons/cp_generate_cart_from_file/images/template.png" alt="Image is not founded">
                        <p class="cp-warning"><?php echo $_smarty_tpl->__("cp_warning");?>
</p>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="buttons-container">
		    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("load"),'but_name'=>"dispatch[cp_generate_cart_from_file.generate]",'but_meta'=>"cp-submit ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"cp_upload_file_form"), 0, false);
?>
            <span class="ty-close-text"><a class="cm-dialog-closer ty-btn ty-float-right"><?php echo $_smarty_tpl->__("cancel");?>
</a></span>
        </div>
    </form>

    <?php echo '<script'; ?>
>
        $('#cp_generate_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>
<!--cp_generate_cart_modal--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_generate_cart_from_file/views/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_generate_cart_from_file/views/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="cp_generate_cart_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_upload_file_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
    <input type="hidden" name="result_ids" value="cp_variations_modal" />
        <fieldset>
            <div class="cp-row">
                <div class="cp-row-item-main">
                    <div class="control-group">
                        <label for="cp-controls" class="control-label"><h3><?php echo $_smarty_tpl->__("select_of_column_order");?>
:</h3></label>
                        <div id="cp-controls">
                            <div class="cp-row">
                                <div class="cp-row-item-fields">
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_name" class="control-label"><?php echo $_smarty_tpl->__("cp_name");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[name]" size="1" placeholder="A" class="input-micro cp-input" id="field_name">
                                        </div>
                                    </div>
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_artiqle" class="control-label cp-required"><?php echo $_smarty_tpl->__("cp_artiqle");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[artiqle]" size="1" placeholder="B" class="input-micro cp-input" id="field_artiqle">
                                        </div>
                                    </div>
                                    <div class="cp-controls">
                                        <div class="cp-row-field">
                                            <h4><label for="field_amount" class="control-label cp-required"><?php echo $_smarty_tpl->__("cp_qty");?>
</label></h4>
                                            <input type="text" maxlength="5" name="array_fields[amount]" size="1" placeholder="C" class="input-micro cp-input" id="field_amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="cp-row-item-empty"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input class="cp-upload-file" type="file" name="cp_generate_attach[]" id="upload-file" accept=".xls, .xlsx, .csv" size="1"/>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['template_data']->value['attachment_id']) {?>
                        <div class="cp-file-template">
                            <?php echo $_smarty_tpl->__("cp_load_file_instruction");?>
<br>
                            <a class="cp-upload-template-link" href="<?php echo htmlspecialchars((string) fn_url("cp_generate_cart_from_file.get_file?attachment_id=".((string)$_smarty_tpl->tpl_vars['template_data']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><b>(<?php echo $_smarty_tpl->__("cp_load_file");?>
)</b></a>
                        </div>
                    <?php }?>
                </div>
                <div class="cp-row-item-side">
                    <div class="cp-img">
                        <h4><?php echo $_smarty_tpl->__("cp_column_example");?>
:</h4><br>
                        <img src="design/themes/responsive/media/images/addons/cp_generate_cart_from_file/images/template.png" alt="Image is not founded">
                        <p class="cp-warning"><?php echo $_smarty_tpl->__("cp_warning");?>
</p>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="buttons-container">
		    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("load"),'but_name'=>"dispatch[cp_generate_cart_from_file.generate]",'but_meta'=>"cp-submit ty-btn__primary cm-process-items cm-dialog-closer",'but_target_form'=>"cp_upload_file_form"), 0, true);
?>
            <span class="ty-close-text"><a class="cm-dialog-closer ty-btn ty-float-right"><?php echo $_smarty_tpl->__("cancel");?>
</a></span>
        </div>
    </form>

    <?php echo '<script'; ?>
>
        $('#cp_generate_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>
<!--cp_generate_cart_modal--></div><?php }
}
}
