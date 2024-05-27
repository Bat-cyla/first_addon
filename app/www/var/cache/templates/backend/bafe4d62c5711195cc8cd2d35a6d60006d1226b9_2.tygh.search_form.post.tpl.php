<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:26
  from '/app/www/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b02be6b09_27386312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bafe4d62c5711195cc8cd2d35a6d60006d1226b9' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66547b02be6b09_27386312 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }
}
}
