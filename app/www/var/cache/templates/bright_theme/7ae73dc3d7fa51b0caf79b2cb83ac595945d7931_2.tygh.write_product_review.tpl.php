<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:09:56
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/write_product_review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2d48f1c60_36945141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae73dc3d7fa51b0caf79b2cb83ac595945d7931' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/write_product_review.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl' => 2,
  ),
),false)) {
function content_6656e2d48f1c60_36945141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review','product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-write-review">

    <h4 class="ty-product-review-write-review__title">
        <?php echo $_smarty_tpl->__("product_reviews.review_this_product");?>

    </h4>

    <div class="ty-product-review-write-review__description">
        <p><?php echo $_smarty_tpl->__("product_reviews.review_this_product_description");?>
</p>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'but_meta'=>"ty-btn__secondary"), 0, false);
?>

</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-write-review">

    <h4 class="ty-product-review-write-review__title">
        <?php echo $_smarty_tpl->__("product_reviews.review_this_product");?>

    </h4>

    <div class="ty-product-review-write-review__description">
        <p><?php echo $_smarty_tpl->__("product_reviews.review_this_product_description");?>
</p>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'but_meta'=>"ty-btn__secondary"), 0, true);
?>

</section>
<?php }
}
}
