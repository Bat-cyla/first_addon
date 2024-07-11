<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:06
  from '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e263e84a7_45463197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb16f3f58409d600e94f84acd6427980a8c0fcb' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/update.tpl',
      1 => 1720682353,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:pickers/products/picker.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
    'tygh:buttons/save.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_668f9e263e84a7_45463197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.format_price.php','function'=>'smarty_modifier_format_price',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_gift_cert_amount_alert','recipients_name','purchasers_name','amount','gift_comment','text_no_products_defined','gift_add_products','how_to_send','send_via_email','send_via_postal_mail','gift_certificates.recipient_email','template','address','city','country','select_country','state','select_state','zip_postal_code','preview','purchase_gift_certificate','gift_certificate','text_gift_cert_amount_alert','recipients_name','purchasers_name','amount','gift_comment','text_no_products_defined','gift_add_products','how_to_send','send_via_email','send_via_postal_mail','gift_certificates.recipient_email','template','address','city','country','select_country','state','select_state','zip_postal_code','preview','purchase_gift_certificate','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('min_amount', $_prefixVariable1);
ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('max_amount', $_prefixVariable2);?>

<?php $_smarty_tpl->_assignInScope('text_gift_cert_amount_alert', $_smarty_tpl->__("text_gift_cert_amount_alert",array("[min]"=>$_smarty_tpl->tpl_vars['min_amount']->value,"[max]"=>$_smarty_tpl->tpl_vars['max_amount']->value)));?>

<?php echo '<script'; ?>
>
(function(_, $) {

    var max_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    var min_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    var send_via = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] ?? null)===null||$tmp==='' ? "E" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function() {

        $.ceFormValidator('registerValidator', {
            class_name: 'cm-gc-validate-amount',
            message: '',
            func: function(id) {
                var max = parseFloat(max_amount);
                var min = parseFloat(min_amount);

                var amount = parseFloat($('#' + id).autoNumeric('get'));
                if ((amount <= max) && (amount >= min)) {
                    return true;
                }

                return false;
            }
        });

        if ($('#send_via').val() == 'P') {
            send_via = 'P';
            $('#post_block').switchAvailability(false, true);
        } else {
            send_via = 'E';
            $('#email_block').switchAvailability(false, true);
        }

        $('#' + (send_via == 'E' ? 'post' : 'email') + '_block').switchAvailability(true, true);

        $(_.doc).on('click', 'input[name="gift_cert_data[send_via]"]', function() {
            if ($(this).val() == 'P') {
                $('#send_via').val('P');
            } else {
                $('#send_via').val('');
            }

            $('#email_block').switchAvailability($(this).val() == 'P', true);
            $('#post_block').switchAvailability($(this).val() == 'E', true);
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ty-gift-certificate" id="gift_certificate_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value && $_smarty_tpl->tpl_vars['runtime']->value['mode'] != "update") {?>
    <?php $_smarty_tpl->_assignInScope('is_ajax', true);
}?>

<form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>class="cm-ajax cm-ajax-full-render" <?php }?>action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="gift_certificates_form">
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
<input type="hidden" name="gift_cert_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="ty-control-group">
    <label for="gift_cert_recipient" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("recipients_name");?>
</label>
    <input type="text" id="gift_cert_recipient" name="gift_cert_data[recipient]" class="ty-input-text-full cm-focus" size="50" maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<div class="ty-control-group">
    <label for="gift_cert_sender" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("purchasers_name");?>
</label>
    <input type="text" id="gift_cert_sender" name="gift_cert_data[sender]" class="ty-input-text-full" size="50" maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<div class="ty-control-group ty-gift-certificate__amount">
    <?php $_smarty_tpl->_assignInScope('base_currency', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);?>
    <label for="gift_cert_amount" class="ty-control-group__title cm-required cm-gc-validate-amount"><?php echo $_smarty_tpl->__("amount");?>
</label>

    <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] == "N") {?>
        <span class="ty-gift-certificate__currency"><?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
</span>
    <?php }?>

    <input
        type="text"
        id="gift_cert_amount"
        name="gift_cert_data[amount]"
        class="ty-gift-certificate__amount-input cm-numeric"
        data-p-sign="s"
        data-a-sep="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator'];
}?>"
        data-m-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals'], ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['decimals_separator']) {?> data-a-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        size="5"
        value="<?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['amount'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], ENT_QUOTES, 'UTF-8');
}?>" />

    <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] == "Y") {?>
        <span class="ty-gift-certificate__currency"><?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
</span>
    <?php }?>

    <div class="ty-gift-certificate__amount-alert form-field-desc"><?php echo $_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value;?>
