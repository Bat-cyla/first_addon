<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_panel_configurator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab105dcd31_24415462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85cfbd415744c2057023252e78806cdaf7235444' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_panel_configurator.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6641ab105dcd31_24415462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('sw.easy_admin_panel_for_vendors','sw.product_tabs_and_properties','sw.configure','sw.branding_and_colors','sw.configure'));
if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
    </div>
<?php }?>

<div id="container_sw_easy_admin_panel_for_vendors" class="control-group sw_size_2">
    <label for="sw_vendor_panel_configurator_state" class="control-label ">
        <?php echo $_smarty_tpl->__("sw.easy_admin_panel_for_vendors");?>
:
    </label>
    <div class="controls">
        <input type="hidden" name="addon_name[]" value="vendor_panel_configurator" />
        <input type="hidden" name="vendor_panel_configurator_state" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>($_smarty_tpl->tpl_vars['addons']->value['vendor_panel_configurator']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")),'input_name'=>"vendor_panel_configurator_state",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"sw_vendor_panel_configurator_state",'input_class'=>"cm-submit",'input_attrs'=>array("data-ca-dispatch"=>"dispatch[setup_wizard.update_addon_status]")), 0, false);
?>
    </div>
</div>

<?php if (($_smarty_tpl->tpl_vars['addons']->value['vendor_panel_configurator']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
    <div id="container_sw_vendor_panel_product_properties" class="control-group sw_size_2">
        <label class="control-label"><?php echo $_smarty_tpl->__("sw.product_tabs_and_properties");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"addons.update?addon=vendor_panel_configurator&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, false);
?>
        </div>
    </div>

    <div id="container_sw_vendor_panel_branding" class="control-group sw_size_2">
        <label class="control-label"><?php echo $_smarty_tpl->__("sw.branding_and_colors");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"addons.update?addon=vendor_panel_configurator&selected_sub_section=vendor_panel_configurator_vendor_panel_style&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, true);
?>
        </div>
    </div>
<?php }
}
}
