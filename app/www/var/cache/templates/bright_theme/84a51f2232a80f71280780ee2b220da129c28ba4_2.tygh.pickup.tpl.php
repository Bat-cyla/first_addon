<?php
/* Smarty version 4.1.1, created on 2024-06-27 14:47:02
  from '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/items/pickup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d5136aa3ae5_11428737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a51f2232a80f71280780ee2b220da129c28ba4' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/store_locator/views/checkout/components/shippings/items/pickup.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_667d5136aa3ae5_11428737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('free','delivery_time','free','delivery_time'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><label for="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" 
        class="ty-one-store js-pickup-search-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) || ($_smarty_tpl->tpl_vars['store_count']->value == 1)) {?>ty-sdek-office__selected<?php }?>"
>
    <input type="radio" 
            class="ty-one-store__radio ty-one-store__radio--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 cm-sl-pickup-select-store"
            name="select_store[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) || ($_smarty_tpl->tpl_vars['store_count']->value == 1)) {?>
            checked="checked"
            <?php }?>
            id="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickup-select-store="true"
            data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
    />

    <div class="ty-sdek-store__label ty-one-store__label">
        <p class="ty-one-store__name">
            <span class="ty-one-store__name-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['free_shipping'])) {?> 
            <span class="ty-one-store__name-rate">
                (<?php echo $_smarty_tpl->__("free");?>
)
            </span>
            <?php } elseif ($_smarty_tpl->tpl_vars['store']->value['pickup_rate'] && $_smarty_tpl->tpl_vars['store']->value['pickup_rate'] > 0) {?>
            <span class="ty-one-store__name-rate">
                (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, false);
?>)
            </span>
            <?php }?>
        </p>

        <div class="ty-one-store__description">
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                <span class="ty-one-office__address"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                <span class="ty-one-office__worktime"><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
        </div>
    </div>
</label>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/items/pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/items/pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><label for="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" 
        class="ty-one-store js-pickup-search-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) || ($_smarty_tpl->tpl_vars['store_count']->value == 1)) {?>ty-sdek-office__selected<?php }?>"
>
    <input type="radio" 
            class="ty-one-store__radio ty-one-store__radio--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 cm-sl-pickup-select-store"
            name="select_store[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id']) || ($_smarty_tpl->tpl_vars['store_count']->value == 1)) {?>
            checked="checked"
            <?php }?>
            id="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickup-select-store="true"
            data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
    />

    <div class="ty-sdek-store__label ty-one-store__label">
        <p class="ty-one-store__name">
            <span class="ty-one-store__name-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['free_shipping'])) {?> 
            <span class="ty-one-store__name-rate">
                (<?php echo $_smarty_tpl->__("free");?>
)
            </span>
            <?php } elseif ($_smarty_tpl->tpl_vars['store']->value['pickup_rate'] && $_smarty_tpl->tpl_vars['store']->value['pickup_rate'] > 0) {?>
            <span class="ty-one-store__name-rate">
                (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, true);
?>)
            </span>
            <?php }?>
        </p>

        <div class="ty-one-store__description">
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                <span class="ty-one-office__address"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                <span class="ty-one-office__worktime"><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
        </div>
    </div>
</label>
<?php }
}
}
