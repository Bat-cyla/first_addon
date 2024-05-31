<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:52
  from '/app/www/design/backend/templates/pickers/orders/picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9bcbbd541_34241151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd425765ee0f69852456a1197cea7e34a91d1b4' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/orders/picker_contents.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/orders/components/orders_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/status.tpl' => 1,
    'tygh:common/price.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_6655d9bcbbd541_34241151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','id','status','customer','date','total','id','status','customer','date','total','no_data','add_orders','add_orders_and_close'));
if (!$_REQUEST['extra']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr((string)$_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');

    $.ceEvent('on', 'ce.formpost_add_orders', function(frm, elm) {
        var max_displayed_qty = <?php echo htmlspecialchars((string) (($tmp = $_REQUEST['max_displayed_qty'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
        var details_url = '<?php echo htmlspecialchars((string) fn_url("orders.manage?order_id="), ENT_QUOTES, 'UTF-8');?>
';
        var orders = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var item = $(this).parent().parent();
                orders[id] = {
                    status: item.find('td.cm-order-status').text(),
                    customer: item.find('td.cm-order-customer').text(),
                    timestamp: item.find('td.cm-order-timestamp').text(),
                    total: item.find('td.cm-order-total').text()
                };
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), orders, 'o', {
                '{order_id}': '%id',
                '{status}': '%item.status',
                '{customer}': '%item.customer',
                '{timestamp}': '%item.timestamp',
                '{total}': '%item.total'
            });
            

            $.cePicker('check_items_qty', frm.data('caResultId'), details_url, max_displayed_qty);

            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_added'),
                message_state: 'I'
            });
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"orders.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"data_id\" value=\"".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"extra\" value=\"".((string)$_REQUEST['extra'])."\" />",'form_meta'=>"cm-ajax",'in_popup'=>true), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_orders">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <tr>
        <th class="center" width="1%">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"mrg-check"), 0, false);
?></th>
        <th width="10%"><?php echo $_smarty_tpl->__("id");?>
</th>
        <th width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
        <th width="25%"><?php echo $_smarty_tpl->__("customer");?>
</th>
        <th width="25%"><?php echo $_smarty_tpl->__("date");?>
</th>
        <th width="24%" class="right"><?php echo $_smarty_tpl->__("total");?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
    <tr>
        <td class="center" width="1%" data-th="">
            <input type="checkbox" name="add_parameter[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox mrg-check cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
            <span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td class="cm-order-status" data-th="<?php echo $_smarty_tpl->__("status");?>
"><input type="hidden" name="origin_statuses[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['status'], ENT_QUOTES, 'UTF-8');?>
" /><?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view",'name'=>"order_statuses[".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."]"), 0, true);
?></td>
        <td class="cm-order-customer" data-th="<?php echo $_smarty_tpl->__("customer");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="cm-order-timestamp" data-th="<?php echo $_smarty_tpl->__("date");?>
">
            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </td>
        <td class="right cm-order-total" data-th="<?php echo $_smarty_tpl->__("total");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0, true);
?>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, true);
?>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_orders"),'but_close_text'=>$_smarty_tpl->__("add_orders_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
</div>

</form>
<?php }
}
