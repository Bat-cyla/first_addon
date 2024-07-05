<?php
/* Smarty version 4.1.1, created on 2024-07-02 08:27:32
  from '/app/www/design/backend/templates/views/exim/export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66838fc49266d0_52980146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48a39dc444d3b60d580ced3465a8979796d9969f' => 
    array (
      0 => '/app/www/design/backend/templates/views/exim/export.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:buttons/button.tpl' => 5,
    'tygh:views/exim/components/selectboxes.tpl' => 1,
    'tygh:views/exim/components/csv_delimiters.tpl' => 1,
    'tygh:views/exim/components/csv_output.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66838fc49266d0_52980146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('error_exim_layout_required_fields','text_objects_for_export','change_range','delete_range','text_select_range','select','general','layouts','delete','no_items','save_layout','or','clear_fields','save_layout_as','save','export_options','csv_delimiter','output','tt_views_exim_export_output','filename','exported_files','filename','filesize','filename','filesize','bytes','download','delete','no_data','exported_files','export','export_data'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr('error_exim_layout_missed_fields', '<?php echo strtr((string)$_smarty_tpl->__("error_exim_layout_required_fields"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');

    $(document).ready(function() {
        $(_.doc).on('click', '#exim_select_range', function(event){
            var pattern_id = $('.nav-tabs li.active').attr('id');
            $(this).attr('href', $(this).attr('href') + '&pattern_id=' + pattern_id);
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['pattern']->value['range_options']) {?>
    <?php $_smarty_tpl->_assignInScope('r_opt', $_smarty_tpl->tpl_vars['pattern']->value['range_options']);?>
    <?php $_smarty_tpl->_assignInScope('r_url', fn_url("exim.export?section=".((string)$_smarty_tpl->tpl_vars['pattern']->value['section'])."&pattern_id=".((string)$_smarty_tpl->tpl_vars['pattern']->value['pattern_id'])));?>
    <?php $_smarty_tpl->_assignInScope('oname', mb_strtolower($_smarty_tpl->tpl_vars['r_opt']->value['object_name'], 'UTF-8'));?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['export_range']->value) {?>
        <?php echo $_smarty_tpl->__("text_objects_for_export",array("[total]"=>$_smarty_tpl->tpl_vars['export_range']->value,"[name]"=>$_smarty_tpl->tpl_vars['oname']->value));?>

        <p>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['r_opt']->value['selector_url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("change_range");?>
 &rsaquo;&rsaquo;</a>&nbsp;&nbsp;&nbsp;<a class="cm-post" href="<?php echo htmlspecialchars((string) fn_url("exim.delete_range?section=".((string)$_smarty_tpl->tpl_vars['pattern']->value['section'])."&pattern_id=".((string)$_smarty_tpl->tpl_vars['pattern']->value['pattern_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("delete_range");?>
 &rsaquo;&rsaquo;</a>
        </p>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("text_select_range",array("[name]"=>$_smarty_tpl->tpl_vars['oname']->value));?>
: <a href="<?php echo htmlspecialchars((string) fn_url("exim.select_range?section=".((string)$_smarty_tpl->tpl_vars['pattern']->value['section'])), ENT_QUOTES, 'UTF-8');?>
" id="exim_select_range"><?php echo $_smarty_tpl->__("select");?>
 &rsaquo;&rsaquo;</a>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);
$_smarty_tpl->_assignInScope('p_id', $_smarty_tpl->tpl_vars['pattern']->value['pattern_id']);?>
<div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("general")), 0, false);
?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_set_layout_form" class="form-horizontal form-edit">
    <input type="hidden" name="section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="layout_data[pattern_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("layouts");?>
:</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['layouts']->value) {?>
                <select name="layout_data[layout_id]" id="s_layout_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-submit" data-ca-dispatch="dispatch[exim.set_layout]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value['active'] == "Y") {
$_smarty_tpl->_assignInScope('active_layout', $_smarty_tpl->tpl_vars['l']->value);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("delete"),'but_name'=>"dispatch[exim.delete_layout]",'but_meta'=>"cm-confirm"), 0, false);
?>

            <?php } else { ?>
                <p class="lowercase"><?php echo $_smarty_tpl->__("no_items");?>
</p>
            <?php }?>
        </div>
    </div>

    </form>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_manage_layout_form" class="cm-ajax cm-comet form-edit form-horizontal cm-disable-check-changes">
    <input type="hidden" name="section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="layout_data[pattern_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="layout_data[layout_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['active_layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/exim/components/selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['pattern']->value['export_fields'],'assigned_ids'=>$_smarty_tpl->tpl_vars['active_layout']->value['cols'],'left_name'=>"layout_data[cols]",'left_id'=>"pattern_".((string)$_smarty_tpl->tpl_vars['p_id']->value),'p_id'=>$_smarty_tpl->tpl_vars['p_id']->value), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['export_notice']) {?><p><?php echo $_smarty_tpl->tpl_vars['pattern']->value['export_notice'];?>
</p><?php }?>

    <div class="row-fluid shift-top export-save-layout">
        <div class="span6 form-inline">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[exim.store_layout]",'but_text'=>$_smarty_tpl->__("save_layout")), 0, true);
?>
            <?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;&nbsp;
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("clear_fields"),'but_onclick'=>"Tygh."."$"."('#pattern_".((string)$_smarty_tpl->tpl_vars['p_id']->value)."').moveOptions('#pattern_".((string)$_smarty_tpl->tpl_vars['p_id']->value)."_right', ".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."move_all: true".((string)$_smarty_tpl->tpl_vars['rdelim']->value).");",'but_role'=>"edit"), 0, true);
?>
        </div>
        <div class="span6">
            <div class="form-inline pull-right">
                <label for="layout_data"><?php echo $_smarty_tpl->__("save_layout_as");?>
:</label>
                <input type="text" id="layout_data" class="input-text valign" name="layout_data[name]" value="" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[exim.store_layout.save_as]",'but_text'=>$_smarty_tpl->__("save")), 0, true);
?>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("export_options")), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['options']) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pattern']->value['options'], 'o', false, 'k');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['o']->value['import_only']) {?>
        <div class="control-group">
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['title']);?>
:
            </label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['o']->value['type'] == "checkbox") {?>
                    <input type="hidden" name="export_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                    <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="export_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['o']->value['default_value'] == "Y") {?>checked="checked"<?php }?> />
                <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type'] == "input") {?>
                    <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large" type="text" name="export_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type'] == "languages") {?>
                    <div class="checkbox-list shift-input">
                        <?php echo smarty_function_html_checkboxes(array('name'=>"export_options[lang_code]",'options'=>$_smarty_tpl->tpl_vars['export_langs']->value,'selected'=>$_smarty_tpl->tpl_vars['o']->value['default_value'],'columns'=>8),$_smarty_tpl);?>

                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type'] == "select") {?>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="export_options[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]">
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['variants_function']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, call_user_func($_smarty_tpl->tpl_vars['o']->value['variants_function']), 'vi', false, 'vk');
$_smarty_tpl->tpl_vars['vi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value == $_smarty_tpl->tpl_vars['o']->value['default_value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vi']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['variants'], 'vi', false, 'vk');
$_smarty_tpl->tpl_vars['vi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value == $_smarty_tpl->tpl_vars['o']->value['default_value']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vi']->value);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
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
    <?php $_smarty_tpl->_assignInScope('override_options', $_smarty_tpl->tpl_vars['pattern']->value['override_options']);?>
    <?php if ($_smarty_tpl->tpl_vars['override_options']->value['delimiter']) {?>
        <input type="hidden" name="export_options[delimiter]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['override_options']->value['delimiter'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php } else { ?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"export_options[delimiter]",'value'=>$_smarty_tpl->tpl_vars['active_layout']->value['options']['delimiter']), 0, false);
?>
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['override_options']->value['output']) {?>
        <input type="hidden" name="export_options[output]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['override_options']->value['output'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php } else { ?>
    <div class="control-group">
        <label for="output" class="control-label"><?php echo $_smarty_tpl->__("output");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/exim/components/csv_output.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"export_options[output]",'value'=>$_smarty_tpl->tpl_vars['active_layout']->value['options']['output']), 0, false);
?>
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_exim_export_output");?>
</p>
        </div>
    </div>
    <?php }?>
    <div class="control-group">
        <label for="filename" class="control-label"><?php echo $_smarty_tpl->__("filename");?>
:</label>
        <div class="controls">
            <input type="text" name="export_options[filename]" id="filename" size="50" class="input-large" value="<?php if ($_smarty_tpl->tpl_vars['pattern']->value['filename']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value['filename'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['active_layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%m%d%Y"), ENT_QUOTES, 'UTF-8');?>
.csv<?php }?>" />
            <?php $_smarty_tpl->_assignInScope('filename_description', $_smarty_tpl->tpl_vars['pattern']->value['filename_description']);?>
            <?php if ($_smarty_tpl->tpl_vars['pattern']->value['filename_description']) {?><p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['filename_description']->value);?>
</p><?php }?>

            <p class="muted description">
                <?php echo $_smarty_tpl->__('text_file_editor_notice',array("[href]"=>fn_url("file_editor.manage?path=/")));?>

            </p>
        </div>
    </div>
</form>
<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['p_id']->value), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
<div class="hidden" title="<?php echo $_smarty_tpl->__("exported_files");?>
" id="content_exported_files">
<?php if ($_smarty_tpl->tpl_vars['export_files']->value) {?>
    <div class="table-wrapper table-responsive-wrapper">
        <table class="table table-responsive">
        <thead>
            <tr>
                <th width="65%"><?php echo $_smarty_tpl->__("filename");?>
</th>
                <th width="20%"><?php echo $_smarty_tpl->__("filesize");?>
</th>
                <th width="15%">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_files']->value, 'file', false, NULL, 'export_files', array (
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('file_name', rawurlencode((string)$_smarty_tpl->tpl_vars['file']->value['name']));?>
        <tr>
            <td data-th="<?php echo $_smarty_tpl->__("filename");?>
">
                <a href="<?php echo htmlspecialchars((string) fn_url("exim.get_file?filename=".((string)$_smarty_tpl->tpl_vars['file_name']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td data-th="<?php echo $_smarty_tpl->__("filesize");?>
">
                <?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['file']->value['size']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("bytes");?>
</td>
            <td class="right" data-th="&nbsp;">
                <div class="hidden-tools">
                    <a href="<?php echo htmlspecialchars((string) fn_url("exim.get_file?filename=".((string)$_smarty_tpl->tpl_vars['file_name']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("download");?>
" class="cm-tooltip btn"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-download"),$_smarty_tpl);?>
</a>
                    <a class="cm-ajax cm-confirm cm-post btn cm-tooltip" title="<?php echo $_smarty_tpl->__("delete");?>
" href="<?php echo htmlspecialchars((string) fn_url("exim.delete_file?filename=".((string)$_smarty_tpl->tpl_vars['file_name']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="content_exported_files"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>
</a>
                </div>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
    </div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--content_exported_files--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("exported_files"),'target_id'=>"content_exported_files"), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <div class="cm-tab-tools tab-tools pull-right shift-left" id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("export"),'but_name'=>"dispatch[exim.export]",'but_role'=>"submit-link",'but_target_form'=>((string)$_smarty_tpl->tpl_vars['p_id']->value)."_manage_layout_form",'but_meta'=>"cm-tab-tools tab-tools cm-comet"), 0, true);
?>
        <!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("export_data"),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_storefront'=>true,'show_all_storefront'=>!(fn_allowed_for("MULTIVENDOR"))), 0, false);
?>

<?php if ($_REQUEST['output'] == "D") {?>
<meta http-equiv="Refresh" content="0;URL=<?php echo htmlspecialchars((string) fn_url("exim.get_file?filename=".((string)$_REQUEST['filename'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
