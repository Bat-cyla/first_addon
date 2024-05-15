<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:29
  from '/app/www/design/backend/templates/addons/form_builder/hooks/pages/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e31be6e93_15325877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc3af30b7cccbb50339f94cdb8e802c26a5e7a6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/form_builder/hooks/pages/tabs_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/form_builder/views/pages/components/pages_form_elements.tpl' => 1,
  ),
),false)) {
function content_66446e31be6e93_15325877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('addons.form_builder.email_subject_field','addons.form_builder.form_fields','addons.form_builder.form_name','addons.form_builder.other_subject','ttc_addons.form_builder.email_subject_field','form_submit_text','email_to'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_FORM') ? constant('PAGE_TYPE_FORM') : null)) {?>
<div id="content_build_form">

    <div class="control-group">
        <label for="form_subject" class="control-label"><?php echo $_smarty_tpl->__("addons.form_builder.email_subject_field");?>
:</label>
        <div class="controls">
            <select id="form_subject" name="page_data[form][general][<?php echo htmlspecialchars((string) (defined('FORM_SUBJECT') ? constant('FORM_SUBJECT') : null), ENT_QUOTES, 'UTF-8');?>
]">
                <?php $_smarty_tpl->_assignInScope('form_has_elements', false);?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "build_form_elements", null, null);?>
                    <optgroup label="<?php echo $_smarty_tpl->__("addons.form_builder.form_fields");?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                        <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['element']->value['element_type'],array((defined('FORM_INPUT') ? constant('FORM_INPUT') : null),(defined('FORM_SELECT') ? constant('FORM_SELECT') : null)))) {?>
                            <?php $_smarty_tpl->_assignInScope('form_has_elements', true);?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['form']->value[(defined('FORM_SUBJECT') ? constant('FORM_SUBJECT') : null)] === $_smarty_tpl->tpl_vars['element']->value['element_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->tpl_vars['form_has_elements']->value) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'build_form_elements');?>

                <?php }?>
                <option value=""<?php if ($_smarty_tpl->tpl_vars['form']->value[(defined('FORM_SUBJECT') ? constant('FORM_SUBJECT') : null)] == '') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addons.form_builder.form_name");?>
</option>
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['form']->value[(defined('FORM_SUBJECT') ? constant('FORM_SUBJECT') : null)] === "0") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addons.form_builder.other_subject");?>
</option>
            </select>
            <p class="<?php if ($_smarty_tpl->tpl_vars['form']->value[(defined('FORM_SUBJECT') ? constant('FORM_SUBJECT') : null)] !== "0") {?>hidden<?php }?>" id="form_subject_text">
                <input type="text" name="page_data[form][general][<?php echo htmlspecialchars((string) (defined('FORM_SUBJECT_TEXT') ? constant('FORM_SUBJECT_TEXT') : null), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form']->value[(defined('FORM_SUBJECT_TEXT') ? constant('FORM_SUBJECT_TEXT') : null)], ENT_QUOTES, 'UTF-8');?>
" />
            </p>
            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_addons.form_builder.email_subject_field");?>
</p>
        </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            (function(_, $) {
                $('#form_subject').change(function() {
                    if ($(this).val() === "0") {
                        $('#form_subject_text').removeClass('hidden');
                    } else {
                        $('#form_subject_text').addClass('hidden');
                    }
                });
            })(Tygh, Tygh.$);
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div class="control-group">
        <label for="form_submit_text" class="control-label"><?php echo $_smarty_tpl->__("form_submit_text");?>
:</label>
        <?php $_smarty_tpl->_assignInScope('form_submit_const', (defined('FORM_SUBMIT') ? constant('FORM_SUBMIT') : null));?>
        <div class="controls">
            <textarea id="form_submit_text" class="cm-wysiwyg input-textarea-long" rows="5" cols="50" name="page_data[form][general][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_submit_const']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['form_submit_const']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>

    </div>

    <div class="control-group">
        <label for="form_recipient" class="cm-required control-label"><?php echo $_smarty_tpl->__("email_to");?>
:</label>
        <?php $_smarty_tpl->_assignInScope('form_recipient_const', (defined('FORM_RECIPIENT') ? constant('FORM_RECIPIENT') : null));?>
        <div class="controls">
            <input id="form_recipient" class="input-text" type="text" name="page_data[form][general][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_recipient_const']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['form_recipient_const']->value], ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/form_builder/views/pages/components/pages_form_elements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
}
