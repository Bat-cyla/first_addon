<?php
/* Smarty version 4.1.1, created on 2024-05-31 13:29:25
  from '/app/www/design/backend/templates/addons/hybrid_auth/components/callback_url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659a685078597_63912140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cfe8209713ce46c14f1a4c12f8026158fc37965' => 
    array (
      0 => '/app/www/design/backend/templates/addons/hybrid_auth/components/callback_url.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/widget_copy.tpl' => 2,
  ),
),false)) {
function content_6659a685078597_63912140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('protocol', $_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront'] === smarty_modifier_enum("YesNo::YES") ? "https" : "http");
$_smarty_tpl->_assignInScope('provider_name', $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['provider']);
$_smarty_tpl->_assignInScope('provider', $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]);
if ($_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids']) {?>
    <?php $_smarty_tpl->_assignInScope('storefront_ids', $_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('storefront_ids', $_smarty_tpl->tpl_vars['all_storefront_ids']->value);
}
if ($_smarty_tpl->tpl_vars['callback_urls']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callback_urls']->value, 'callback_url');
$_smarty_tpl->tpl_vars['callback_url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['callback_url']->value) {
$_smarty_tpl->tpl_vars['callback_url']->do_else = false;
?>
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_code_text'=>$_smarty_tpl->tpl_vars['callback_url']->value), 0, true);
?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['storefront_ids']->value, 'storefront_id');
$_smarty_tpl->tpl_vars['storefront_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront_id']->value) {
$_smarty_tpl->tpl_vars['storefront_id']->do_else = false;
?>
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_code_text'=>fn_url(((($tmp = $_smarty_tpl->tpl_vars['callback_url']->value ?? null)===null||$tmp==='' ? "auth.process?hauth_done=".((string)$_smarty_tpl->tpl_vars['provider_name']->value)."&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value) ?? null : $tmp)),(smarty_modifier_enum("SiteArea::STOREFRONT")),$_smarty_tpl->tpl_vars['protocol']->value)), 0, true);
?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
