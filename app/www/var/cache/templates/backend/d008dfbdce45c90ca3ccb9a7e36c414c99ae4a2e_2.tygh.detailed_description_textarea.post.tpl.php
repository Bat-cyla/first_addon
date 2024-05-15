<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:29
  from '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e31853171_80463204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd008dfbdce45c90ca3ccb9a7e36c414c99ae4a2e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66446e31853171_80463204 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }
}
}
