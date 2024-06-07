<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:46:19
  from '/app/www/design/backend/templates/addons/banners/views/banners/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66444c2b4e0506_96522639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5251ca79d20b4576ee9dcbf3d19965bced0414' => 
    array (
      0 => '/app/www/design/backend/templates/addons/banners/views/banners/update.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:views/localizations/components/select.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66444c2b4e0506_96522639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','type','graphic_banner','text_banner','image','description','open_in_new_window','url','creation_date','banner_details_notes','banners.new_banner'));
if ($_smarty_tpl->tpl_vars['banner']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['banner']->value['banner_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>



<?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['banner']->value,"banners"));
$_smarty_tpl->_assignInScope('hide_inputs', fn_check_form_permissions(''));
$_smarty_tpl->_assignInScope('b_type', (($tmp = $_smarty_tpl->tpl_vars['banner']->value['type'] ?? null)===null||$tmp==='' ? "G" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value || $_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>" name="banners_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="banner_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

    <div id="content_general">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"banners:general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"banners:general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="control-group">
            <label for="elm_banner_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
            <input type="text" name="banner_data[banner]" id="elm_banner_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" /></div>
        </div>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"banner_data[company_id]",'id'=>"banner_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['banner']->value['company_id']), 0, false);
?>
        <?php }?>

        <div class="control-group">
            <label for="elm_banner_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
            <select name="banner_data[type]" id="elm_banner_type" onchange="Tygh.$('#banner_graphic').toggle();  Tygh.$('#banner_text').toggle(); Tygh.$('#banner_url').toggle();  Tygh.$('#banner_target').toggle();">
                <option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G") {?>selected="selected"<?php }?> value="G"><?php echo $_smarty_tpl->__("graphic_banner");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "T") {?>selected="selected"<?php }?> value="T"><?php echo $_smarty_tpl->__("text_banner");?>
</option>
            </select>
            </div>
        </div>

        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value != "G") {?>hidden<?php }?>" id="banner_graphic">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"banners_main",'image_object_type'=>"promo",'image_pair'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
            </div>
        </div>

        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value == "G") {?>hidden<?php }?>" id="banner_text">
            <label class="control-label" for="elm_banner_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_banner_description" name="banner_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value == "T") {?>hidden<?php }?>" id="banner_target">
            <label class="control-label" for="elm_banner_target"><?php echo $_smarty_tpl->__("open_in_new_window");?>
</label>
            <div class="controls">
            <input type="hidden" name="banner_data[target]" value="T" />
            <input type="checkbox" name="banner_data[target]" id="elm_banner_target" value="B" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>checked="checked"<?php }?> />
            </div>
        </div>

        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value == "T") {?>hidden<?php }?>" id="banner_url">
            <label class="control-label" for="elm_banner_url"><?php echo $_smarty_tpl->__("url");?>
:</label>
            <div class="controls">
                <input type="text" name="banner_data[url]" id="elm_banner_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['url'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_banner_timestamp_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
            <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_banner_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"banner_data[timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['banner']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, false);
?>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_name'=>"banner_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['banner']->value['localization']), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"banner_data[status]",'id'=>"elm_banner_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['banner']->value,'hidden'=>true), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"banners:general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--content_general--></div>

    <div id="content_addons" class="hidden clearfix">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"banners:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"banners:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"banners:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--content_addons--></div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"banners:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"banners:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"banners:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_target_form'=>"banners_form",'but_name'=>"dispatch[banners.update]"), 0, false);
?>
    <?php } else { ?>
        <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
            <?php $_smarty_tpl->_assignInScope('hide_second_button', true);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[banners.update]",'but_role'=>"submit-link",'but_target_form'=>"banners_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"banners:update_notes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"banners:update_notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php echo $_smarty_tpl->__("banner_details_notes",array("[layouts_href]"=>fn_url('block_manager.manage')));?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"banners:update_notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['banner']->value['banner'] : $_smarty_tpl->__("banners.new_banner"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
?>

<?php }
}
