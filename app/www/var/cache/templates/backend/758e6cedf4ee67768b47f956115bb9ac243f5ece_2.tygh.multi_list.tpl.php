<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:46:08
  from '/app/www/design/backend/templates/views/static_data/components/multi_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c6901be940_78911037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758e6cedf4ee67768b47f956115bb9ac243f5ece' => 
    array (
      0 => '/app/www/design/backend/templates/views/static_data/components/multi_list.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:views/static_data/components/multi_list.tpl' => 2,
  ),
),false)) {
function content_6659c6901be940_78911037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','status','position_short','expand_collapse_list','expand_collapse_list','name','status','expand_sublist_of_items','collapse_sublist_of_items','edit','delete'));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <div class="table-wrapper">
        <table class="table table-middle table--relative table-tree hidden-inputs">
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) == 0) {?>
            <thead>
            <tr>
                <th class="left" width="6%"></th>
                <th width="10%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                <th width="65%">
                    &nbsp;<?php echo $_smarty_tpl->__("name");?>

                </th>
                <th width="10%">&nbsp;</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
            <?php $_smarty_tpl->_assignInScope('header', '');?>
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th class="left" width="6%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['static_data_statuses']->value), 0, true);
?>

                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="10%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="65%">
                        <div class="pull-left">
                        <span class="hand cm-combinations cm-tooltip" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_item">
                            <span class="icon-caret-right"></span>
                        </span>
                        <span class="hand cm-combinations hidden cm-tooltip" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_item">
                            <span class="icon-caret-down"></span>
                        </span>
                        </div>
                        &nbsp;<?php echo $_smarty_tpl->__("name");?>

                    </th>
                    <th width="10%">&nbsp;</th>
                    <th width="10%" class="center"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
            </thead>
        <?php }?>
        <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['level'] > 0) {?>multiple-table-row<?php }?> cm-row-item cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['item']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-longtap-action="setCheckBox"
            data-ca-longtap-target="input.cm-item"
            data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <td class="left" width="6%">
                <input type="checkbox" name="static_data_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['item']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            </td>
            <td width="10%">
                <input type="text" name="static_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden">
            </td>
            <td width="65%">
            <span style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>
px;" class="table-elem">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?>
                    <span class="hand cm-combination cm-tooltip" id="on_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
">
                        <span class="icon-caret-right"></span>
                    </span>
                    <span class="hand cm-combination hidden cm-tooltip" id="off_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
">
                        <span class="icon-caret-down"></span>
                    </span>
                <?php } else { ?>
                    &nbsp;&nbsp;&nbsp;
                <?php }?>
                <a class="cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars((string) "opener_group".((string)$_smarty_tpl->tpl_vars['item']->value['param_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['descr'], ENT_QUOTES, 'UTF-8');?>
</a>
            </span>
            </td>
            <td class="nowrap" width="10%">
                <div class="pull-right hidden-tools">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"edit",'text'=>$_smarty_tpl->tpl_vars['item']->value['descr'],'link_text'=>$_smarty_tpl->__("edit"),'id'=>"group".((string)$_smarty_tpl->tpl_vars['item']->value['param_id']),'link_class'=>"tool-link",'no_icon_link'=>true,'href'=>"static_data.update?param_id=".((string)$_smarty_tpl->tpl_vars['item']->value['param_id'])."&section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&".((string)$_smarty_tpl->tpl_vars['owner_condition']->value)), 0, true);
?></li>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"static_data.delete?param_id=".((string)$_smarty_tpl->tpl_vars['item']->value['param_id'])."&section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&".((string)$_smarty_tpl->tpl_vars['owner_condition']->value),'class'=>"cm-confirm cm-ajax cm-delete-row",'data'=>array('data-ca-target-id'=>'static_data_list'),'method'=>"POST"), true);?>
</li>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                </div>
            </td>
            <td class="right" width="10%">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['item']->value['param_id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status'],'hidden'=>true,'object_id_name'=>"param_id",'table'=>"static_data"), 0, true);
?>
            </td>
        </tr>
        </table>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?>
        <div id="item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/static_data/components/multi_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['item']->value['subitems'],'header'=>false,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
