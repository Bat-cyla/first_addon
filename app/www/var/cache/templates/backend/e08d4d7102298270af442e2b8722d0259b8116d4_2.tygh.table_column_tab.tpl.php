<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:08:36
  from '/app/www/design/backend/templates/views/snippets/components/table_column_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100a41aac89_22005823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08d4d7102298270af442e2b8722d0259b8116d4' => 
    array (
      0 => '/app/www/design/backend/templates/views/snippets/components/table_column_tab.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
  ),
),false)) {
function content_669100a41aac89_22005823 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','add_table_column','add_table_column','no_data'));
$_smarty_tpl->_assignInScope('can_update', fn_check_permissions('snippets','update','admin','POST'));
$_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("edit"));?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("view"));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "toolbar", null, null);?>
    <?php if (fn_check_permissions("documents","update","admin","POST")) {?>
        <div class="cm-tab-tools tab-tools" id="tools_snippet_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
_table_columns">
            <?php ob_start();
echo $_smarty_tpl->__("add_table_column");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_column",'text'=>$_prefixVariable4,'link_text'=>$_smarty_tpl->__("add_table_column"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update_table_column?snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)), 0, false);
?>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="btn-toolbar clearfix cm-toggle-button">
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'toolbar');?>

</div>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="table_columns_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal">

    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_table_columns_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" />

    <div class="items-container <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>cm-sortable<?php }?>" <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>data-ca-sortable-table="template_table_columns" data-ca-sortable-id-name="column_id"<?php }?> id="content_table_column_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['columns']->value) {?>
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['column']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['column']->value->getName(),'status'=>$_smarty_tpl->tpl_vars['column']->value->getStatus(),'href'=>"snippets.update_table_column?column_id=".((string)$_smarty_tpl->tpl_vars['column']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value),'object_id_name'=>"column_id",'table'=>"template_table_columns",'href_delete'=>"snippets.delete_table_column?column_id=".((string)$_smarty_tpl->tpl_vars['column']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value),'delete_target_id'=>"content_table_column_list_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()),'header_text'=>$_smarty_tpl->tpl_vars['column']->value->getName(),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['column']->value->getId()),'no_table'=>true,'draggable'=>true,'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'nostatus'=>!$_smarty_tpl->tpl_vars['can_update']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--content_table_column_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
--></div>
</form><?php }
}
