<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:26
  from '/app/www/design/backend/templates/views/products/components/context_menu/edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b0265e525_42121874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383c154e4b534bbf89a91acfb575b0442f908e89' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/context_menu/edit_selected.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66547b0265e525_42121874 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-products hidden-phone">
    <span class="bulk-edit__btn-content">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']), true);?>

    </span>
</li>
<?php }
}