</div>
</div>

<div class="ty-control-group">
    <label for="gift_cert_message" class="ty-control-group__title"><?php echo $_smarty_tpl->__("gift_comment");?>
</label>
    <textarea id="gift_cert_message" name="gift_cert_data[message]" cols="72" rows="4" class="ty-input-text-full" <?php if ($_smarty_tpl->tpl_vars['is_text']->value == "Y") {?>readonly="readonly"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
    <div class="ty-gift-certificate__products ty-control-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"free_products",'item_ids'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['products'],'input_name'=>"gift_cert_data[products]",'type'=>"table",'no_item_text'=>$_smarty_tpl->__("text_no_products_defined"),'holder_name'=>"gift_certificates",'but_role'=>"text",'but_meta'=>"ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("gift_add_products"),'no_container'=>true,'icon_plus'=>true), 0, false);
?>
    </div>
<?php }?>

<div class="ty-gift-certificate__switch clearfix">
    <div class="ty-gift-certificate__switch-label gift-send-right"><?php echo $_smarty_tpl->__("how_to_send");?>
</div>
    <div class="ty-gift-certificate__switch-mail">
        <input type="hidden" id="send_via" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'], ENT_QUOTES, 'UTF-8');?>
" />
        <div class="ty-gift-certificate__send">
            <input type="radio" name="gift_cert_data[send_via]" value="E" <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?>checked="checked"<?php }?> class="radio" id="sw_gc_switcher_suffix_e" /><label for="sw_gc_switcher_suffix_e" class="ty-valign"><?php echo $_smarty_tpl->__("send_via_email");?>
</label>
        </div>
        <div class="ty-gift-certificate__send">
            <input type="radio" name="gift_cert_data[send_via]" value="P" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?>checked="checked"<?php }?> class="radio" id="sw_gc_switcher_suffix_p" /><label for="sw_gc_switcher_suffix_p" class="ty-valign"><?php echo $_smarty_tpl->__("send_via_postal_mail");?>
</label>
        </div>
    </div>
</div>

<div id="gc_switcher">

    <div class="ty-gift-certificate__block <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?> hidden<?php }?>" id="email_block">
        <div class="ty-control-group">
            <label for="gift_cert_email" class="cm-required cm-email ty-control-group__title"><?php echo $_smarty_tpl->__("gift_certificates.recipient_email");?>
</label>
            <input type="text" id="gift_cert_email" name="gift_cert_data[email]" class="ty-input-text-full" size="40" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
        <div class="ty-control-group">
            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['templates']->value) > 1) {?>
                <label for="gift_cert_template" class="ty-control-group__title"><?php echo $_smarty_tpl->__("template");?>
</label>
                <select id="gift_cert_template" name="gift_cert_data[template]">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'name', false, 'file');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['file']->value == $_smarty_tpl->tpl_vars['gift_cert_data']->value['template']) {?>selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'name', false, 'file');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <input id="gift_cert_template" type="hidden" name="gift_cert_data[template]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>

    <div class="ty-gift-certificate__block<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?> hidden<?php }?>" id="post_block">

        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"gift_cert_phone",'name'=>"gift_cert_data[phone]",'value'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['phone'],'class'=>"ty-input-text-full",'width'=>"full"), 0, false);
