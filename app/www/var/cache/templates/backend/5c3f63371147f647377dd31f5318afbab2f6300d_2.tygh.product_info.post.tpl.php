<?php
/* Smarty version 4.1.1, created on 2024-05-29 09:20:55
  from '/app/www/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656c947544b52_38043097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c3f63371147f647377dd31f5318afbab2f6300d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656c947544b52_38043097 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price'] && $_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }
}
