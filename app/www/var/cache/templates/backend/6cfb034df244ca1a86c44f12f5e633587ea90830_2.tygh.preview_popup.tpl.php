<?php
/* Smarty version 4.1.1, created on 2024-07-11 13:36:55
  from '/app/www/design/backend/templates/addons/newsletters/views/newsletters/components/preview_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fb5c7ee5241_51522192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cfb034df244ca1a86c44f12f5e633587ea90830' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/newsletters/components/preview_popup.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fb5c7ee5241_51522192 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('preview'));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title><?php echo $_smarty_tpl->__("preview");?>
</title>
</head>

<body class="nobackground">
<div id="content"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>

</div>

</body>
</html><?php }
}
