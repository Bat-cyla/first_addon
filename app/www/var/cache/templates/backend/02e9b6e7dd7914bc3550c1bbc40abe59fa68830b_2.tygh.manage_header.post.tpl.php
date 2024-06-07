<?php
/* Smarty version 4.1.1, created on 2024-06-04 09:36:31
  from '/app/www/design/backend/templates/addons/first_addon/hooks/profiles/manage_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665eb5efef6684_24632950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e9b6e7dd7914bc3550c1bbc40abe59fa68830b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/first_addon/hooks/profiles/manage_header.post.tpl',
      1 => 1717482990,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665eb5efef6684_24632950 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('reports_parameter_2'));
?>

<th style="max-width: 80px" >
        <a class="cm-ajax"
           href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=orders_count&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
           data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
            <?php echo $_smarty_tpl->__("reports_parameter_2");?>

            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "type") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
        </a>
</th><?php }
}
