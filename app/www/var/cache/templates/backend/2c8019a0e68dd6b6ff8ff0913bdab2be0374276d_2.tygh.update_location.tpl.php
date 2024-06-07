<?php
/* Smarty version 4.1.1, created on 2024-05-13 12:05:02
  from '/app/www/design/backend/templates/views/block_manager/update_location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641d7be7df6b4_46847349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8019a0e68dd6b6ff8ff0913bdab2be0374276d' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/update_location.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6641d7be7df6b4_46847349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','dispatch','custom','name','page_title','copy_to_other_locations','ttc_page_title','meta_description','copy_to_other_locations','meta_keywords','copy_to_other_locations','head_custom_html','copy_to_other_locations','tt_views_block_manager_update_location_head_custom_html','default','tt_views_block_manager_update_location_default','position'));
if (!$_smarty_tpl->tpl_vars['location']->value['location_id']) {?>
    <?php $_smarty_tpl->_assignInScope('html_id', "0");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('html_id', $_smarty_tpl->tpl_vars['location']->value['location_id']);
}?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class=" form-horizontal" name="location_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_update_form">
<div id="location_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="location_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="location" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="location_data[location_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="location_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
                <li id="location_object_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type']);?>
</a></li>
            <?php }?>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_location_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_location_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:update_location_general"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:update_location_general"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label for="location_dispatch_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("dispatch");?>
: </label>
                    <div class="controls"><select id="location_dispatch_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_select" name="location_data[dispatch]" class="cm-select-with-input-key cm-reload-form">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dispatch_descriptions']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value['dispatch'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php $_smarty_tpl->_assignInScope('selected', 1);
}?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php if ($_smarty_tpl->tpl_vars['location']->value['dispatch'] == $_smarty_tpl->tpl_vars['k']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('not_custom_dispatch', "1");?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <option value="" <?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
                        </select>
                        <input id="location_dispatch_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text<?php if ($_smarty_tpl->tpl_vars['not_custom_dispatch']->value) {?> input-text-disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['not_custom_dispatch']->value) {?>disabled<?php }?> name="location_data[dispatch]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" type="text"></div>
                </div>
                <div class="control-group">
                    <label for="location_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
: </label>
                    <div class="controls">
                        <input id="location_name" type="text" name="location_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_title" class="control-label"><?php echo $_smarty_tpl->__("page_title");?>
: </label>
                    <div class="controls">
                        <input id="location_title" type="text" name="location_data[title]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>
                            <div>
                                <label class="checkbox inline"><input type="checkbox" name="location_data[copy_translated][]" value="title" /><?php echo $_smarty_tpl->__("copy_to_other_locations");?>
</label>
                            </div>
                        <?php }?>
                        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_page_title");?>
</p>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_meta_descr" class="control-label"><?php echo $_smarty_tpl->__("meta_description");?>
: </label>
                    <div class="controls">
                        <textarea id="location_meta_descr" name="location_data[meta_description]" class="span9" cols="55" rows="4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>
                        <label class="checkbox inline"><input type="checkbox" name="location_data[copy_translated][]" value="meta_description" /><?php echo $_smarty_tpl->__("copy_to_other_locations");?>
</label>
                        <?php }?>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_meta_key" class="control-label"><?php echo $_smarty_tpl->__("meta_keywords");?>
 </label>
                    <div class="controls">
                        <textarea id="location_meta_key" name="location_data[meta_keywords]" class="span9" cols="55" rows="4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>
                        <label class="checkbox inline"><input type="checkbox" name="location_data[copy_translated][]" value="meta_keywords" /><?php echo $_smarty_tpl->__("copy_to_other_locations");?>
</label>
                        <?php }?>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_custom_html" class="control-label"><?php echo $_smarty_tpl->__("head_custom_html");?>
</label>
                    <div class="controls">
                        <textarea id="location_custom_html" name="location_data[custom_html]" class="span9" cols="55" rows="4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['custom_html'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>
                            <label class="checkbox inline"><input type="checkbox" name="location_data[copy][]" value="custom_html" /><?php echo $_smarty_tpl->__("copy_to_other_locations");?>
</label>
                        <?php }?>
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_block_manager_update_location_head_custom_html");?>
</p>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_is_default" class="control-label"><?php echo $_smarty_tpl->__("default");?>
 </label>
                    <div class="controls">
                        <input type="hidden" name="location_data[is_default]" value="N">
                        <input type="checkbox" name="location_data[is_default]" value="Y" id="location_is_default" <?php if ($_smarty_tpl->tpl_vars['location']->value['is_default']) {?>checked="checked" disabled="disabled"<?php }?>>
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_block_manager_update_location_default");?>
</p>
                    </div>
                </div>

                <div class="control-group">
                    <label for="location_position" class="control-label"><?php echo $_smarty_tpl->__("position");?>
: </label>
                    <div class="controls">
                        <input id="location_position" type="text" name="location_data[position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['position'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:update_location_general"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
            <div id="content_location_object_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker'],'data_id'=>"location_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_object_ids",'input_name'=>"location_data[object_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['location']->value['object_ids'],'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params'],'start_pos'=>$_smarty_tpl->tpl_vars['start_position']->value),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>
<!--location_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php if (!$_smarty_tpl->tpl_vars['location']->value['is_default'] && $_smarty_tpl->tpl_vars['location']->value['location_id'] > 0) {?>
        <div class="botton-picker-remove pull-left">
            <a class="cm-confirm cm-post btn cm-tooltip" href="<?php echo htmlspecialchars((string) fn_url("block_manager.delete_location?location_id=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])), ENT_QUOTES, 'UTF-8');?>
" title="Remove current location">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

            </a>
        </div>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['html_id']->value), 0, false);
?>
</div>
</form>
<?php }
}