?>

        <div class="ty-control-group">
            <label for="gift_cert_address" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("address");?>
</label>
            <input type="text" id="gift_cert_address" name="gift_cert_data[address]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="ty-control-group">
            <input type="text" id="gift_cert_address_2" name="gift_cert_data[address_2]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="ty-control-group">
            <label for="gift_cert_city" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("city");?>
</label>
            <input type="text" id="gift_cert_city" name="gift_cert_data[city]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>
        <div class="ty-control-group ty-float-left ty-gift-certificate__country country">
            <label for="gift_cert_country" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("country");?>
</label>
            <select id="gift_cert_country" name="gift_cert_data[country]" class="ty-gift-certificate__select cm-country cm-location-billing" >
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>
        <div class="ty-control-group ty-float-right ty-gift-certificate__state state">
            <label for="gift_cert_state" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("state");?>
</label>
            <select class="ty-gift-certificate__select cm-state cm-location-billing" id="gift_cert_state" name="gift_cert_data[state]">
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
            <input type="text" id="gift_cert_state_d" name="gift_cert_data[state]" class="cm-state cm-location-billing ty-input-text hidden" size="50" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled"  />
        </div>

        <div class="ty-control-group ty-billing-zip-code">
            <label for="gift_cert_zipcode" class="ty-control-group__title cm-required cm-zipcode cm-location-billing"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <input type="text" id="gift_cert_zipcode" name="gift_cert_data[zipcode]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

    </div>

    <div class="ty-gift-certificate__block">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"gift_certificates"), 0, false);
?>
    </div>

</div>

<div class="ty-gift-certificate__buttons buttons-container">

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {?>
    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"gift_certificates:buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"gift_certificates:buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[gift_certificates.add]",'but_role'=>"action"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"gift_certificates:buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[gift_certificates.update]"), 0, false);
}
if ($_smarty_tpl->tpl_vars['templates']->value) {?>
    <div class="ty-float-right ty-gift-certificate__preview-btn">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("preview"),'but_name'=>"dispatch[gift_certificates.preview]",'but_role'=>"submit",'but_meta'=>"ty-btn__tertiary cm-new-window"), 0, false);
?>
    </div>
<?php }?>
</div>

