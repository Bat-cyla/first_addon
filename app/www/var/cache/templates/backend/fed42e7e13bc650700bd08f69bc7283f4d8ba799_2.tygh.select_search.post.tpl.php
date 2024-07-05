<?php
/* Smarty version 4.1.1, created on 2024-07-02 11:46:55
  from '/app/www/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683be7fe278c3_83451987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed42e7e13bc650700bd08f69bc7283f4d8ba799' => 
    array (
      0 => '/app/www/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683be7fe278c3_83451987 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }
}
