<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:26
  from '/app/www/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b02bf5b77_48786681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598aed5677c84e171710721ebee8c073ced9dbe4' => 
    array (
      0 => '/app/www/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66547b02bf5b77_48786681 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }
}
