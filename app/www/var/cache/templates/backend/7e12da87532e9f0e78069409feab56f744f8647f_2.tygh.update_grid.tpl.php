<?php
/* Smarty version 4.1.1, created on 2024-05-13 12:01:19
  from '/app/www/design/backend/templates/views/block_manager/update_grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641d6df721026_94830096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e12da87532e9f0e78069409feab56f744f8647f' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/update_grid.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6641d6df721026_94830096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','width','block_manager.description_available_values_for_grid_select','content_alignment','full_width','left','right','wrapper','none','offset','block_manager.description_available_values_for_grid_select','user_class','block_manager.availability.show_on','block_manager.availability.'));
if ($_smarty_tpl->tpl_vars['grid']->value['grid_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['grid']->value['grid_id']);?>
    <?php $_smarty_tpl->_assignInScope('elm_id', $_smarty_tpl->tpl_vars['id']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);?>
    <?php $_smarty_tpl->_assignInScope('elm_id', uniqid());
}?>

<div id="grid_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit " name="grid_update_form">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="grid_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<input type="hidden" name="container_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_params']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="parent_id" value="<?php echo htmlspecialchars((string) (($tmp = (($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['parent_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['parent_id'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("width");?>
</label>
        <div class="controls">
            <select id="elm_grid_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="width" data-ca-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$__section_width_0_loop = (is_array(@$_loop=(($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['max_width'] ?? null)===null||$tmp==='' ? 24 ?? null : $tmp)) ? count($_loop) : max(0, (int) $_loop));
$__section_width_0_start = (int)@(($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['min_width'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)-(($tmp = 1 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp) < 0 ? max(0, (int)@(($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['min_width'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)-(($tmp = 1 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp) + $__section_width_0_loop) : min((int)@(($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['min_width'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)-(($tmp = 1 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), $__section_width_0_loop);
$__section_width_0_total = min(($__section_width_0_loop - $__section_width_0_start), $__section_width_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_width'] = new Smarty_Variable(array());
if ($__section_width_0_total !== 0) {
for ($__section_width_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_width']->value['index'] = $__section_width_0_start; $__section_width_0_iteration <= $__section_width_0_total; $__section_width_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_width']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_section_width']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_width']->value['index'] : null)+1);?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['index']->value == $_smarty_tpl->tpl_vars['grid']->value['width']) {?>selected="selected"<?php }?>
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
}
?>
            </select>
            <div>
                <span class="muted"><?php echo $_smarty_tpl->__("block_manager.description_available_values_for_grid_select");?>
</span>
            </div>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_content_align_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("content_alignment");?>
</label>
        <div class="controls">
        <select id="elm_grid_content_align_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="content_align">
            <option value="<?php echo htmlspecialchars((string) constant("\Tygh\BlockManager\Grid::ALIGN_FULL_WIDTH"), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] == constant("\Tygh\BlockManager\Grid::ALIGN_FULL_WIDTH")) {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("full_width");?>
</option>
            <option value="<?php echo htmlspecialchars((string) constant("\Tygh\BlockManager\Grid::ALIGN_LEFT"), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] == constant("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("left");?>
</option>
            <option value="<?php echo htmlspecialchars((string) constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT"), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] == constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("right");?>
</option>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("wrapper");?>
</label>
        <div class="controls">
            <select id="elm_grid_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="wrapper">
                <option value=""><?php echo $_smarty_tpl->__("none");?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grids_schema']->value['wrappers'], 'wrapper_template', false, 'wrapper_name');
$_smarty_tpl->tpl_vars['wrapper_template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wrapper_name']->value => $_smarty_tpl->tpl_vars['wrapper_template']->value) {
$_smarty_tpl->tpl_vars['wrapper_template']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_template']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['wrapper_template']->value == $_smarty_tpl->tpl_vars['grid']->value['wrapper']) {?>selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_offset_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("offset");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_assignInScope('maxOffset', (($tmp = $_smarty_tpl->tpl_vars['grid_params']->value['max_offset'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid_params']->value['max_width'] ?? null : $tmp));?>
            <select id="elm_grid_offset_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="offset" data-ca-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$__section_offset_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['maxOffset']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_offset_1_start = min(0, $__section_offset_1_loop);
$__section_offset_1_total = min(($__section_offset_1_loop - $__section_offset_1_start), $__section_offset_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_offset'] = new Smarty_Variable(array());
if ($__section_offset_1_total !== 0) {
for ($__section_offset_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_offset']->value['index'] = $__section_offset_1_start; $__section_offset_1_iteration <= $__section_offset_1_total; $__section_offset_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_offset']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_section_offset']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_offset']->value['index'] : null));?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value == $_smarty_tpl->tpl_vars['grid']->value['offset']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
}
?>
            </select>
            <div>
                <span class="muted"><?php echo $_smarty_tpl->__("block_manager.description_available_values_for_grid_select");?>
</span>
            </div>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input id="elm_grid_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_class" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" type="text" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required cm-multiple-checkboxes"
               for="grid_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_availability"
        ><?php echo $_smarty_tpl->__("block_manager.availability.show_on");?>
</label>
        <div class="controls" id="grid_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_availability">
            <div class="btn-group btn-group-checkbox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value['availability'], 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>

                    <?php if ($_smarty_tpl->tpl_vars['device']->value == "phone") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-mobile-phone");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "tablet") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-tablet");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "desktop") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-desktop");?>
                    <?php }?>

                    <input type="checkbox"
                        id="elm_grid_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-text-toggle btn-group-checkbox__checkbox"
                        <?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>checked="checked"<?php }?>
                        data-ca-toggle-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_availability_instance']->value->getHiddenClass($_smarty_tpl->tpl_vars['device']->value), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-toggle-text-mode="onDisable"
                        data-ca-toggle-text-target-elem-id="elm_grid_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <label class="btn btn-group-checkbox__label" for="elm_grid_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['devices_icon']->value),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->__("block_manager.availability.".((string)$_smarty_tpl->tpl_vars['device']->value));?>

                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager_update_grid:settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager_update_grid:settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager_update_grid:settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.grid.update]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>
</form>
<!--grid_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
