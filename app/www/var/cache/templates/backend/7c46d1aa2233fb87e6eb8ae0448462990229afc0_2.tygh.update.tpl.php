<?php
/* Smarty version 4.1.1, created on 2024-07-10 13:21:53
  from '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e60c15d7977_62712965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c46d1aa2233fb87e6eb8ae0448462990229afc0' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/status.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:components/phone.tpl' => 1,
    'tygh:pickers/products/picker.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_668e60c15d7977_62712965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.format_price.php','function'=>'smarty_modifier_format_price',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),5=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_gift_cert_amount_alert','information','gift_cert_code','status','gift_cert_to','gift_cert_from','message','amount','send_via_email','send_via_postal_mail','email','template','address','address_2','city','country','select_country','state','select_state','zip_postal_code','free_products','notify_customer','date','email','person_name','order_id','balance','gift_cert_debit','date','email','person_name','order_id','balance','amount','free_products','deleted_product','gift_cert_debit','amount','free_products','deleted_product','no_data','gift_certificate_statuses','preview','delete','new_certificate'));
if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $(document).ready(function() {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-gc-validate-amount',
            message: _.tr('text_gift_cert_amount_alert'),
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

        $('#' + (send_via == 'E' ? 'post' : 'email') + '_block').switchAvailability(true, true);

        $(_.doc).on('click', 'input[name="gift_cert_data[send_via]"]', function() {
            $('#email_block').switchAvailability($(this).val() == 'P', true);
            $('#post_block').switchAvailability($(this).val() == 'E', true);
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'] == '') {?>
    <?php ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],0);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('max_amount', $_prefixVariable1);?>
    <?php ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],0);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('min_amount', $_prefixVariable2);
} else { ?>
    <?php ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('max_amount', $_prefixVariable3);?>
    <?php ob_start();
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('min_amount', $_prefixVariable4);
}?>

<?php $_smarty_tpl->_assignInScope('text_gift_cert_amount_alert', $_smarty_tpl->__("text_gift_cert_amount_alert",array("[min]"=>$_smarty_tpl->tpl_vars['min_amount']->value,"[max]"=>$_smarty_tpl->tpl_vars['max_amount']->value)));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
var max_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
var min_amount = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
var send_via = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] ?? null)===null||$tmp==='' ? "E" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_gift_cert_amount_alert',  '<?php echo strtr((string)$_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" class=" form-horizontal form-edit" name="gift_certificates_form" enctype="multipart/form-data">
    <input type="hidden" name="gift_cert_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0, false);
?>

    <div id="acc_information" class="collapse in">

    
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <div id="content_detailed" class="hidden">
    <?php }?>

    
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <fieldset>
        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
            <div class="controls">
                <input type="hidden" name="gift_cert_data[gift_cert_code]" id="elm_gift_cert_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="text-type-value select-value-wrap"><span class="select-value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</span></div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_status"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <input type="hidden" name="certificate_status" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['status'],'display'=>"select",'name'=>"gift_cert_data[status]",'status_type'=>(defined('STATUSES_GIFT_CERTIFICATE') ? constant('STATUSES_GIFT_CERTIFICATE') : null),'select_id'=>"elm_gift_cert_status"), 0, false);
?>
            </div>
        </div>
        <?php }?>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"gift_cert_data[company_id]",'selected'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['company_id'],'id'=>"elm_gift_cert_data_company_id"), 0, false);
?>
        <?php } else { ?>
            <input type="hidden" name="gift_cert_data[company_id]" value="0">
        <?php }?>

        <div class="control-group">
            <label for="elm_gift_cert_recipient" class="control-label cm-required"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_gift_cert_recipient" class="input-large" name="gift_cert_data[recipient]"  maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_gift_cert_sender" class="control-label cm-required"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_gift_cert_sender" class="input-large" name="gift_cert_data[sender]" maxlength="255" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_message"><?php echo $_smarty_tpl->__("message");?>
:</label>
            <div class="controls">
                <textarea id="elm_gift_cert_message" name="gift_cert_data[message]" cols="55" rows="6" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="cm-required control-label cm-gc-validate-amount" for="gift_cert_amount"><?php echo $_smarty_tpl->__("amount");?>
:</label>
            <div class="controls">
                <div class="text-type-value pull-left"><?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] != "Y") {
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
}?>&nbsp;</div>
                <input type="text"
                       id="gift_cert_amount"
                       name="gift_cert_data[amount]"
                       class="valign input-text-short inp-el cm-numeric"
                       data-p-sign="s"
                       data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'];?>
"
                       <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'] == '') {?>
                           data-m-dec="0"
                       <?php } else { ?>
                           data-a-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       size="5"
                       <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value) {?>
                           value="<?php echo fn_format_rate_value($_smarty_tpl->tpl_vars['gift_cert_data']->value['amount'],'',$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['coefficient']);?>
"
                       <?php } else { ?>
                           value="<?php echo fn_format_rate_value($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],'',$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['coefficient']);?>
"
                       <?php }?>
                />


                <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
}?>
                <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value;?>
</p>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <label for="elm_gift_cert_send_via_email" class="radio inline">
                    <input id="elm_gift_cert_send_via_email" type="radio" name="gift_cert_data[send_via]" value="E" <?php if (!$_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?>checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("send_via_email");?>

                </label>
                <label class="radio inline" for="elm_gift_cert_send_via_post">
                    <input id="elm_gift_cert_send_via_post" type="radio" name="gift_cert_data[send_via]" value="P" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?>checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("send_via_postal_mail");?>

                </label>
            </div>
        </div>

        <div id="email_block" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "P") {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label for="elm_gift_cert_email" class="cm-required control-label cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_email" name="gift_cert_data[email]" class="input-large" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['templates']->value) > 1) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_gift_cert_template"><?php echo $_smarty_tpl->__("template");?>
:</label>
                    <div class="controls">
                        <select id="elm_gift_cert_template" name="gift_cert_data[template]">
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
                    </div>
                </div>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'name', false, 'file');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <input type="hidden" name="gift_cert_data[template]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>

        <div id="post_block" <?php if (!$_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'] == "E") {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label for="elm_gift_cert_address" class="control-label cm-required"><?php echo $_smarty_tpl->__("address");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_address" name="gift_cert_data[address]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_gift_cert_address_2"><?php echo $_smarty_tpl->__("address_2");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_address_2" name="gift_cert_data[address_2]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <div class="control-group">
                <label for="elm_gift_cert_city" class="control-label cm-required"><?php echo $_smarty_tpl->__("city");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_city" name="gift_cert_data[city]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>
            <div class="control-group">
                <label for="elm_gift_cert_country" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
:</label>
                <div class="controls">
                    <select id="elm_gift_cert_country" name="gift_cert_data[country]" class="cm-country cm-location-billing">
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
            </div>

            <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['gift_cert_data']->value['state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>
            <div class="control-group">
                <label for="elm_gift_cert_state" class="control-label cm-required"><?php echo $_smarty_tpl->__("state");?>
:</label>
                <div class="controls">
                    <select class="cm-state cm-location-billing" id="elm_gift_cert_state" name="gift_cert_data[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </select>
                    <input type="text" id="elm_gift_cert_state_d" name="gift_cert_data[state]" class="cm-state cm-location-billing hidden" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled">
                </div>
            </div>

            <div class="control-group">
                <label for="elm_gift_cert_zipcode" class="control-label cm-required cm-zipcode cm-location-billing"><?php echo $_smarty_tpl->__("zip_postal_code");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_zipcode" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_gift_cert_phone",'name'=>"gift_cert_data[phone]",'value'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['phone']), 0, false);
?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?></fieldset><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("free_products")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"free_products",'item_ids'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['products'],'input_name'=>"gift_cert_data[products]",'type'=>"table",'picker_for'=>"gift_certificates",'placement'=>"right"), 0, false);
?>
        <?php }?>

        <div class="control-group">
            <label for="notify_user" class="control-label">
                <?php echo $_smarty_tpl->__("notify_customer");?>

            </label>
            <div class="controls">
                <input type="checkbox" name="notify_user" id="notify_user" value="Y">
            </div>
        </div>
        </form>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        </div>
        <div id="content_log" class="hidden">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['log']->value) {?>
            <div class="table-responsive-wrapper">
                <table class="table sortable table--relative table-responsive">
                <thead>
                    <tr>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "timestamp") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "timestamp") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "email") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("email");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("person_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "order_id") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order_id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "order_id") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "amount") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("balance");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "amount") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "debit") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=debit&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_debit");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "debit") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("email");?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['user_id'] || $_smarty_tpl->tpl_vars['l']->value['order_email']) {?><a href="mailto:<?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['email']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['order_email']), ENT_QUOTES, 'UTF-8');
}?>" class="underlined"><?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['email'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_email'], ENT_QUOTES, 'UTF-8');
}?></a><?php } else { ?>-<?php }?></td>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("person_name");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                            <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['l']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_lastname'], ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("order_id");?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['l']->value['order_id'])."&selected_section=payment_information"), ENT_QUOTES, 'UTF-8');?>
" class="underlined">&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</a><?php } else { ?>-<?php }?></td>
                    <td data-th="<?php echo $_smarty_tpl->__("balance");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?><span><?php echo $_smarty_tpl->__("amount");?>
:</span>&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['amount']), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['l']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                        <p><span><?php echo $_smarty_tpl->__("free_products");?>
:</span></p>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                            <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php }?>
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("gift_cert_debit");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?><span><?php echo $_smarty_tpl->__("amount");?>
:</span>&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['debit']), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['l']->value['debit_products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                        <p><span><?php echo $_smarty_tpl->__("free_products");?>
:</span></p>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['debit_products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                            <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php }?>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                </table>
            </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>
    <?php }?>
    
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"statuses.manage?type=G",'text'=>$_smarty_tpl->__("gift_certificate_statuses")), true);?>
</li>
                <li class="divider"></li>
            <?php }?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-new-window cm-submit",'dispatch'=>"dispatch[gift_certificates.preview]",'form'=>"gift_certificates_form"), true);?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[gift_certificates.update]",'but_role'=>"submit-link",'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'gift_extra_tools'),'save'=>$_smarty_tpl->tpl_vars['id']->value,'but_target_form'=>"gift_certificates_form"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'] : $_smarty_tpl->__("new_certificate"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
