<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:27:01
  from '/app/www/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e7005c00c56_12711303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2472b58119cdcc426630dc090c77df0fe502f2c6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668e7005c00c56_12711303 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="help-center-popup-btn-mobile"
    data-ca-help-center="popupBtnMobile"
    data-ca-help-center-counter="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help_center_counter']->value, ENT_QUOTES, 'UTF-8');?>
"
><?php echo $_smarty_tpl->__("help_center.growth_center");?>
</button>
<?php }
}
