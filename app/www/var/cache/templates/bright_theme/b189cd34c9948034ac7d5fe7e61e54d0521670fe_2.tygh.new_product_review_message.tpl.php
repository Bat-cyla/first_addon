<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:37:44
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445838a84bb9_22158511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b189cd34c9948034ac7d5fe7e61e54d0521670fe' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl' => 6,
  ),
),false)) {
function content_66445838a84bb9_22158511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment','product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('is_advanced', ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced"));?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required cm-trim
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0, true);
?>

    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_prefixVariable3." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0, true);
?>

</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('is_advanced', ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced"));?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required cm-trim
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]"), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0, true);
?>

    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_prefixVariable4." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0, true);
?>

</section>
<?php }
}
}
