<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:28:48
  from '/app/www/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e7070aee120_15650537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d8fe384b60cfb89313e7fbc524abc2cf88ef0e' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e7070aee120_15650537 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.buy'));
if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <div>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_page'], ENT_QUOTES, 'UTF-8');?>
" class="btn" target="_blank">
            <?php echo $_smarty_tpl->__("cscart_marketplace.buy");?>

        </a>
    </div>
<?php }
}
}
