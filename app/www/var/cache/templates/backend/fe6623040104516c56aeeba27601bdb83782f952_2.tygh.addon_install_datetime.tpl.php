<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:28:20
  from '/app/www/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e724929f23_19856428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6623040104516c56aeeba27601bdb83782f952' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e724929f23_19856428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['install_datetime'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
