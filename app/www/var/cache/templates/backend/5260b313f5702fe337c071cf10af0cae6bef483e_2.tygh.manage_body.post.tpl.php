<?php
/* Smarty version 4.1.1, created on 2024-05-20 11:49:30
  from '/app/www/design/backend/templates/addons/first_addon/hooks/products/manage_body.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664b0e9a8de6b1_26587196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5260b313f5702fe337c071cf10af0cae6bef483e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/first_addon/hooks/products/manage_body.post.tpl',
      1 => 1716194967,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b0e9a8de6b1_26587196 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name'));
?>
<td class="product-name-column wrap-word" data-th="<?php echo $_smarty_tpl->__("name");?>
">
    <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][my_setting]"
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['my_setting'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-hidden span2" />

</td><?php }
}
