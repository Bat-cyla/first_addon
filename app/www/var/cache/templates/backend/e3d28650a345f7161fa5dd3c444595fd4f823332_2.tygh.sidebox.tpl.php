<?php
/* Smarty version 4.1.1, created on 2024-07-02 08:27:32
  from '/app/www/design/backend/templates/common/sidebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66838fc4aac438_71542362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d28650a345f7161fa5dd3c444595fd4f823332' => 
    array (
      0 => '/app/www/design/backend/templates/common/sidebox.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66838fc4aac438_71542362 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    </div>
    <hr />
<?php }
}
}
