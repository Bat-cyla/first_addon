<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:25:57
  from '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07d5bf7d47_72136518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b42520530bf8e79f8cbe472255c3aea59aaf1a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f07d5bf7d47_72136518 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }
}
}
