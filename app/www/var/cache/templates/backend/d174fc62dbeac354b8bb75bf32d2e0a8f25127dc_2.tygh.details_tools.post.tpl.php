<?php
/* Smarty version 4.1.1, created on 2024-05-28 13:55:37
  from '/app/www/design/backend/templates/addons/rus_russianpost/hooks/orders/details_tools.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655b8290c9df2_04859986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd174fc62dbeac354b8bb75bf32d2e0a8f25127dc' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_russianpost/hooks/orders/details_tools.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655b8290c9df2_04859986 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('rus_post_blank.li.print'));
if ($_smarty_tpl->tpl_vars['is_order_delivered_by_russian_post']->value) {?>
    <li class="divider"></li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("rus_post_blank.li.print"),'href'=>"rus_post_blank.edit?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), true);?>
</li>
<?php }
}
}
