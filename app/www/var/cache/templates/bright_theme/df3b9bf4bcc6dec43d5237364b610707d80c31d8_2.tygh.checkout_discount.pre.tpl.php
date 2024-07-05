<?php
/* Smarty version 4.1.1, created on 2024-07-04 08:00:13
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/checkout_discount.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66862c5dc7a990_36169074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3b9bf4bcc6dec43d5237364b610707d80c31d8' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/checkout_discount.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66862c5dc7a990_36169074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('points_in_use','points_lowercase','points','points_in_use','points_lowercase','points'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <li class="ty-cart-statistic__item">
        <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0, false);
?></span>
    </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <li class="ty-cart-statistic__item">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-cart-statistic__value">+<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </li>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/checkout_discount.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/checkout_discount.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <li class="ty-cart-statistic__item">
        <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0, true);
?></span>
    </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <li class="ty-cart-statistic__item">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-cart-statistic__value">+<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </li>
<?php }
}
}
}
