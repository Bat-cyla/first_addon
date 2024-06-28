<?php
/* Smarty version 4.1.1, created on 2024-06-27 14:47:02
  from '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d5136a79436_79709847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1d60fc5e8f60f9474b6993b121f999f8acab15' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:addons/store_locator/views/checkout/components/shippings/items/pickup.tpl' => 4,
  ),
),false)) {
function content_667d5136a79436_79709847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select','lite_checkout.use_two_fingers_for_move_map','storefront_search_label','pickup_point_not_selected','select','lite_checkout.use_two_fingers_for_move_map','storefront_search_label','pickup_point_not_selected'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('_max_desktop_items', (($tmp = $_smarty_tpl->tpl_vars['max_desktop_items']->value ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'] === "yandex") {?>
    <?php $_smarty_tpl->_assignInScope('show_move_map_mobile_hint', true);
}?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--map-list">

        <div class="ty-checkout-select-store__map pickup__map-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['display_pickup_map']->value) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "marker_content", null, null);?>
                    <div class="litecheckout-ya-baloon">
                        <strong class="litecheckout-ya-baloon__store-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate'] > 0) {?> — <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, true);
}?></strong>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?><p class="litecheckout-ya-baloon__store-address"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_address'];?>
</p><?php }?>

                        <p class="litecheckout-ya-baloon__select-row">
                            <a data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                               class="cm-sl-pickup-select-location ty-btn ty-btn__primary text-button ty-width-full"
                            ><?php echo $_smarty_tpl->__("select");?>
</a>
                        </p>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?><p class="litecheckout-ya-baloon__store-phone"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
</a></p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?><p class="litecheckout-ya-baloon__store-time"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_time'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?><div class="litecheckout-ya-baloon__store-description"><?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>
</div><?php }?>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_assignInScope('is_store_selected', $_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id'] || $_smarty_tpl->tpl_vars['store_count']->value == 1);?>

                <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('selected_store_lat', $_smarty_tpl->tpl_vars['store']->value['latitude']);?>
                    <?php $_smarty_tpl->_assignInScope('selected_store_lng', $_smarty_tpl->tpl_vars['store']->value['longitude']);?>
                <?php }?>

                <div class="cm-sl-pickup-map-marker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
                     data-ca-geo-map-marker-lat="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-geo-map-marker-lng="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
                     <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                        data-ca-geo-map-marker-selected="true"
                     <?php }?>
                ><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'marker_content');?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['store']->value['latitude'] && $_smarty_tpl->tpl_vars['store']->value['longitude']) {?>
                    <?php $_smarty_tpl->_assignInScope('initial_lat', (($tmp = $_smarty_tpl->tpl_vars['selected_store_lat']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['latitude'] ?? null : $tmp));?>
                    <?php $_smarty_tpl->_assignInScope('initial_lng', (($tmp = $_smarty_tpl->tpl_vars['selected_store_lng']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['longitude'] ?? null : $tmp));?>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="pickup__map-container cm-geo-map-container"
                 data-ca-geo-map-initial-lat="<?php echo htmlspecialchars((string) doubleval((($tmp = $_smarty_tpl->tpl_vars['initial_lat']->value ?? null)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-initial-lng="<?php echo htmlspecialchars((string) doubleval((($tmp = $_smarty_tpl->tpl_vars['initial_lng']->value ?? null)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-zoom="16"
                 data-ca-geo-map-controls-enable-zoom="true"
                 data-ca-geo-map-controls-enable-fullscreen="true"
                 data-ca-geo-map-controls-enable-layers="true"
                 data-ca-geo-map-controls-enable-ruler="true"
                 data-ca-geo-map-behaviors-enable-drag="true"
                 data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                 data-ca-geo-map-behaviors-enable-smart-drag="true"
                 data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                 data-ca-geo-map-behaviors-enable-multi-touch="true"
                 data-ca-geo-map-language="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-marker-selector=".cm-sl-pickup-map-marker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            ></div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="pickup__map-container--mobile-hint"><?php echo $_smarty_tpl->__("lite_checkout.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php }?>
    </div>

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
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input" data-ca-pickup-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" "
                    value />
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
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('_max_desktop_items', (($tmp = $_smarty_tpl->tpl_vars['max_desktop_items']->value ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'] === "yandex") {?>
    <?php $_smarty_tpl->_assignInScope('show_move_map_mobile_hint', true);
}?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--map-list">

        <div class="ty-checkout-select-store__map pickup__map-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['display_pickup_map']->value) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "marker_content", null, null);?>
                    <div class="litecheckout-ya-baloon">
                        <strong class="litecheckout-ya-baloon__store-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate'] > 0) {?> — <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, true);
}?></strong>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?><p class="litecheckout-ya-baloon__store-address"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_address'];?>
</p><?php }?>

                        <p class="litecheckout-ya-baloon__select-row">
                            <a data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                               class="cm-sl-pickup-select-location ty-btn ty-btn__primary text-button ty-width-full"
                            ><?php echo $_smarty_tpl->__("select");?>
</a>
                        </p>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?><p class="litecheckout-ya-baloon__store-phone"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
</a></p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?><p class="litecheckout-ya-baloon__store-time"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_time'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?><div class="litecheckout-ya-baloon__store-description"><?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>
</div><?php }?>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_assignInScope('is_store_selected', $_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id'] || $_smarty_tpl->tpl_vars['store_count']->value == 1);?>

                <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('selected_store_lat', $_smarty_tpl->tpl_vars['store']->value['latitude']);?>
                    <?php $_smarty_tpl->_assignInScope('selected_store_lng', $_smarty_tpl->tpl_vars['store']->value['longitude']);?>
                <?php }?>

                <div class="cm-sl-pickup-map-marker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
                     data-ca-geo-map-marker-lat="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-geo-map-marker-lng="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
                     <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                        data-ca-geo-map-marker-selected="true"
                     <?php }?>
                ><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'marker_content');?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['store']->value['latitude'] && $_smarty_tpl->tpl_vars['store']->value['longitude']) {?>
                    <?php $_smarty_tpl->_assignInScope('initial_lat', (($tmp = $_smarty_tpl->tpl_vars['selected_store_lat']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['latitude'] ?? null : $tmp));?>
                    <?php $_smarty_tpl->_assignInScope('initial_lng', (($tmp = $_smarty_tpl->tpl_vars['selected_store_lng']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['longitude'] ?? null : $tmp));?>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="pickup__map-container cm-geo-map-container"
                 data-ca-geo-map-initial-lat="<?php echo htmlspecialchars((string) doubleval((($tmp = $_smarty_tpl->tpl_vars['initial_lat']->value ?? null)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-initial-lng="<?php echo htmlspecialchars((string) doubleval((($tmp = $_smarty_tpl->tpl_vars['initial_lng']->value ?? null)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-zoom="16"
                 data-ca-geo-map-controls-enable-zoom="true"
                 data-ca-geo-map-controls-enable-fullscreen="true"
                 data-ca-geo-map-controls-enable-layers="true"
                 data-ca-geo-map-controls-enable-ruler="true"
                 data-ca-geo-map-behaviors-enable-drag="true"
                 data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                 data-ca-geo-map-behaviors-enable-smart-drag="true"
                 data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                 data-ca-geo-map-behaviors-enable-multi-touch="true"
                 data-ca-geo-map-language="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-marker-selector=".cm-sl-pickup-map-marker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            ></div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="pickup__map-container--mobile-hint"><?php echo $_smarty_tpl->__("lite_checkout.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php }?>
    </div>

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
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input" data-ca-pickup-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" "
                    value />
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
