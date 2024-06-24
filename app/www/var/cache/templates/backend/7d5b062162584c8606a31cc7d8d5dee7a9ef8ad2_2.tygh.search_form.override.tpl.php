<?php
/* Smarty version 4.1.1, created on 2024-06-19 10:44:13
  from '/app/www/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66728c4d9b8dc4_36690974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d5b062162584c8606a31cc7d8d5dee7a9ef8ad2' => 
    array (
      0 => '/app/www/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66728c4d9b8dc4_36690974 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cart','wishlist'));
?>
<label for="cb_product_type_c"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c'] == "Y" || $_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;"/>
<?php echo $_smarty_tpl->__("cart");?>
</label>

<label for="cb_product_type_w"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_w'] == "Y" || $_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_w" id="cb_product_type_w" onclick="if (!this.checked) document.getElementById('cb_product_type_c').checked = true;"  />
<?php echo $_smarty_tpl->__("wishlist");?>
</label><?php }
}
