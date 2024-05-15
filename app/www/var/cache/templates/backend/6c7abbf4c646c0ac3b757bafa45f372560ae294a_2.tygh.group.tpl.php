<?php
/* Smarty version 4.1.1, created on 2024-05-14 15:59:56
  from '/app/www/design/backend/templates/views/promotions/components/group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6643604c8e1615_05175352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7abbf4c646c0ac3b757bafa45f372560ae294a' => 
    array (
      0 => '/app/www/design/backend/templates/views/promotions/components/group.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 2,
    'tygh:common/tools.tpl' => 2,
    'tygh:views/promotions/components/group.tpl' => 2,
    'tygh:views/promotions/components/condition.tpl' => 1,
  ),
),false)) {
function content_6643604c8e1615_05175352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('promotions.cond_any','promotions.cond_all','promotions.cond_all','promotions.cond_any','promotions.cond_true','promotions.cond_false','promotions.cond_false','promotions.cond_true','remove_this_item','add_condition','add_group','text_promotions_group_condition','no_items'));
$_smarty_tpl->_assignInScope('prefix_md5', md5($_smarty_tpl->tpl_vars['prefix']->value));?>

<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[fake]" value="" disabled="disabled" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "set", null, null);
if ($_smarty_tpl->tpl_vars['group']->value['set'] == "any") {
$_smarty_tpl->_assignInScope('selected_name', $_smarty_tpl->__("promotions.cond_any"));
} else {
$_smarty_tpl->_assignInScope('selected_name', $_smarty_tpl->__("promotions.cond_all"));
}
$_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"field",'items'=>array("all"=>$_smarty_tpl->__("promotions.cond_all"),"any"=>$_smarty_tpl->__("promotions.cond_any")),'select_container_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[set]",'selected_key'=>$_smarty_tpl->tpl_vars['group']->value['set'],'selected_name'=>$_smarty_tpl->tpl_vars['selected_name']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "set_value", null, null);
if (!$_smarty_tpl->tpl_vars['group']->value || $_smarty_tpl->tpl_vars['group']->value['set_value']) {
$_smarty_tpl->_assignInScope('selected_name', $_smarty_tpl->__("promotions.cond_true"));
} else {
$_smarty_tpl->_assignInScope('selected_name', $_smarty_tpl->__("promotions.cond_false"));
}
$_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"field",'items'=>array("0"=>$_smarty_tpl->__("promotions.cond_false"),"1"=>$_smarty_tpl->__("promotions.cond_true")),'select_container_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[set_value]",'selected_key'=>(($tmp = $_smarty_tpl->tpl_vars['group']->value['set_value'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp),'selected_name'=>$_smarty_tpl->tpl_vars['selected_name']->value), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<ul class="conditions-tree-group cm-row-item">
    <li class="no-node<?php if ($_smarty_tpl->tpl_vars['root']->value) {?>-root<?php }?>">
        <?php if (!$_smarty_tpl->tpl_vars['root']->value) {?>
        <div class="pull-right">
            <a class="icon-trash cm-delete-row cm-tooltip conditions-tree-remove" name="remove" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
"></a>
        </div>
        <?php }?>
        <div id="add_condition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-toolbar pull-right">
            <?php if (!$_smarty_tpl->tpl_vars['hide_add_buttons']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add(Tygh."."$"."(this).parents('div[id^=add_condition_]').prop('id'), false, 'condition');",'prefix'=>"simple",'link_text'=>$_smarty_tpl->__("add_condition")), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add_group(Tygh."."$"."(this).parents('div[id^=add_condition_]').prop('id'), '".((string)$_smarty_tpl->tpl_vars['zone']->value)."');",'prefix'=>"simple",'link_text'=>$_smarty_tpl->__("add_group")), 0, true);
?>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->__("text_promotions_group_condition",array("[set]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'set'),"[set_value]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'set_value')));?>

    </li>

    <li class="no-node no-items <?php if ($_smarty_tpl->tpl_vars['group']->value['conditions']) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->__("no_items");?>

    </li>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['conditions'], 'condition_data', false, 'k', 'conditions', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['condition_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['condition_data']->value) {
$_smarty_tpl->tpl_vars['condition_data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['total'];
?>
    <li id="container_condition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-row-item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_conditions']->value['last'] : null)) {?> cm-last-item<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['set']) {?>             <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('root'=>false,'group'=>$_smarty_tpl->tpl_vars['condition_data']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[conditions][".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'elm_id'=>"condition_".((string)$_smarty_tpl->tpl_vars['prefix_md5']->value)."_".((string)$_smarty_tpl->tpl_vars['k']->value)), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('condition_data'=>$_smarty_tpl->tpl_vars['condition_data']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[conditions][".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'elm_id'=>"condition_".((string)$_smarty_tpl->tpl_vars['prefix_md5']->value)."_".((string)$_smarty_tpl->tpl_vars['k']->value)), 0, true);
?>
        <?php }?>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <li id="container_add_condition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-row-item">
        <div class="conditions-tree-node">
        <select onchange="Tygh.$.ceAjax('request', '<?php echo fn_url("promotions.dynamic?zone=".((string)$_smarty_tpl->tpl_vars['zone']->value)."&promotion_id=".((string)$_REQUEST['promotion_id']));?>
&prefix=' + encodeURIComponent(this.name) + '&condition=' + this.value + '&elm_id=' + this.id, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'container_' + this.id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)">
            <option value=""> -- </option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['conditions'], 'c', false, '_k');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['zone']->value,$_smarty_tpl->tpl_vars['c']->value['zones'])) {?>
                    <?php $_smarty_tpl->_assignInScope('l', "promotion_cond_".((string)$_smarty_tpl->tpl_vars['_k']->value));?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        </div>
    </li>
</ul>
<?php }
}
