<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/business_model.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab10504616_50519999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d3c74c15553c2a4dd38933c53a81fb3986f003f' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/business_model.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6641ab10504616_50519999 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.configure','sw.select_money_transfer_methods'));
$_smarty_tpl->_assignInScope('available_business_models', fn_setup_wizard_get_available_business_models());
$_smarty_tpl->_assignInScope('current_business_model', fn_setup_wizard_get_current_business_model());?>

<div class="sw-right-block">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"payments.manage",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, false);
?>
</div>
<div class="sw-columns-block">
    <div id="sw_money_transfer_from">
        <form name="sw_money_transfer_from" class="form-horizontal cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="setup_wizard.change_money_transfer" />
            <input type="hidden" name="result_ids" value="sw_money_transfer_from" />

            <div class="control-group">
                <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.select_money_transfer_methods");?>
</h2>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_business_models']->value, 'business_model_data', false, 'business_model_id');
$_smarty_tpl->tpl_vars['business_model_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['business_model_id']->value => $_smarty_tpl->tpl_vars['business_model_data']->value) {
$_smarty_tpl->tpl_vars['business_model_data']->do_else = false;
?>
                <div class="sw-columns-block-line">
                    <div class="control-group">
                        <label class="control-label control-label-radio">
                            <input type="radio"
                                   name="money_transfer_type"
                                   id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['business_model_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   class="cm-submit ladda-button"
                                   data-ca-target-form="sw_money_transfer_from"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['business_model_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['current_business_model']->value === $_smarty_tpl->tpl_vars['business_model_id']->value) {?>checked<?php }?>
                            />
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['business_model_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            <p>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['business_model_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                            </p>
                        </label>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    <!--sw_money_transfer_from--></div>
</div>
<?php }
}