</form>
<!--gift_certificate_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {
echo $_smarty_tpl->__("purchase_gift_certificate");
} else {
echo $_smarty_tpl->__("gift_certificate");
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/update.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/update.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('min_amount', $_prefixVariable3);
ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('max_amount', $_prefixVariable4);?>

<?php $_smarty_tpl->_assignInScope('text_gift_cert_amount_alert', $_smarty_tpl->__("text_gift_cert_amount_alert",array("[min]"=>$_smarty_tpl->tpl_vars['min_amount']->value,"[max]"=>$_smarty_tpl->tpl_vars['max_amount']->value)));?>

<?php echo '<script'; ?>
>
(function(_, $) {

    var max_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    var min_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    var send_via = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] ?? null)===null||$tmp==='' ? "E" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function() {

        $.ceFormValidator('registerValidator', {
            class_name: 'cm-gc-validate-amount',
            message: '',
            func: function(id) {
                var max = parseFloat(max_amount);
                var min = parseFloat(min_amount);

                var amount = parseFloat($('#' + id).autoNumeric('get'));
                if ((amount <= max) && (amount >= min)) {
                    return true;
                }

                return false;
            }
        });

        if ($('#send_via').val() == 'P') {
            send_via = 'P';
            $('#post_block').switchAvailability(false, true);
        } else {
            send_via = 'E';
            $('#email_block').switchAvailability(false, true);
        }

        $('#' + (send_via == 'E' ? 'post' : 'email') + '_block').switchAvailability(true, true);

        $(_.doc).on('click', 'input[name="gift_cert_data[send_via]"]', function() {
            if ($(this).val() == 'P') {
                $('#send_via').val('P');
            } else {
                $('#send_via').val('');
            }

            $('#email_block').switchAvailability($(this).val() == 'P', true);
            $('#post_block').switchAvailability($(this).val() == 'E', true);
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="ty-gift-certificate" id="gift_certificate_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value && $_smarty_tpl->tpl_vars['runtime']->value['mode'] != "update") {?>
    <?php $_smarty_tpl->_assignInScope('is_ajax', true);
}?>

<form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>class="cm-ajax cm-ajax-full-render" <?php }?>action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="gift_certificates_form">
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
<input type="hidden" name="gift_cert_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="ty-control-group">
    <label for="gift_cert_recipient" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("recipients_name");?>
</label>
    <input type="text" id="gift_cert_recipient" name="gift_cert_data[recipient]" class="ty-input-text-full cm-focus" size="50" maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<div class="ty-control-group">
    <label for="gift_cert_sender" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("purchasers_name");?>
</label>
    <input type="text" id="gift_cert_sender" name="gift_cert_data[sender]" class="ty-input-text-full" size="50" maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<div class="ty-control-group ty-gift-certificate__amount">
    <?php $_smarty_tpl->_assignInScope('base_currency', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);?>
    <label for="gift_cert_amount" class="ty-control-group__title cm-required cm-gc-validate-amount"><?php echo $_smarty_tpl->__("amount");?>
</label>

    <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] == "N") {?>
        <span class="ty-gift-certificate__currency"><?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
</span>
    <?php }?>

    <input
        type="text"
        id="gift_cert_amount"
        name="gift_cert_data[amount]"
        class="ty-gift-certificate__amount-input cm-numeric"
        data-p-sign="s"
        data-a-sep="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator'];
}?>"
        data-m-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals'], ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['decimals_separator']) {?> data-a-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        size="5"
        value="<?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['amount'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], ENT_QUOTES, 'UTF-8');
}?>" />

    <?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] == "Y") {?>
        <span class="ty-gift-certificate__currency"><?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
</span>
    <?php }?>

    <div class="ty-gift-certificate__amount-alert form-field-desc"><?php echo $_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value;?>
</div>
</div>

<div class="ty-control-group">
    <label for="gift_cert_message" class="ty-control-group__title"><?php echo $_smarty_tpl->__("gift_comment");?>
</label>
    <textarea id="gift_cert_message" name="gift_cert_data[message]" cols="72" rows="4" class="ty-input-text-full" <?php if ($_smarty_tpl->tpl_vars['is_text']->value == "Y") {?>readonly="readonly"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
    <div class="ty-gift-certificate__products ty-control-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"free_products",'item_ids'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['products'],'input_name'=>"gift_cert_data[products]",'type'=>"table",'no_item_text'=>$_smarty_tpl->__("text_no_products_defined"),'holder_name'=>"gift_certificates",'but_role'=>"text",'but_meta'=>"ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("gift_add_products"),'no_container'=>true,'icon_plus'=>true), 0, true);
?>
    </div>
<?php }?>

<div class="ty-gift-certificate__switch clearfix">
    <div class="ty-gift-certificate__switch-label gift-send-right"><?php echo $_smarty_tpl->__("how_to_send");?>
</div>
    <div class="ty-gift-certificate__switch-mail">
        <input type="hidden" id="send_via" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'], ENT_QUOTES, 'UTF-8');?>
" />
        <div class="ty-gift-certificate__send">
            <input type="radio" name="gift_cert_data[send_via]" value="E" <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?>checked="checked"<?php }?> class="radio" id="sw_gc_switcher_suffix_e" /><label for="sw_gc_switcher_suffix_e" class="ty-valign"><?php echo $_smarty_tpl->__("send_via_email");?>
