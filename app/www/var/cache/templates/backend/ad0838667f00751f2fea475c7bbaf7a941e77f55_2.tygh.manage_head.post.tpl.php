<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:25
  from '/app/www/design/backend/templates/addons/first_addon/hooks/products/manage_head.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b01d63b56_86293083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad0838667f00751f2fea475c7bbaf7a941e77f55' => 
    array (
      0 => '/app/www/design/backend/templates/addons/first_addon/hooks/products/manage_head.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66547b01d63b56_86293083 (Smarty_Internal_Template $_smarty_tpl) {
?><th width="10%" >
        <a class="cm-ajax"
                href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=my_setting&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                <?php echo $_smarty_tpl->__('my_setting');?>

                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "code") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
        </a>
</th>

<?php }
}
