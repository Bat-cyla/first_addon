<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:25
  from '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/verify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e391f7d37_40234403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259609d1f738b91e4dc9965455caccde9a2ca676' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/verify.tpl',
      1 => 1720682353,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 4,
    'tygh:common/status.tpl' => 2,
    'tygh:common/price.tpl' => 6,
    'tygh:common/options_info.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:common/tabsbox.tpl' => 2,
  ),
),false)) {
function content_668f9e391f7d37_40234403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate_info','gift_cert_code','status','gift_cert_to','gift_cert_from','amount','free_products','product','quantity','deleted_product','no_items','gc_redeem_and_add_free_products','date','customer','balance','gift_cert_debit','amount','free_products','deleted_product','amount','free_products','deleted_product','no_items','error_gift_cert_code','gift_certificate_verification','gift_certificate_info','gift_cert_code','status','gift_cert_to','gift_cert_from','amount','free_products','product','quantity','deleted_product','no_items','gc_redeem_and_add_free_products','date','customer','balance','gift_cert_debit','amount','free_products','deleted_product','amount','free_products','deleted_product','no_items','error_gift_cert_code','gift_certificate_verification'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="gift_cert_verify">
<?php if ($_smarty_tpl->tpl_vars['verify_data']->value) {?>

<div class="ty-gift-certificate-verify gift-verify">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
<div id="content_detailed" class="hidden">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("gift_certificate_info")), 0, false);
?>
    <table class="ty-gift-certificate-verify__table gift-verify-table">
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("status");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['verify_data']->value['status'],'display'=>"view",'status_type'=>(defined('STATUSES_GIFT_CERTIFICATE') ? constant('STATUSES_GIFT_CERTIFICATE') : null)), 0, false);
?></td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("amount");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['verify_data']->value['amount']), 0, false);
?></td>
        </tr>
    </table>


    <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y" && $_smarty_tpl->tpl_vars['verify_data']->value['products']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("free_products")), 0, true);
?>
    <table class="ty-gift-certificate-verify__table ty-table">
        <thead>
            <tr>
                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['verify_data']->value['products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
        <tr>
            <td>
            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_item']->value['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_item']->value['product_options_value']), 0, true);
?>
            </td>
            <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['product_item']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="2"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

    <?php if ($_smarty_tpl->tpl_vars['verify_data']->value['status'] == "A") {?>
        <div class="ty-gift-certificate__buttons buttons-container">
            <form name="gift_certificate_apply_form" method="post" action="<?php echo htmlspecialchars((string) fn_url(), ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="coupon_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ty-float-right ty-gift-certificate__preview-btn">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("gc_redeem_and_add_free_products"),'but_name'=>"dispatch[checkout.apply_coupon]",'but_role'=>"submit",'but_meta'=>"ty-btn__tertiary"), 0, false);
?>
                </div>
            </form>
        </div>
    <?php }?>

    <?php }?>

</div>
<div id="content_log" class="hidden">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

    <?php }?>

    <table class="ty-table ty-gift-certificate-history">
        <thead>
            <tr>
                <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "timestamp") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("balance");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "amount") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=debit&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_debit");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "debit") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            </tr>
        </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
    <tr>
        <td style="width: 30px;"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
        <td>
            <p>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

            <?php } elseif ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_lastname'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            </p>
            <p>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php } else { ?>
                <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['order_email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_email'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
            </p>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {
echo $_smarty_tpl->__("amount");?>
:&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['amount']), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                <p><?php echo $_smarty_tpl->__("free_products");?>
:</p>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                        <li><?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?><span>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
)</span></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {
echo $_smarty_tpl->__("amount");?>
:&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['debit']), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['debit_products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                <p><?php echo $_smarty_tpl->__("free_products");?>
:</p>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['debit_products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                        <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        </td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['l']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="5"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>

</div>

<?php } else { ?>
    <div class="ty-gift-certificate-verify__error"><?php echo $_smarty_tpl->__("error_gift_cert_code");?>
</div>
<?php }?>

<!--gift_cert_verify--></div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("gift_certificate_verification");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/verify.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/verify.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="gift_cert_verify">
<?php if ($_smarty_tpl->tpl_vars['verify_data']->value) {?>

<div class="ty-gift-certificate-verify gift-verify">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
<div id="content_detailed" class="hidden">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("gift_certificate_info")), 0, true);
?>
    <table class="ty-gift-certificate-verify__table gift-verify-table">
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("status");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['verify_data']->value['status'],'display'=>"view",'status_type'=>(defined('STATUSES_GIFT_CERTIFICATE') ? constant('STATUSES_GIFT_CERTIFICATE') : null)), 0, true);
?></td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="ty-gift-certificate-verify__row"><strong><?php echo $_smarty_tpl->__("amount");?>
:</strong></td>
            <td class="ty-gift-certificate-verify__row"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['verify_data']->value['amount']), 0, true);
?></td>
        </tr>
    </table>


    <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y" && $_smarty_tpl->tpl_vars['verify_data']->value['products']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("free_products")), 0, true);
?>
    <table class="ty-gift-certificate-verify__table ty-table">
        <thead>
            <tr>
                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['verify_data']->value['products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
        <tr>
            <td>
            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_item']->value['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_item']->value['product_options_value']), 0, true);
?>
            </td>
            <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['product_item']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="2"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

    <?php if ($_smarty_tpl->tpl_vars['verify_data']->value['status'] == "A") {?>
        <div class="ty-gift-certificate__buttons buttons-container">
            <form name="gift_certificate_apply_form" method="post" action="<?php echo htmlspecialchars((string) fn_url(), ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="coupon_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['verify_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ty-float-right ty-gift-certificate__preview-btn">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("gc_redeem_and_add_free_products"),'but_name'=>"dispatch[checkout.apply_coupon]",'but_role'=>"submit",'but_meta'=>"ty-btn__tertiary"), 0, true);
?>
                </div>
            </form>
        </div>
    <?php }?>

    <?php }?>

</div>
<div id="content_log" class="hidden">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

    <?php }?>

    <table class="ty-table ty-gift-certificate-history">
        <thead>
            <tr>
                <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "timestamp") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("balance");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "amount") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
                <th ><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=debit&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_debit");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "debit") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            </tr>
        </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
    <tr>
        <td style="width: 30px;"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
        <td>
            <p>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

            <?php } elseif ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_lastname'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            </p>
            <p>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php } else { ?>
                <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['l']->value['order_email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['l']->value['order_email'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
            </p>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {
echo $_smarty_tpl->__("amount");?>
:&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['amount']), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                <p><?php echo $_smarty_tpl->__("free_products");?>
:</p>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                        <li><?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?><span>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
)</span></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {
echo $_smarty_tpl->__("amount");?>
:&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['l']->value['debit']), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['debit_products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                <p><?php echo $_smarty_tpl->__("free_products");?>
:</p>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value['debit_products'], 'product_item');
$_smarty_tpl->tpl_vars['product_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_item']->value) {
$_smarty_tpl->tpl_vars['product_item']->do_else = false;
?>
                        <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        </td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['l']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="5"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, true);
?>

</div>

<?php } else { ?>
    <div class="ty-gift-certificate-verify__error"><?php echo $_smarty_tpl->__("error_gift_cert_code");?>
</div>
<?php }?>

<!--gift_cert_verify--></div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("gift_certificate_verification");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
