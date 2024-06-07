<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:37:44
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445838b22ea5_92932253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9123d45c63ef72a4a781c56c42128c93651841d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66445838b22ea5_92932253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.hide_name','product_reviews.terms_n_conditions_name','product_reviews.terms_n_conditions','product_reviews.terms_and_conditions_content','product_reviews.moderation_rules','product_reviews.hide_name','product_reviews.terms_n_conditions_name','product_reviews.terms_n_conditions','product_reviews.terms_and_conditions_content','product_reviews.moderation_rules'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-new-product-review-additional">
    <div class="ty-control-group ty-product-review-new-product-review-additional__write-anonymously">
        <label class="ty-product-review-new-product-review-additional__write-anonymously-label">
            <input type="checkbox"
                name="product_review_data[is_anon]"
                value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-new-product-review-additional__write-anonymously-checkbox"
                data-ca-product-review="newProductReviewAdditionalWriteAnonymouslyCheckbox"
            >
            <span class="ty-product-review-new-product-review-additional__write-anonymously-text">
                <?php echo $_smarty_tpl->__("product_reviews.hide_name");?>

            </span>
        </label>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__terms-and-conditions">
        <div class="cm-field-container ty-product-review-new-product-review-additional__terms-and-conditions-container">
            <label class="cm-required ty-product-review-new-product-review-additional__terms-and-conditions-label"
                for="product_reviews_terms_and_conditions"
            >
                <input type="checkbox"
                    id="product_reviews_terms_and_conditions"
                    name="product_review_data[terms]"
                    value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-review-new-product-review-additional__terms-and-conditions-checkbox"
                >
                <span class="ty-product-review-new-product-review-additional__terms-and-conditions-text">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_reviews_terms_link", null, null);?>
                        <a id="sw_product_reviews_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link">
                            <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions_name");?>

                        </a>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions",array("[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_reviews_terms_link')));?>

                </span>
            </label>


            <div class="hidden" id="product_reviews_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("product_reviews.terms_and_conditions_content");?>

            </div>
        </div>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__moderation-rules">
        <small class="ty-product-review-new-product-review-additional__moderation-rules-text ty-muted">
            <?php echo $_smarty_tpl->__("product_reviews.moderation_rules");?>

        </small>
    </div>

</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-new-product-review-additional">
    <div class="ty-control-group ty-product-review-new-product-review-additional__write-anonymously">
        <label class="ty-product-review-new-product-review-additional__write-anonymously-label">
            <input type="checkbox"
                name="product_review_data[is_anon]"
                value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-new-product-review-additional__write-anonymously-checkbox"
                data-ca-product-review="newProductReviewAdditionalWriteAnonymouslyCheckbox"
            >
            <span class="ty-product-review-new-product-review-additional__write-anonymously-text">
                <?php echo $_smarty_tpl->__("product_reviews.hide_name");?>

            </span>
        </label>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__terms-and-conditions">
        <div class="cm-field-container ty-product-review-new-product-review-additional__terms-and-conditions-container">
            <label class="cm-required ty-product-review-new-product-review-additional__terms-and-conditions-label"
                for="product_reviews_terms_and_conditions"
            >
                <input type="checkbox"
                    id="product_reviews_terms_and_conditions"
                    name="product_review_data[terms]"
                    value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-review-new-product-review-additional__terms-and-conditions-checkbox"
                >
                <span class="ty-product-review-new-product-review-additional__terms-and-conditions-text">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_reviews_terms_link", null, null);?>
                        <a id="sw_product_reviews_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link">
                            <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions_name");?>

                        </a>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions",array("[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_reviews_terms_link')));?>

                </span>
            </label>


            <div class="hidden" id="product_reviews_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("product_reviews.terms_and_conditions_content");?>

            </div>
        </div>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__moderation-rules">
        <small class="ty-product-review-new-product-review-additional__moderation-rules-text ty-muted">
            <?php echo $_smarty_tpl->__("product_reviews.moderation_rules");?>

        </small>
    </div>

</section>
<?php }
}
}
