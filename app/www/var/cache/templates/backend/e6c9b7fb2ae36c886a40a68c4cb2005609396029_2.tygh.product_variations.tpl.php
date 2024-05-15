<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:47:23
  from '/app/www/design/backend/templates/addons/product_reviews/settings/product_variations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445a7b5f8a12_64396664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c9b7fb2ae36c886a40a68c4cb2005609396029' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/settings/product_variations.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66445a7b5f8a12_64396664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.split_reviews_for_variations_as_separate_products'));
if ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <div class="control-group setting-wide product_reviews">
        <label for="split_reviews_for_variations_as_separate_products" class="control-label ">
            <?php echo $_smarty_tpl->__("product_reviews.split_reviews_for_variations_as_separate_products");?>
:
        </label>

        <div class="controls">
            <input type="hidden" name="split_reviews_for_variations_as_separate_products" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
            <input id="split_reviews_for_variations_as_separate_products"
                   name="split_reviews_for_variations_as_separate_products"
                   type="checkbox"
                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['split_reviews_for_variations_as_separate_products']->value === smarty_modifier_enum("YesNo::YES")) {?>
                       checked="checked"
                   <?php }?>
            >
        </div>
    </div>
<?php }
}
}
