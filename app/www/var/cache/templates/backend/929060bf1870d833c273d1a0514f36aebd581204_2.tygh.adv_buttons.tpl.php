<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:08:35
  from '/app/www/design/backend/templates/views/snippets/components/adv_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100a3f21aa0_18520512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929060bf1870d833c273d1a0514f36aebd581204' => 
    array (
      0 => '/app/www/design/backend/templates/views/snippets/components/adv_buttons.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_669100a3f21aa0_18520512 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet'));
if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->_assignInScope('return_url_escape', rawurlencode((string)$_smarty_tpl->tpl_vars['return_url']->value));?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_prefixVariable3,'link_text'=>(($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0, false);
}
}
}
