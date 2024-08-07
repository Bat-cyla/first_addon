<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:38:02
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644584a5c8a97_03015566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed41a0c7559b2dc2a861397cc957b6fd8dc4ebee' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl' => 2,
  ),
),false)) {
function content_6644584a5c8a97_03015566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <article class="ty-product-review-post">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, false);
?>

        <section class="ty-product-review-post__content ty-dialog-caret">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:post_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:post_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, false);
?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:post_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </section>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, false);
?>
    </article>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <article class="ty-product-review-post">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>

        <section class="ty-product-review-post__content ty-dialog-caret">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:post_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:post_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:post_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </section>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>
    </article>
<?php }
}
}
}
