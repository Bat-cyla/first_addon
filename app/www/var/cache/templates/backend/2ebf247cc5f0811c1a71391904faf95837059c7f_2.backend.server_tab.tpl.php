<?php
/* Smarty version 4.1.1, created on 2024-06-24 10:57:22
  from '/app/www/design/backend/templates/views/debugger/components/server_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667926e29d45c4_40128894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebf247cc5f0811c1a71391904faf95837059c7f' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/server_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667926e29d45c4_40128894 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php }
}
