<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_registration_flow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab105976d3_06542292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa14d30d4b1c636916c4675df5040bd0da5ee909' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_registration_flow.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6641ab105976d3_06542292 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.vendor_registration_flow','sw.set_up_vendor_profile_fields','sw.configure'));
$_smarty_tpl->_assignInScope('available_registration_flow_types', fn_get_schema("setup_wizard","registration_flow"));
$_smarty_tpl->_assignInScope('current_registration_flow_type', fn_setup_wizard_get_current_registration_flow_type());?>

<div id="sw_registration_flow" class="business_model">
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.vendor_registration_flow");?>
</h2>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_registration_flow_types']->value, 'registration_flow_data', false, 'registration_flow_type');
$_smarty_tpl->tpl_vars['registration_flow_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['registration_flow_type']->value => $_smarty_tpl->tpl_vars['registration_flow_data']->value) {
$_smarty_tpl->tpl_vars['registration_flow_data']->do_else = false;
?>
        <div class="sw-columns-block-line">
            <div class="control-group">
                <label class="control-label control-label-radio" for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="radio"
                           name="registration_flow_type"
                           id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                           class="cm-submit ladda-button"
                           data-ca-target-form="setup_wizard_vendors_form_elm"
                           data-ca-dispatch="dispatch[setup_wizard.change_registration_flow]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['current_registration_flow_type']->value === $_smarty_tpl->tpl_vars['registration_flow_type']->value) {?>checked<?php }?>
                    />
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['registration_flow_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <p>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['registration_flow_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </p>
                </label>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div id="container_sw_vendor_profile_fields" class="control-group sw_size_2 vendor_profile_fields">
    <label class="control-label"><?php echo $_smarty_tpl->__("sw.set_up_vendor_profile_fields");?>
</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"profile_fields.manage?profile_type=S",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, false);
?>
    </div>
</div>
<?php }
}
