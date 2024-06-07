<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_data_premoderation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab1061da56_81593615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db84b187a4cda9dcbf69fdc8f89567bafa3d4dfe' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_data_premoderation.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6641ab1061da56_81593615 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.','sw.configure'));
$_smarty_tpl->_assignInScope('schema', fn_get_schema("setup_wizard","vendor_data_premoderation"));
$_smarty_tpl->_assignInScope('addon_settings', $_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']);?>

<?php if ($_smarty_tpl->tpl_vars['schema']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['schema']->value['header']));?>
</h2>
    </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['settings'], 'setting', false, 'setting_name');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting_name']->value => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
    <div id="container_sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group sw_size_2 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <label for="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label ">
            <?php echo $_smarty_tpl->__("sw.".((string)$_smarty_tpl->tpl_vars['setting_name']->value));?>
:
        </label>
        <div class="controls">
            <input type="hidden" name="vendor_data_premoderation[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>($_smarty_tpl->tpl_vars['addon_settings']->value[$_smarty_tpl->tpl_vars['setting_name']->value] === $_smarty_tpl->tpl_vars['setting']->value['value']),'input_name'=>"vendor_data_premoderation[".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'input_value'=>$_smarty_tpl->tpl_vars['setting']->value['value'],'input_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'input_class'=>"cm-submit",'input_attrs'=>array('data-ca-target-id'=>'setup_wizard_vendors_form',"data-ca-dispatch"=>"dispatch[setup_wizard.change_vendor_data_premoderation]")), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['setting']->value['configure'] && $_smarty_tpl->tpl_vars['addon_settings']->value[$_smarty_tpl->tpl_vars['setting_name']->value] === $_smarty_tpl->tpl_vars['setting']->value['value']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->tpl_vars['setting']->value['configure']['href'],'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"shift-left"), 0, true);
?>
            <?php }?>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
