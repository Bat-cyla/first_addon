<?php
/* Smarty version 4.1.1, created on 2024-05-31 14:14:04
  from '/app/www/design/backend/templates/addons/store_locator/components/search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659b0fc68eed4_01776594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe81c25266d7325f06617b885b065d12f2a2827b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/components/search_form.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_6659b0fc68eed4_01776594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','rate_area','store_locator.any_rate_area','owner','store_locator.any','marketplace','city','admin_search_button'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="stores_search_form" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="sidebar-field">
                <label for="elm_rate_area"><?php echo $_smarty_tpl->__("rate_area");?>
</label>
                <select id="elm_rate_area" name="main_destination_id">
                    <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['main_destination_id'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("store_locator.any_rate_area");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinations']->value, 'rate_area', false, 'code');
$_smarty_tpl->tpl_vars['rate_area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['rate_area']->value) {
$_smarty_tpl->tpl_vars['rate_area']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['search']->value['main_destination_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_area']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="elm_owner"><?php echo $_smarty_tpl->__("owner");?>
</label>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("store_locator.any"),'predefined_variants'=>array("marketplace"=>$_smarty_tpl->__("marketplace"))), 0, false);
?>
                </div>
            <?php }?>
            <div class="sidebar-field">
                <label for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
                <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
        </div>
    </form>
</div><?php }
}
