<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:11:15
  from '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f046326bef1_46983495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9bf53536a4b9ea11b2a5838e4782e4bcf211925' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 3,
  ),
),false)) {
function content_665f046326bef1_46983495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.current_plan','vendor_plans.not_available','vendor_plans.','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.vendor_store','vendor_plans.transaction_fee_value','vendor_plans.plan_will_be_change_text'));
?>
<ul class="vendor-plans inline cm-vendor-plans-selector">
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-vendor-plans-selector-value" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_plan_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-default-plan="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_plan_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('current', $_smarty_tpl->tpl_vars['plan']->value['plan_id'] == $_smarty_tpl->tpl_vars['current_plan_id']->value);?>
        <li class="vendor-plans-item <?php if ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['current']->value) {?>active <?php }?>" data-ca-plan-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['current']->value) {?>
                <div class="vendor-plans-status">
                   <?php echo $_smarty_tpl->__("vendor_plans.current_plan");?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>
                <p class="vendor-plans-status not-available"><?php echo $_smarty_tpl->__("vendor_plans.not_available");?>
</p>
            <?php }?>
            <div class="vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['current']->value) {?> vendor-plan-current<?php }?>">
                <h3 class="vendor-plan-header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>
                    <ul class="unstyled">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plan']->value['avail_errors'], 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                            <li>
                                <span class="text-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>

                <span class="vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0, true);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity'] != 'onetime') {?><span class="vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>

                <div class="vendor-plan-params">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:vendor_plans_params"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plans_params"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array($_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "revenue", null, null);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0, true);
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'revenue')));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                    <p>

                        <?php $_smarty_tpl->_assignInScope('commissionRound', $_smarty_tpl->tpl_vars['plan']->value->commissionRound());?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "fee_value", null, null);?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?> + <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0, true);
?>
                            <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) || ($_smarty_tpl->tpl_vars['commissionRound']->value > 0)) {?>
                            <?php ob_start();
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fee_value');
$_prefixVariable9=ob_get_clean();
echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_prefixVariable9));?>

                        <?php }?>
                    </p>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plans_params"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['plan']->value['avail_errors'] && $_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <div class="vendor-plan-descr"><?php echo $_smarty_tpl->tpl_vars['plan']->value['description'];?>
</div>
                <?php }?>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $){
    $(document).ready(function(){
        $(document).on('click', '.cm-vendor-plans-selector > li[data-ca-plan-id]:not(.disabled)', function(){
            var container = $('.cm-vendor-plans-selector');
            container.find('li').removeClass('active');
            var plan_id = $(this).addClass('active').data('caPlanId');
            var input = container.find('input.cm-vendor-plans-selector-value');
            input.val(plan_id);

            // Submit buttons
            var buttons = $('.cm-submit[data-ca-target-form="company_update_form"]');
            if (plan_id != input.data('caDefaultPlan')) {
                buttons.addClass('cm-confirm');
                buttons.data('ca-confirm-text', "<?php echo strtr((string)$_smarty_tpl->__("vendor_plans.plan_will_be_change_text"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
");
            } else {
                buttons.removeClass('cm-confirm');
            }
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
