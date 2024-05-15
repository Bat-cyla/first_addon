<?php
/* Smarty version 4.1.1, created on 2024-05-14 15:59:56
  from '/app/www/design/backend/templates/views/promotions/components/bonuses_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6643604c985ed4_26917360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523719ea7620bbe4912fad540e669855ba1367af' => 
    array (
      0 => '/app/www/design/backend/templates/views/promotions/components/bonuses_group.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 1,
    'tygh:views/promotions/components/bonus.tpl' => 1,
  ),
),false)) {
function content_6643604c985ed4_26917360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_bonus','no_items'));
if (!$_smarty_tpl->tpl_vars['hide_add_buttons']->value) {?>
    <div class="buttons-container pull-right">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add(this.id, false, 'bonus');",'tool_id'=>"add_bonus",'link_text'=>$_smarty_tpl->__("add_bonus"),'prefix'=>"bottom"), 0, false);
?>
    </div>
<?php }?>
<ul class="conditions-tree-group clear">
    <li class="no-node no-items <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->__("no_items");?>

    </li>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'bonus_data', false, 'k', 'bonuses', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['bonus_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['bonus_data']->value) {
$_smarty_tpl->tpl_vars['bonus_data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['total'];
?>
    <li id="container_bonus_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-row-item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_bonuses']->value['last'] : null)) {?> cm-last-item<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bonus_data'=>$_smarty_tpl->tpl_vars['bonus_data']->value,'elm_id'=>"bonus_".((string)$_smarty_tpl->tpl_vars['k']->value),'prefix'=>"promotion_data[bonuses][".((string)$_smarty_tpl->tpl_vars['k']->value)."]"), 0, true);
?>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    <li id="container_add_bonus" class="clear hidden cm-row-item">
        <div class="conditions-tree-node">
            <select onchange="Tygh.$.ceAjax('request', fn_url('promotions.dynamic?prefix=' + encodeURIComponent(this.name) + '&bonus=' + this.value + '&elm_id=' + this.id), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'container_' + this.id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)">
                <option value=""> -- </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['bonuses'], 'b', false, '_k');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
                    <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['zone']->value,$_smarty_tpl->tpl_vars['b']->value['zones'])) {?>
                        <?php $_smarty_tpl->_assignInScope('l', "promotion_bonus_".((string)$_smarty_tpl->tpl_vars['_k']->value));?>
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
</ul><?php }
}
