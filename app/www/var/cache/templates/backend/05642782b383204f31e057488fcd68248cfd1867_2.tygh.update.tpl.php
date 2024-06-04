<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:25:57
  from '/app/www/design/backend/templates/views/pages/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07d5af0915_58263364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05642782b383204f31e057488fcd68248cfd1867' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 3,
    'tygh:views/pages/components/parent_page_selector.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/pages/components/pages_link.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:common/calendar.tpl' => 3,
    'tygh:views/localizations/components/select.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/pages/components/pages_links_tree.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_665f07d5af0915_58263364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('information','name','description','edit_content_on_site','seo_meta_data','page_title','meta_description','meta_keywords','availability','usergroups','creation_date','use_avail_period','avail_from','avail_till','preview','clone_this_page','delete_this_page','pages'));
if ($_smarty_tpl->tpl_vars['page_data']->value['page_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['page_data']->value['page_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null) && (!fn_allowed_for("ULTIMATE") || $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('view_uri', fn_get_preview_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl->tpl_vars['page_data']->value,$_smarty_tpl->tpl_vars['auth']->value['user_id'],$_smarty_tpl->tpl_vars['default_language']->value));
}?>

<?php $_smarty_tpl->_assignInScope('allow_save', true);
if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['page_data']->value,"pages"));
}
$_smarty_tpl->_assignInScope('show_save_btn', $_smarty_tpl->tpl_vars['allow_save']->value ,false ,8);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="page_update_form" class="form-horizontal form-edit  <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" enctype="multipart/form-data">

<div id="update_page_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" class="cm-no-hide-input" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" class="cm-no-hide-input" id="page_id" name="page_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="page_data[page_type]" id="page_type" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" class="cm-no-hide-input" name="come_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['come_from']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="result_ids" value="update_page_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"/>

    <div id="content_basic">

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information"),'target'=>"#pages_information_setting"), 0, false);
?>
    <div id="pages_information_setting" class="in collapse">
    <fieldset>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/parent_page_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="control-group">
            <label for="elm_page_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input type="text" name="page_data[page]" id="elm_page_name" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['page'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['page_data']->value['parent_id'] != 0 && $_smarty_tpl->tpl_vars['page_data']->value['page_id'] != 0) {?>
            <?php $_smarty_tpl->_assignInScope('disable_company_picker', true);?>
        <?php }?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "none");?>
            <?php $_smarty_tpl->_assignInScope('js_action', "fn_change_vendor_for_page(elm);");?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"page_data[company_id]",'id'=>"elm_page_data_company_id",'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value,'selected'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id'],'js_action'=>$_smarty_tpl->tpl_vars['js_action']->value,'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_company_picker']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:detailed_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:detailed_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
        <div class="control-group">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:detailed_description_label"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:detailed_description_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:detailed_description_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <div class="controls">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:detailed_description_textarea"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:detailed_description_textarea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('is_block_manager_available', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (fn_allowed_for("MULTIVENDOR")));?>

                    <textarea id="elm_page_descr"
                        name="page_data[description]"
                        cols="55"
                        rows="8"
                        class="cm-wysiwyg input-large"
                        data-ca-is-block-manager-enabled="<?php echo htmlspecialchars((string) intval(fn_check_view_permissions("block_manager.block_selection","GET")), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-is-block-manager-available="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_block_manager_available']->value, ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:detailed_description_textarea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php if ($_smarty_tpl->tpl_vars['view_uri']->value) {?>
                    <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
ob_start();
if (fn_allowed_for("ULTIMATE")) {
echo "&switch_company_id=";
echo (string)$_smarty_tpl->tpl_vars['page_data']->value['company_id'];
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_prefixVariable1.$_prefixVariable2,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-default btn-live-edit cm-post",'but_target'=>"_blank"), 0, false);
?>
                <?php }?>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:detailed_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"page_data[status]",'id'=>"elm_page_status",'obj'=>$_smarty_tpl->tpl_vars['page_data']->value,'hidden'=>true), 0, false);
?>

    </fieldset>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo_meta_data"),'target'=>"#pages_seo_meta_data_setting"), 0, true);
?>
    <div id="pages_seo_meta_data_setting" class="in collapse">
        <fieldset>

            <div class="control-group">
                <label class="control-label" for="elm_page_title"><?php echo $_smarty_tpl->__("page_title");?>
:</label>
                <div class="controls">
                    <input type="text" name="page_data[page_title]" id="elm_page_title" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_page_meta_descr"><?php echo $_smarty_tpl->__("meta_description");?>
