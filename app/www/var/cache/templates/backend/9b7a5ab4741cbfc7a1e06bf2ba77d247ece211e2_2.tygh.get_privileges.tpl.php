<?php
/* Smarty version 4.1.1, created on 2024-06-27 09:47:44
  from '/app/www/design/backend/templates/views/usergroups/components/get_privileges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d0b108cc555_27356317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7a5ab4741cbfc7a1e06bf2ba77d247ece211e2' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/components/get_privileges.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/usergroups/components/privileges_access_level_controls.tpl' => 1,
    'tygh:views/usergroups/components/privileges_section.tpl' => 1,
  ),
),false)) {
function content_667d0b108cc555_27356317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('privilege.apply_to_all'));
echo smarty_function_script(array('src'=>"js/tygh/usergroup_privileges.js"),$_smarty_tpl);?>

<div class="usergroup-privileges-list" id="content_privileges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_privileges_tab']->value) {?>
        <div class="control-group">
            <div class="control-label"><?php echo $_smarty_tpl->__("privilege.apply_to_all");?>
:</div>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_id'=>'usergroup','group_id'=>'global','usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'show_custom_access_level_control'=>false), 0, false);
?>
            </div>
        </div>
        <hr/>
        <input type="hidden" name="usergroup_data[privileges]" value="" />
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_privileges']->value, 'section', false, 'section_id');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_id']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/privileges_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
<!--content_privileges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
