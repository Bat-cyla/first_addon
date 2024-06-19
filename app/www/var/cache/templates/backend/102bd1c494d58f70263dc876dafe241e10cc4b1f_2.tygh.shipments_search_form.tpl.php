<?php
/* Smarty version 4.1.1, created on 2024-06-18 14:40:14
  from '/app/www/design/backend/templates/views/shipments/components/shipments_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6671721e0c63f1_08750859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102bd1c494d58f70263dc876dafe241e10cc4b1f' => 
    array (
      0 => '/app/www/design/backend/templates/views/shipments/components/shipments_search_form.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 2,
    'tygh:common/products_to_search.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6671721e0c63f1_08750859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','customer','order_id','status','company','shipment_date','order_date','shipped_products'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="shipments_search_form" method="get">

<?php if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
<div class="sidebar-field">
    <label for="elm_cname"><?php echo $_smarty_tpl->__("customer");?>
:</label>
    <div class="break">
        <input type="text" name="cname" id="elm_cname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'UTF-8');?>
" size="30"/>
    </div>
</div>

<div class="sidebar-field">
    <label for="elm_order_id"><?php echo $_smarty_tpl->__("order_id");?>
:</label>
    <input type="text" name="order_id" id="elm_order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="15"/>
</div>

<div class="sidebar-field">
    <label for="elm_status"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <select name="status" id="status">
        <option value="">--</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipment_statuses']->value, 'name', false, 'status');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == $_smarty_tpl->tpl_vars['status']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
    <div class="controls">
        <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
    </div>
</div>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("shipment_date");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['shipment_period'],'form_name'=>"shipments_search_form",'prefix'=>"shipment_"), 0, false);
?>
        </div>
    </div>

    <div class="control-group form-horizontal">
        <label class="control-label"><?php echo $_smarty_tpl->__("order_date");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['order_period'],'form_name'=>"shipments_search_form",'prefix'=>"order_"), 0, true);
?>
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("shipped_products");?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"shipments"), 0, false);
?>
</form>

</div>
<?php }
}
