<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:25:57
  from '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07d5cc75f8_53253107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd008dfbdce45c90ca3ccb9a7e36c414c99ae4a2e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f07d5cc75f8_53253107 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }
}
}