:</label>
                <div class="controls">
                    <textarea name="page_data[meta_description]" id="elm_page_meta_descr" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_page_meta_keywords"><?php echo $_smarty_tpl->__("meta_keywords");?>
:</label>
                <div class="controls">
                    <textarea name="page_data[meta_keywords]" id="elm_page_meta_keywords" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

        </fieldset>
    </div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#pages_availability_setting"), 0, true);
?>

  <div id="pages_availability_setting" class="in collapse">
      <fieldset>
          <div class="control-group">
              <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
              <div class="controls">
                  <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"ug_id",'name'=>"page_data[usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>$_smarty_tpl->tpl_vars['page_data']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0, false);
?>
              </div>
          </div>

          <div class="control-group">
              <label class="control-label" for="elm_page_date"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
              <div class="controls">
                  <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_page_date",'date_name'=>"page_data[timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['page_data']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, false);
?>
              </div>
          </div>

          <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_name'=>"page_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['page_data']->value['localization']), 0, false);
?>

          <div class="control-group">
              <label class="control-label" for="elm_page_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
              <div class="controls">
                  <input type="hidden" name="page_data[use_avail_period]" value="N">
                  <input type="checkbox" name="page_data[use_avail_period]" id="elm_page_use_avail_period" <?php if ($_smarty_tpl->tpl_vars['page_data']->value['use_avail_period'] == "Y") {?>checked="checked"<?php }?> value="Y" onclick="fn_activate_calendar(this);">
              </div>
          </div>

          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "calendar_disable", null, null);
if ($_smarty_tpl->tpl_vars['page_data']->value['use_avail_period'] != "Y") {?>disabled="disabled"<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <div class="control-group">
              <label class="control-label" for="elm_page_avail_from"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
              <div class="controls">
                  <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_page_avail_from",'date_name'=>"page_data[avail_from_timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['page_data']->value['avail_from_timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'calendar_disable')), 0, true);
?>
              </div>
          </div>

          <div class="control-group">
              <label class="control-label" for="elm_page_avail_till"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
              <div class="controls">
                  <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_page_avail_till",'date_name'=>"page_data[avail_till_timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['page_data']->value['avail_till_timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'calendar_disable')), 0, true);
?>
              </div>
          </div>
    </fieldset>
  </div>
        
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 language="javascript">
                function fn_activate_calendar(el)
                {
                    Tygh.$('#elm_page_avail_from').prop('disabled', !el.checked);
                    Tygh.$('#elm_page_avail_till').prop('disabled', !el.checked);
                }
            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        

    </div>

    <div id="content_addons">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['view_uri']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "preview", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("preview"),'href'=>$_smarty_tpl->tpl_vars['view_uri']->value), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['is_allow_update_pages']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_types']->value, '_p', false, '_k');
$_smarty_tpl->tpl_vars['_p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['_p']->value) {
$_smarty_tpl->tpl_vars['_p']->do_else = false;
?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['_p']->value['add_name']),'href'=>"pages.add?page_type=".((string)$_smarty_tpl->tpl_vars['_k']->value)."&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)), true);?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <li class="divider"></li>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'preview');?>

            <?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['is_allow_update_pages']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clone_this_page"),'href'=>"pages.clone?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value),'method'=>"POST"), true);?>
</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_allow_update_pages']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete_this_page"),'class'=>"cm-confirm",'href'=>"pages.delete?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value),'method'=>"POST"), true);?>
</li>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php if (!$_smarty_tpl->tpl_vars['show_save_btn']->value) {?>
        <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
        <?php $_smarty_tpl->_assignInScope('hide_second_button', true);?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[pages.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_target_form'=>"page_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!--update_page_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</form>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:update_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:update_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("pages");?>
</h6>
        <div class="nested-tree">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_all'=>false,'pages_tree'=>$_smarty_tpl->tpl_vars['pages_tree']->value), 0, false);
?>
        </div>
    </div>
<?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:update_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['page_data']->value['page'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['page_type_data']->value['new_name']),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left",'select_languages'=>(bool) $_smarty_tpl->tpl_vars['id']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
  <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var fn_change_vendor_for_page = function(elm){
      $.ceAjax('request', Tygh.current_url, {
        data: {
          page_data: {
            company_id: $('[name="page_data[company_id]"]').val()
          }
        },
        result_ids: 'parent_page_selector'
      });
    };
  <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
