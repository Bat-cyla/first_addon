<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:37:44
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445838ad0275_54084058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42761db885a1629c3bded376fcf3ded9b2f43587' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl' => 2,
  ),
),false)) {
function content_66445838ad0275_54084058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('customer','sign_in','sign_in','customer','sign_in','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-new-product-review-customer">
    <div class="ty-product-review-new-product-review-customer__header">
        <label class="ty-product-review-new-product-review-customer__title ty-strong cm-required"
            data-ca-product-review="newProductReviewCustomerTitle"
        >
            <?php echo $_smarty_tpl->__("customer");?>

        </label>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'but_href'=>fn_url("product_reviews.get_user_login_form?return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['post_redirect_url']->value)))),'but_text'=>$_smarty_tpl->__("sign_in"),'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>"new_product_review_post_login_form_popup",'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-product-review-write-product-review-button ty-btn__secondary",'but_rel'=>"nofollow"), 0, false);
?>
        <?php }?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0, false);
?>
</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-new-product-review-customer">
    <div class="ty-product-review-new-product-review-customer__header">
        <label class="ty-product-review-new-product-review-customer__title ty-strong cm-required"
            data-ca-product-review="newProductReviewCustomerTitle"
        >
            <?php echo $_smarty_tpl->__("customer");?>

        </label>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'but_href'=>fn_url("product_reviews.get_user_login_form?return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['post_redirect_url']->value)))),'but_text'=>$_smarty_tpl->__("sign_in"),'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>"new_product_review_post_login_form_popup",'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-product-review-write-product-review-button ty-btn__secondary",'but_rel'=>"nofollow"), 0, true);
?>
        <?php }?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0, true);
?>
</section>
<?php }
}
}
