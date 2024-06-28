<?php
/* Smarty version 4.1.1, created on 2024-06-27 14:47:02
  from '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/list_pickup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d5136ac5e05_76168278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829abf9d5e5cf59430517d638ea74a510a7b6c7d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/list_pickup.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl' => 4,
  ),
),false)) {
function content_667d5136ac5e05_76168278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_label','pickup_point_not_selected','storefront_search_label','pickup_point_not_selected'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('_max_desktop_items', (($tmp = $_smarty_tpl->tpl_vars['max_desktop_items']->value ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--list">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) {?>
        <div class="ty-checkout-select-store pickup__offices-wrapper visible-phone pickup__offices-wrapper--near-map">
                        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list pickup__offices--list-no-height">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0, true);
?>
            </div>
                    </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
        <button class="ty-btn ty-btn__secondary cm-open-pickups pickup__open-pickupups-btn visible-phone"
        data-ca-title="<?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
"
        data-ca-target=".pickup__offices-wrapper-open"
        type="button"
    ><?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
</button>
    <span class="visible-phone cm-open-pickups-msg"></span>
    
        <div class="ty-checkout-select-store pickup__offices-wrapper pickup__offices-wrapper-open hidden-phone">

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']) >= $_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
        <div class="pickup__search">
            <div class="pickup__search-field litecheckout__field">
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input"
                       data-ca-pickup-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" " value />
                <label class="litecheckout__label" for="pickup-search"><?php echo $_smarty_tpl->__("storefront_search_label");?>
</label>
            </div>
        </div>
        <?php }?>
        
                <label for="pickup_office_list"
               class="cm-required cm-multiple-radios hidden"
               data-ca-validator-error-message="<?php echo $_smarty_tpl->__("pickup_point_not_selected");?>
"></label>
        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list
             <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']) < $_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
                pickup__offices--list--no-sorting
             <?php }?>"
             id="pickup_office_list"
             data-ca-error-message-target-node-change-on-screen="xs,xs-large,sm"
             data-ca-error-message-target-node-after-mode="true"
             data-ca-error-message-target-node-on-screen=".cm-open-pickups-msg"
             data-ca-error-message-target-node=".pickup__offices--list"
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        
    </div>
    
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/list_pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/list_pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('_max_desktop_items', (($tmp = $_smarty_tpl->tpl_vars['max_desktop_items']->value ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--list">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) {?>
        <div class="ty-checkout-select-store pickup__offices-wrapper visible-phone pickup__offices-wrapper--near-map">
                        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list pickup__offices--list-no-height">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0, true);
?>
            </div>
                    </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
        <button class="ty-btn ty-btn__secondary cm-open-pickups pickup__open-pickupups-btn visible-phone"
        data-ca-title="<?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
"
        data-ca-target=".pickup__offices-wrapper-open"
        type="button"
    ><?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
</button>
    <span class="visible-phone cm-open-pickups-msg"></span>
    
        <div class="ty-checkout-select-store pickup__offices-wrapper pickup__offices-wrapper-open hidden-phone">

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']) >= $_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
        <div class="pickup__search">
            <div class="pickup__search-field litecheckout__field">
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input"
                       data-ca-pickup-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" " value />
                <label class="litecheckout__label" for="pickup-search"><?php echo $_smarty_tpl->__("storefront_search_label");?>
</label>
            </div>
        </div>
        <?php }?>
        
                <label for="pickup_office_list"
               class="cm-required cm-multiple-radios hidden"
               data-ca-validator-error-message="<?php echo $_smarty_tpl->__("pickup_point_not_selected");?>
"></label>
        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list
             <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']) < $_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
                pickup__offices--list--no-sorting
             <?php }?>"
             id="pickup_office_list"
             data-ca-error-message-target-node-change-on-screen="xs,xs-large,sm"
             data-ca-error-message-target-node-after-mode="true"
             data-ca-error-message-target-node-on-screen=".cm-open-pickups-msg"
             data-ca-error-message-target-node=".pickup__offices--list"
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        
    </div>
    
</div>
<?php }
}
}
