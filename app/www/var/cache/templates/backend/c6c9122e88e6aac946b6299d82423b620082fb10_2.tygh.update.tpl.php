<?php
/* Smarty version 4.1.1, created on 2024-06-27 09:47:44
  from '/app/www/design/backend/templates/views/usergroups/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d0b10858343_73520086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c9122e88e6aac946b6299d82423b620082fb10' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:views/usergroups/components/get_privileges.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_667d0b10858343_73520086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','usergroup','type'));
if ($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="update_usergroups_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="usergroup_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("general"),'target'=>"#content_general_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, false);
?>
<div id="content_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse in collapse-visible">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="control-group">
        <label class="control-label cm-required" for="elm_usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("usergroup");?>
</label>
        <div class="controls">
            <input type="text" id="elm_usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[usergroup]" size="35" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_usergroup_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="hidden" name="usergroup_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['type'], ENT_QUOTES, 'UTF-8');?>
"/>
                <div class="controls-text">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_types']->value[$_smarty_tpl->tpl_vars['usergroup']->value['type']], ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php } else { ?>
                <select id="elm_usergroup_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[type]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroup_types']->value, 'type_name', false, 'type_code');
$_smarty_tpl->tpl_vars['type_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type_code']->value => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"usergroup_data[status]",'id'=>"usergroup_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['usergroup']->value,'hidden'=>true), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['show_privileges_tab']->value) {?>
    <hr/>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/get_privileges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grouped_privileges'=>$_smarty_tpl->tpl_vars['grouped_privileges']->value), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['navigation']->value['tabs']) === 0) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['navigation']) ? $_smarty_tpl->tpl_vars['navigation']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tabs'] = array();
$_smarty_tpl->_assignInScope('navigation', $_tmp_array);
}
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'navigation'=>$_smarty_tpl->tpl_vars['navigation']->value), 0, false);
?>

<div class="buttons-container">
<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[usergroups.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>

</form>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
