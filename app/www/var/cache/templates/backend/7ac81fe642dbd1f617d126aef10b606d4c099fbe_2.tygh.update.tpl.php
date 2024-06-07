<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:46:08
  from '/app/www/design/backend/templates/views/static_data/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c6903b18e8_06174152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac81fe642dbd1f617d126aef10b606d4c099fbe' => 
    array (
      0 => '/app/www/design/backend/templates/views/static_data/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/attach_images.tpl' => 1,
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:pickers/pages/picker.tpl' => 1,
    'tygh:views/localizations/components/select.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6659c6903b18e8_06174152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','parent_item','root_level','position_short','none','category','all_categories','page','all_pages','static_data_use_item'));
if ($_smarty_tpl->tpl_vars['static_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['static_data']->value['param_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "0");
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"static_data_update:form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"static_data_update:form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="static_data_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class=" form-horizontal">
<input name="section" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input name="param_id" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"static_data:tabs_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"static_data:tabs_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"static_data:tabs_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
</div>

<div class="cm-tabs-content" id="tabs_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div id="content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<fieldset>

    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['owner_object']) {?>
        <?php $_smarty_tpl->_assignInScope('param_name', $_smarty_tpl->tpl_vars['section_data']->value['owner_object']['param']);?>
        <?php $_smarty_tpl->_assignInScope('request_key', $_smarty_tpl->tpl_vars['section_data']->value['owner_object']['key']);?>    
        <?php $_smarty_tpl->_assignInScope('value', $_REQUEST[$_smarty_tpl->tpl_vars['request_key']->value]);?>

                
        <input type="hidden" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['param_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request_key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level']) {?>
    <div class="control-group">
        <label for="parent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("parent_item");?>
:</label>
            <div class="controls">
                <select id="parent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[parent_id]">
                    <option value="0">- <?php echo $_smarty_tpl->__("root_level");?>
 -</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent_items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                        <?php if ((strpos($_smarty_tpl->tpl_vars['i']->value['id_path'],((string)$_smarty_tpl->tpl_vars['static_data']->value['id_path'])."/") === false || $_smarty_tpl->tpl_vars['static_data']->value['id_path'] == '') && $_smarty_tpl->tpl_vars['i']->value['param_id'] != $_smarty_tpl->tpl_vars['static_data']->value['param_id'] || !$_smarty_tpl->tpl_vars['id']->value) {?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['i']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['static_data']->value['parent_id'] == $_smarty_tpl->tpl_vars['i']->value['param_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['i']->value['level']),htmlspecialchars((string)$_smarty_tpl->tpl_vars['i']->value['descr'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
    </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"static_data_update:settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"static_data_update:settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="control-group">
        <label for="descr_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['descr']);?>
:</label>
        <div class="controls">
            <input type="text" size="40" id="descr_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[descr]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_data']->value['descr'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input">
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level']) {?>
    <div class="control-group">
        <label for="position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("position_short");?>
:</label>
        <div class="controls">
            <input type="text" size="2" id="position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_data']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short">
        </div>
    </div>
    <?php }?>
    <div class="control-group">
        <label for="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['param']);?>
:</label>
        <div class="controls">
            <input type="text" size="40" id="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[param]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_data']->value['param'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large">
            <?php if ($_smarty_tpl->tpl_vars['section_data']->value['tooltip']) {?>
                <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['tooltip']);?>
</p>
            <?php }?>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['icon']) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['icon']['title']);?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"static_data_icon",'image_object_type'=>"static_data_".((string)$_smarty_tpl->tpl_vars['section']->value),'image_pair'=>$_smarty_tpl->tpl_vars['static_data']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
        </div>
    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['additional_params']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section_data']->value['additional_params'], 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['p']->value['type'] == "hidden") {?>    
            <input type="hidden" id="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_data']->value[$_smarty_tpl->tpl_vars['p']->value['name']], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        <?php } else { ?>
            <div class="control-group">
                <label for="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p']->value['title']);?>
