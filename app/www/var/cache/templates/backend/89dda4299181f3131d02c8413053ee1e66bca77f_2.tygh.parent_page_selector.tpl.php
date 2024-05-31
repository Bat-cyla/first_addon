<?php
/* Smarty version 4.1.1, created on 2024-05-31 12:41:02
  from '/app/www/design/backend/templates/views/pages/components/parent_page_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66599b2e6b32b2_79262751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dda4299181f3131d02c8413053ee1e66bca77f' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/components/parent_page_selector.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/pages/picker.tpl' => 1,
  ),
),false)) {
function content_66599b2e6b32b2_79262751 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('parent_page','root_level','root_page'));
$_smarty_tpl->_assignInScope('show_label', (($tmp = $_smarty_tpl->tpl_vars['show_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
<div class="control-group" id="parent_page_selector">

    <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
        <label class="control-label cm-required" for="elm_parent_id"><?php echo $_smarty_tpl->__("parent_page");?>
:</label>
    <?php }?>

    <div class="controls">
        <?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>

            <?php if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>
            <?php $_smarty_tpl->_assignInScope('extra_url', "&get_tree=multi_level&page_type=".((string)$_smarty_tpl->tpl_vars['page_type']->value));?>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_page",'input_name'=>"page_data[parent_id]",'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['page_data']->value['parent_id'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("root_level"),'display_input_id'=>"elm_parent_id",'except_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id'],'prepend'=>true), 0, false);
?>
        <?php } else { ?>
            <select 
                name="page_data[parent_id]" 
                id="elm_parent_id"
                <?php if ($_smarty_tpl->tpl_vars['bulkedit_changer']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bulkedit_changer']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>
            >
                <option value="0">- <?php echo $_smarty_tpl->__("root_page");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent_pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <?php if ((strpos($_smarty_tpl->tpl_vars['page']->value['id_path'],((string)$_smarty_tpl->tpl_vars['page_data']->value['id_path'])."/") === false && $_smarty_tpl->tpl_vars['page_data']->value['page_id'] != $_smarty_tpl->tpl_vars['page']->value['page_id']) || $_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id'] == $_REQUEST['parent_id'] || $_smarty_tpl->tpl_vars['page']->value['page_id'] == $_smarty_tpl->tpl_vars['page_data']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['page']->value['level']),htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php }?>
    </div>
<!--parent_page_selector--></div>
<?php }
}
