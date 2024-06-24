<?php
/* Smarty version 4.1.1, created on 2024-06-11 09:23:17
  from '/app/www/design/backend/templates/views/exim/import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6667ed550db676_96128403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fccc2c7561ae44fb03c4bbdf06c32a525f5ed6b5' => 
    array (
      0 => '/app/www/design/backend/templates/views/exim/import.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/exim/components/csv_delimiters.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6667ed550db676_96128403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_exim_import_notice','import_options','csv_delimiter','select_file','import','import_data'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('p_id', $_smarty_tpl->tpl_vars['pattern']->value['pattern_id']);?>
<div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['notes']) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "local_notes", null, null);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pattern']->value['notes'], 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
                <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->__($_smarty_tpl->tpl_vars['note']->value), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
                <hr />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['pattern']->value['name'],'notes'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'local_notes'),'notes_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'target'=>"#import_fields_".((string)$_smarty_tpl->tpl_vars['p_id']->value)), 0, false);
?>
    <div id="import_fields_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
        <p class="p-notice"><?php echo $_smarty_tpl->__("text_exim_import_notice");?>
</p>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['pattern']->value['export_fields'],'size'=>5,'assign'=>"splitted_fields",'simple'=>true,'size_is_horizontal'=>true),$_smarty_tpl);?>

        <table class="table table-striped table--relative table-exim">
            <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_fields']->value, 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
                <td>
                    <ul class="unstyled">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'f', false, 'field');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('label', fn_exim_get_field_label($_smarty_tpl->tpl_vars['field']->value));?>
                        <li class="table-import-field"><?php if ($_smarty_tpl->tpl_vars['f']->value['required']) {?><strong><?php }?><p class="import-field"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php if ($_smarty_tpl->tpl_vars['label']->value) {?><p class="import-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
if ($_smarty_tpl->tpl_vars['f']->value['required']) {?></strong><?php }?></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        </table>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("import_options"),'target'=>"#import_options_".((string)$_smarty_tpl->tpl_vars['p_id']->value)), 0, true);
?>
    <div id="import_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_manage_layout_form" enctype="multipart/form-data" class="cm-ajax cm-comet form-horizontal form-edit">
    <input type="hidden" name="section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="pattern_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['options']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pattern']->value['options'], 'o', false, 'k');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
    <?php if (!$_smarty_tpl->tpl_vars['o']->value['export_only']) {?>
    <div class="control-group">
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['title']);?>
:
        </label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['o']->value['type'] == "checkbox") {?>
                <input type="hidden" name="import_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox" type="checkbox" name="import_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['o']->value['default_value'] == "Y") {?>checked="checked"<?php }?> />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type'] == "input") {?>
                <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large" type="text" name="import_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type'] == "select") {?>
                <select name="import_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['variants'], 'vi', false, 'vk');
$_smarty_tpl->tpl_vars['vi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value == $_smarty_tpl->tpl_vars['o']->value['default_value']) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vi']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['o']->value['notes']) {?>
                <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['o']->value['notes'];?>
</p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['o']->value['description']) {?>
                <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['description']);?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
        <div class="controls"><?php $_smarty_tpl->_subTemplateRender("tygh:views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"import_options[delimiter]"), 0, false);
?></div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("select_file");?>
:</label>
        <div class="controls"><?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"csv_file[0]",'prefix'=>$_smarty_tpl->tpl_vars['p_id']->value), 0, false);
?></div>
    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <div class="cm-tab-tools tab-tools" id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[exim.import]",'but_role'=>"submit-link",'but_target_form'=>((string)$_smarty_tpl->tpl_vars['p_id']->value)."_manage_layout_form",'but_meta'=>"cm-tab-tools tab-tools"), 0, false);
?>
            <!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    </form>
    </div>
<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['p_id']->value), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("import_data"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
