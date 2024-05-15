<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:29:42
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66444846e381f5_39333649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd203eb679b7f16b0a6251ef96de9bff0a648eefa' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66444846e381f5_39333649 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan_short'));
?>
<th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }
}
