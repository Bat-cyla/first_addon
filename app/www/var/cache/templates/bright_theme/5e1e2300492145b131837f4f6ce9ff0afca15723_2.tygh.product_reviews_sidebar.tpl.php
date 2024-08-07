<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:09:56
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2d48c7ee6_54418510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1e2300492145b131837f4f6ce9ff0afca15723' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl' => 2,
  ),
),false)) {
function content_6656e2d48c7ee6_54418510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<aside class="ty-product-review-reviews-sidebar
    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        ty-product-review-reviews-sidebar--with-reviews    
    <?php }?>
    ">

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value), 0, false);
?>

</aside><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<aside class="ty-product-review-reviews-sidebar
    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        ty-product-review-reviews-sidebar--with-reviews    
    <?php }?>
    ">

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value), 0, true);
?>

</aside><?php }
}
}
