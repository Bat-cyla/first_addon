<?php
/* Smarty version 4.1.1, created on 2024-06-05 09:21:32
  from '/app/www/design/backend/templates/views/sync_data/components/sync_provider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666003ecc05605_02339347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f19b26fb572fa839665e96aa9c95868604faf938' => 
    array (
      0 => '/app/www/design/backend/templates/views/sync_data/components/sync_provider.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666003ecc05605_02339347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('never','nothing_sign','nothing_sign'));
$_smarty_tpl->_assignInScope('allow_manage', fn_check_permissions("sync_data","update","admin","GET",array("sync_provider_id"=>$_smarty_tpl->tpl_vars['provider_id']->value)));
if ($_smarty_tpl->tpl_vars['allow_manage']->value) {?>
    <tr>
        <td><a href="<?php echo htmlspecialchars((string) fn_url("sync_data.update?sync_provider_id=".((string)$_smarty_tpl->tpl_vars['provider_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['last_sync_timestamp'])) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_sync_info']->value['last_sync_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("never");
}?></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['status'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['status'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("nothing_sign");
}?></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_url'])) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_name'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("nothing_sign");
}?></td>
    </tr>
<?php }
}
}