:</label>
                <div class="controls mixed-controls cm-bs-group">
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['type'] == "checkbox") {?>
                        <input type="hidden" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                        <input type="checkbox" id="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['static_data']->value[$_smarty_tpl->tpl_vars['p']->value['name']] == "Y") {?>checked="checked"<?php }?> />
                    <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['type'] == "megabox") {?>
                        <?php $_smarty_tpl->_assignInScope('_megabox_values', fn_static_data_megabox($_smarty_tpl->tpl_vars['static_data']->value[$_smarty_tpl->tpl_vars['p']->value['name']]));?>
                        <div class="cm-bs-container form-inline clearfix">
                            <label class="radio pull-left">
                                <input type="radio" class="cm-bs-trigger" name="static_data[megabox][type][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['_megabox_values']->value) {?>checked="checked"<?php }?> value="" onclick="Tygh.$('#un_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').prop('disabled', true);">
                                <?php echo $_smarty_tpl->__("none");?>

                            </label>
                        </div>
                        
                        <div class="cm-bs-container form-inline clearfix">
                            <label class="radio pull-left">
                                <input type="radio" class="cm-bs-trigger" name="static_data[megabox][type][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['_megabox_values']->value['types']['C']) {?>checked="checked"<?php }?> value="C" onclick="Tygh.$('#un_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').prop('disabled', false);">
                                <?php echo $_smarty_tpl->__("category");?>
:
                            </label>
                            <div class="cm-bs-block pull-left disable-overlay-wrap">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"megabox_category_".((string)$_smarty_tpl->tpl_vars['id']->value),'input_name'=>"static_data[".((string)$_smarty_tpl->tpl_vars['p']->value['name'])."][C]",'item_ids'=>$_smarty_tpl->tpl_vars['_megabox_values']->value['types']['C']['value'],'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0, true);
?>
                                <div class="disable-overlay cm-bs-off"></div>
                            </div>
                        </div>
                
                        <div class="cm-bs-container form-inline clearfix">
                            <label class="radio pull-left">
                                <input type="radio" class="cm-bs-trigger" name="static_data[megabox][type][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['_megabox_values']->value['types']['A']) {?>checked="checked"<?php }?> value="A" onclick="Tygh.$('#un_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').prop('disabled', false);">
                                <?php echo $_smarty_tpl->__("page");?>
:
                            </label>
                            <div class="cm-bs-block pull-left disable-overlay-wrap">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"megabox_page_".((string)$_smarty_tpl->tpl_vars['id']->value),'input_name'=>"static_data[".((string)$_smarty_tpl->tpl_vars['p']->value['name'])."][A]",'item_ids'=>$_smarty_tpl->tpl_vars['_megabox_values']->value['types']['A']['value'],'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_pages"),'extra'=>'','no_container'=>true,'prepend'=>true), 0, true);
?>
                                <div class="disable-overlay cm-bs-off"></div>
                            </div>
                        </div>
                        <br />
                        <label for="un_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox clearfix">
                            <input type="hidden" name="static_data[megabox][use_item][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                            <input type="checkbox" name="static_data[megabox][use_item][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" id="un_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_megabox_values']->value['use_item'] == "Y") {?>checked="checked"<?php }?> value="Y" <?php if (!$_smarty_tpl->tpl_vars['_megabox_values']->value) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->__("static_data_use_item");?>

                        </label>

                    <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['type'] == "select") {?>
                        <select id="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['values'], 'vv', false, 'vk');
$_smarty_tpl->tpl_vars['vv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->do_else = false;
?>
                        <option    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['static_data']->value[$_smarty_tpl->tpl_vars['p']->value['name']] == $_smarty_tpl->tpl_vars['vk']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vv']->value);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['type'] == "input") {?>
                        <input type="text" id="param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_data']->value[$_smarty_tpl->tpl_vars['p']->value['name']], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['p']->value['tooltip']) {?>
                        <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p']->value['tooltip']);?>
</p>
                    <?php }?>
                </div>
            </div>        
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"static_data_update:settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if ($_smarty_tpl->tpl_vars['section_data']->value['has_localization']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_name'=>"static_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['static_data']->value['localization']), 0, false);
?>
    <?php }?>
</fieldset>
<!--content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"static_data:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"static_data:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"static_data:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php if (fn_allow_save_object('',"static_data",$_smarty_tpl->tpl_vars['section_data']->value['skip_edition_checking'])) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[static_data.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
    </div>
<?php }?>

</form>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"static_data_update:form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
