<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:37:44
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664458387d7c86_84117747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100e1e3cd5fb19859ee3acafc87df28ee97ab651' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rate.tpl' => 2,
  ),
),false)) {
function content_664458387d7c86_84117747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.your_rating','product_reviews.your_rating'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0, false);
?>
    </div>
</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0, true);
?>
    </div>
</section>
<?php }
}
}
