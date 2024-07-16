<?php
/* Smarty version 4.1.1, created on 2024-07-15 08:06:46
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6694ae66dea318_34838991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f035bd4de5b4a1789a4b1c641064d12fa0f00c58' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' => 2,
  ),
),false)) {
function content_6694ae66dea318_34838991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

    </section>
<?php }
}
}
}
