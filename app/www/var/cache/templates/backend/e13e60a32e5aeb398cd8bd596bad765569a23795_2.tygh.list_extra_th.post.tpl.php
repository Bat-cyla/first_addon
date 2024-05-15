<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:29:42
  from '/app/www/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66444846e2ace6_69300319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e13e60a32e5aeb398cd8bd596bad765569a23795' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66444846e2ace6_69300319 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating','vendor_rating.absolute_vendor_rating_short'));
?>
<th width="19%">
    <a class="cm-ajax"
       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=absolute_vendor_rating&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
       data-ca-target-id="pagination_contents"
       title="<?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating");?>
"
    >
        <?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating_short");?>

        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "absolute_vendor_rating") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
    </a>
</th>
<?php }
}
