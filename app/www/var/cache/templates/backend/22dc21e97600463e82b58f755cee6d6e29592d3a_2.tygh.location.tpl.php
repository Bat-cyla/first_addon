<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab10601a78_98455874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22dc21e97600463e82b58f755cee6d6e29592d3a' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/location.tpl',
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
function content_6641ab10601a78_98455874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('sw.enable_vendor_location_using_google_map','sw.configure'));
if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
    </div>
<?php }?>

<div class="control-group">
    <label for="sw_vendor_location_state" class="control-label "><?php echo $_smarty_tpl->__("sw.enable_vendor_location_using_google_map");?>
:</label>

    <div class="controls">
        <input type="hidden" name="addon_name[]" value="vendor_locations" />
        <input type="hidden" name="vendor_locations_state" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")),'input_name'=>"vendor_locations_state",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"sw_vendor_location_state",'input_class'=>"cm-submit",'input_attrs'=>array("data-ca-dispatch"=>"dispatch[setup_wizard.update_addon_status]")), 0, false);
?>
        <?php if (($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"addons.update&addon=vendor_locations&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"shift-left"), 0, false);
?>
        <?php }?>
    </div>
</div>
<?php }
}
