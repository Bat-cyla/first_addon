<?php
/* Smarty version 4.1.1, created on 2024-07-10 17:16:47
  from '/app/www/design/backend/templates/addons/wishlist/hooks/cart/products_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e97cfeaec40_43931708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e1a8c0d96fabcfd1227c8d40751cb056dd577e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/wishlist/hooks/cart/products_content.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e97cfeaec40_43931708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('wishlist_products','wishlist_products','deleted_product'));
$_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['wishlist_products']->value);
$_smarty_tpl->_assignInScope('show_price', false);
$_smarty_tpl->_assignInScope('wishlist_products_js_id', "wishlist_products_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));
if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('wishlist_products_js_id', ((string)$_smarty_tpl->tpl_vars['wishlist_products_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));
}?>
<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['customer']->value['user_id'] == $_smarty_tpl->tpl_vars['sl_user_id']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_products']->value) {?>
    <h4 class="mobile-visible"><?php echo $_smarty_tpl->__("wishlist_products");?>
</h4>
    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-condensed table--relative table-responsive table-responsive-w-titles">
            <thead>
                <tr class="no-hover">
                    <th><?php echo $_smarty_tpl->__("wishlist_products");?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:product_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:product_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['extra']['parent']) {?>
                            <tr>
                                <td data-th="&nbsp;">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['item_type'] == "P") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->__("deleted_product");?>

                                    <?php }?>
                                <?php }?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:products_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:products_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:products_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                            </tr>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:product_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php }
}?>
<!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
