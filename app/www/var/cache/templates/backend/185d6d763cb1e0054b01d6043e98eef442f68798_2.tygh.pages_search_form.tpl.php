<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:18
  from '/app/www/design/backend/templates/views/pages/components/pages_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e266f2140_31838893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185d6d763cb1e0054b01d6043e98eef442f68798' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/components/pages_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/pages/picker.tpl' => 1,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66446e266f2140_31838893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','find_results_with','type','parent_page','all_pages','all_pages','search_in','page_name','description','subpages','status','active','hidden','disabled'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
<div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="pages_search_form" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="get_tree" value="" />
<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);
echo $_smarty_tpl->tpl_vars['extra']->value;?>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("find_results_with");?>
</label>
    <input type="text" name="q" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['page_types']->value) > 1) {?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("type");?>
</label>
    <select class="small" name="page_type">
        <option value="">--</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_types']->value, 'p', false, 't');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['page_type'] == $_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p']->value['name']);?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_types']->value, 'p', false, 't');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <input type="hidden" name="page_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("parent_page");?>
</label>
    <?php if (fn_show_picker("pages",(defined('PAGE_THRESHOLD') ? constant('PAGE_THRESHOLD') : null))) {?>

        <?php if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_url', "&page_type=".((string)$_smarty_tpl->tpl_vars['search']->value['page_type']));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_page",'input_name'=>"parent_id",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['parent_id'],'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_pages"),'extra'=>'','no_container'=>true,'prepend'=>true), 0, false);
?>
    <?php } else { ?>
        <select name="parent_id">
            <option value="">- <?php echo $_smarty_tpl->__("all_pages");?>
 -</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent_pages']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_id'] == $_smarty_tpl->tpl_vars['p']->value['page_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['p']->value['level']),smarty_modifier_truncate(htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['page'], ENT_QUOTES, 'UTF-8', true),35,"...",true));?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
<div class="group">
    <label><?php echo $_smarty_tpl->__("search_in");?>
</label>
    <div class="table-wrapper">
        <table width="100%">
        <tr>
            <td class="select-field"><label for="pname" class="checkbox"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pname'] == "Y") {?>checked="checked"<?php }?> name="pname" id="pname"/><?php echo $_smarty_tpl->__("page_name");?>
</label></td>
            <td>&nbsp;&nbsp;&nbsp;</td>

            <td class="select-field"><label class="checkbox" for="pdescr"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pdescr'] == "Y") {?>checked="checked"<?php }?> name="pdescr" id="pdescr" /><?php echo $_smarty_tpl->__("description");?>
</label></td>
            <td>&nbsp;&nbsp;&nbsp;</td>

            <td class="select-field"><label class="checkbox" for="subpages"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['subpages'] == "Y") {?>checked="checked"<?php }?> name="subpages" id="subpages" /><?php echo $_smarty_tpl->__("subpages");?>
</label></td>
        </tr>
        </table>
    </div>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
        <div class="controls">
            <select name="status">
                <option value="">--</option>
                <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="H" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
    </div>

    <?php $_smarty_tpl->_assignInScope('random_value', rand());?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"company_id_".((string)$_smarty_tpl->tpl_vars['random_value']->value)), 0, false);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>$_smarty_tpl->tpl_vars['view_type']->value,'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}
