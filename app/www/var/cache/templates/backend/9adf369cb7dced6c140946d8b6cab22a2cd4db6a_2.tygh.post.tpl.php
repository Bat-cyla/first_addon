<?php
/* Smarty version 4.1.1, created on 2024-05-31 12:41:36
  from '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66599b50a397c5_52952694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9adf369cb7dced6c140946d8b6cab22a2cd4db6a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/review_with_photo_icon.tpl' => 1,
    'tygh:common/content_more.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/customer.tpl' => 1,
  ),
),false)) {
function content_66599b50a397c5_52952694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review'));
?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_product', (($tmp = $_smarty_tpl->tpl_vars['show_product']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('NAME_CHARACTERS_THRESHOLD', 30);?>

    <section>

        <section>

            <header class="flex flex-wrap spaced-child">

                                <a href="<?php echo htmlspecialchars((string) fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("product_reviews.review");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>

                </a>
                
                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['rating_value']->value,'link'=>fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value))), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/review_with_photo_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_images'=>$_smarty_tpl->tpl_vars['product_review_images']->value,'link'=>true), 0, false);
?>

            </header>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_message_types']->value, 'message_type');
$_smarty_tpl->tpl_vars['message_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message_type']->value) {
$_smarty_tpl->tpl_vars['message_type']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product_review']->value['message'][$_smarty_tpl->tpl_vars['message_type']->value], ENT_QUOTES, 'UTF-8', true)),'meta'=>"cs-content-more__text--".((string)$_smarty_tpl->tpl_vars['message_type']->value)), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_images'=>$_smarty_tpl->tpl_vars['product_review_images']->value), 0, false);
?>

        </section>

                <?php if ($_smarty_tpl->tpl_vars['product_review_reply']->value) {?>
            <div class="shift-left">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "prefix", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_reply'=>$_smarty_tpl->tpl_vars['product_review_reply']->value), 0, false);
?>:
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product_review_reply']->value['reply'], ENT_QUOTES, 'UTF-8', true)),'prefix'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'prefix'),'meta'=>"cs-content-more__text--review-reply "), 0, true);
?>
            </div>
        <?php }?>

        <footer>
            <small class="dashed-child">

                                <?php if ($_smarty_tpl->tpl_vars['show_product']->value && $_smarty_tpl->tpl_vars['product']->value['product']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php }?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value), 0, false);
?>

            </small>
        </footer>

    </section>
<?php }
}
}