</label>
        </div>
        <div class="ty-gift-certificate__send">
            <input type="radio" name="gift_cert_data[send_via]" value="P" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?>checked="checked"<?php }?> class="radio" id="sw_gc_switcher_suffix_p" /><label for="sw_gc_switcher_suffix_p" class="ty-valign"><?php echo $_smarty_tpl->__("send_via_postal_mail");?>
</label>
        </div>
    </div>
</div>

<div id="gc_switcher">

    <div class="ty-gift-certificate__block <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?> hidden<?php }?>" id="email_block">
        <div class="ty-control-group">
            <label for="gift_cert_email" class="cm-required cm-email ty-control-group__title"><?php echo $_smarty_tpl->__("gift_certificates.recipient_email");?>
</label>
            <input type="text" id="gift_cert_email" name="gift_cert_data[email]" class="ty-input-text-full" size="40" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
        <div class="ty-control-group">
            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['templates']->value) > 1) {?>
                <label for="gift_cert_template" class="ty-control-group__title"><?php echo $_smarty_tpl->__("template");?>
</label>
                <select id="gift_cert_template" name="gift_cert_data[template]">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'name', false, 'file');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['file']->value == $_smarty_tpl->tpl_vars['gift_cert_data']->value['template']) {?>selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'name', false, 'file');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <input id="gift_cert_template" type="hidden" name="gift_cert_data[template]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>

    <div class="ty-gift-certificate__block<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?> hidden<?php }?>" id="post_block">

        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"gift_cert_phone",'name'=>"gift_cert_data[phone]",'value'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['phone'],'class'=>"ty-input-text-full",'width'=>"full"), 0, true);
?>

        <div class="ty-control-group">
            <label for="gift_cert_address" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("address");?>
</label>
            <input type="text" id="gift_cert_address" name="gift_cert_data[address]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="ty-control-group">
            <input type="text" id="gift_cert_address_2" name="gift_cert_data[address_2]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="ty-control-group">
            <label for="gift_cert_city" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("city");?>
</label>
            <input type="text" id="gift_cert_city" name="gift_cert_data[city]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>
        <div class="ty-control-group ty-float-left ty-gift-certificate__country country">
            <label for="gift_cert_country" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("country");?>
</label>
            <select id="gift_cert_country" name="gift_cert_data[country]" class="ty-gift-certificate__select cm-country cm-location-billing" >
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>
        <div class="ty-control-group ty-float-right ty-gift-certificate__state state">
            <label for="gift_cert_state" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("state");?>
</label>
            <select class="ty-gift-certificate__select cm-state cm-location-billing" id="gift_cert_state" name="gift_cert_data[state]">
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
            <input type="text" id="gift_cert_state_d" name="gift_cert_data[state]" class="cm-state cm-location-billing ty-input-text hidden" size="50" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled"  />
        </div>

        <div class="ty-control-group ty-billing-zip-code">
            <label for="gift_cert_zipcode" class="ty-control-group__title cm-required cm-zipcode cm-location-billing"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <input type="text" id="gift_cert_zipcode" name="gift_cert_data[zipcode]" class="ty-input-text-full" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

    </div>

    <div class="ty-gift-certificate__block">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"gift_certificates"), 0, true);
?>
    </div>

</div>

<div class="ty-gift-certificate__buttons buttons-container">

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {?>
    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"gift_certificates:buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"gift_certificates:buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[gift_certificates.add]",'but_role'=>"action"), 0, true);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"gift_certificates:buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[gift_certificates.update]"), 0, true);
}
if ($_smarty_tpl->tpl_vars['templates']->value) {?>
    <div class="ty-float-right ty-gift-certificate__preview-btn">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("preview"),'but_name'=>"dispatch[gift_certificates.preview]",'but_role'=>"submit",'but_meta'=>"ty-btn__tertiary cm-new-window"), 0, true);
?>
    </div>
<?php }?>
</div>

</form>
<!--gift_certificate_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {
echo $_smarty_tpl->__("purchase_gift_certificate");
} else {
echo $_smarty_tpl->__("gift_certificate");
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
