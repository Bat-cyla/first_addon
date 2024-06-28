<?php
/* Smarty version 4.1.1, created on 2024-06-26 16:35:47
  from '/app/www/design/backend/templates/addons/rus_boxberry/hooks/orders/customer_shot_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667c1933794bf8_81213565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '096d61430d15857da5a6e452dec96c8853916c83' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_boxberry/hooks/orders/customer_shot_info.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_667c1933794bf8_81213565 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.pickuppoint'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, NULL, 'f_shipp', array (
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['module'] == 'rus_boxberry' && $_smarty_tpl->tpl_vars['shipping']->value['pickup_data']) {?>
        <div class="well orders-right-pane form-horizontal">
            <div class="control-group">
                <div class="control-label">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("rus_boxberry.pickuppoint")), 0, true);
?>
                </div>
            </div>
            <p class="strong">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['name'], ENT_QUOTES, 'UTF-8');?>

            </p>
            <p class="muted">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['full_address'], ENT_QUOTES, 'UTF-8');?>
<br />
                <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi>
            </p>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
