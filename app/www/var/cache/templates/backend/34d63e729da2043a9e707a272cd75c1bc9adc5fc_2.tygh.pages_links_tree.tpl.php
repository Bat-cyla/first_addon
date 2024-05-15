<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:30
  from '/app/www/design/backend/templates/views/pages/components/pages_links_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e32679e43_99766282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34d63e729da2043a9e707a272cd75c1bc9adc5fc' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/components/pages_links_tree.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/pages/components/pages_links_tree.tpl' => 2,
  ),
),false)) {
function content_66446e32679e43_99766282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages_tree']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('shift', 14*(($tmp = $_smarty_tpl->tpl_vars['page']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('expanded', smarty_modifier_in_array($_smarty_tpl->tpl_vars['page']->value['page_id'],$_smarty_tpl->tpl_vars['runtime']->value['active_page_ids']));?>
    <?php $_smarty_tpl->_assignInScope('comb_id', "page_".((string)$_smarty_tpl->tpl_vars['page']->value['page_id']));?>
    
    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == 'rtl') {?>
        <?php $_smarty_tpl->_assignInScope('direction', 'right');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('direction', 'left');?>
    <?php }?>
    
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value['active']) {?>class="active"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['search']->value['paginate']) {?>style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
    <div class="link"><?php if ($_smarty_tpl->tpl_vars['page']->value['subpages']) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if ($_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-right"> </span></span><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></span><?php }?><a href="<?php echo htmlspecialchars((string) fn_url("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['status'] == "N") {?>class="manage-root-item-disabled"<?php }?> id="page_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['page']->value['subpages']) {?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></div>
    </li>
<?php if ($_smarty_tpl->tpl_vars['page']->value['subpages']) {?>
    <li class="<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pages_tree'=>$_smarty_tpl->tpl_vars['page']->value['subpages'],'parent_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id']), 0, true);
?>
    </li>
<?php }?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
