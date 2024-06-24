<?php
/* Smarty version 4.1.1, created on 2024-06-04 14:13:38
  from '/app/www/design/backend/templates/views/usergroups/components/privileges_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665ef6e21b9b23_98177321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d8c64a2e5c4d41d04480d2469fc85758e9c55eb' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/components/privileges_section.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:views/usergroups/components/privileges_access_level_controls.tpl' => 1,
    'tygh:views/usergroups/components/privileges_group.tpl' => 1,
  ),
),false)) {
function content_665ef6e21b9b23_98177321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('privilege_sections.'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("privilege_sections.".((string)$_smarty_tpl->tpl_vars['section_id']->value)),'target'=>"#".((string)$_smarty_tpl->tpl_vars['section_id']->value)."_contents"), 0, false);
?>
<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
_contents" class="collapse in collapse-visible">
    <?php $_smarty_tpl->_assignInScope('named_groups_exists', smarty_modifier_count($_smarty_tpl->tpl_vars['section']->value) && key($_smarty_tpl->tpl_vars['section']->value) !== '');?>
    <?php if ($_smarty_tpl->tpl_vars['named_groups_exists']->value) {?>
        <div class="control-group">
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>'section_global','usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'disable_custom_access_level_control'=>true,'hide_controls'=>true), 0, false);
?>
            </div>
        </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'group', false, 'group_id');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/privileges_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'group'=>$_smarty_tpl->tpl_vars['group']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
