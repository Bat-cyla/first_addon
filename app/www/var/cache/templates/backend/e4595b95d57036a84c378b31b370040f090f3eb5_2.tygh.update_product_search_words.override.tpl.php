<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:50
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_search_words.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66850532a96253_49685342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4595b95d57036a84c378b31b370040f090f3eb5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_product_search_words.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66850532a96253_49685342 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("search_words")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
