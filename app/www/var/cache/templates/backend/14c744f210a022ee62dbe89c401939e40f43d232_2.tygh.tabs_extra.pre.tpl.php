<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:59
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4f103379_78256652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c744f210a022ee62dbe89c401939e40f43d232' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4f103379_78256652 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?> <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "variations") {?>hidden<?php }?>" id="content_variations"></div><?php }
}