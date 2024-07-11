<?php
/* Smarty version 4.1.1, created on 2024-07-10 17:16:47
  from '/app/www/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e97cfd69159_10217414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406da2f546f3c996c29f6df382176412b22b3027' => 
    array (
      0 => '/app/www/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e97cfd69159_10217414 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('wishlist_short'));
if ($_smarty_tpl->tpl_vars['customer']->value['wishlist_products']) {?>
    <div class="muted"><?php echo $_smarty_tpl->__("wishlist_short");?>
: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['customer']->value['wishlist_products'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
