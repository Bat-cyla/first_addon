<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/views/products/components/products_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4c3dcb7_53841491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '407373f084fcf5ef31898ffff8becf8d8e1ba90f' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/products_list.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/products/components/products_list_row.tpl' => 1,
  ),
),false)) {
function content_6655d9b4c3dcb7_53841491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','quantity','no_data'));
?>
<div id="add_product">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', (($tmp = "pagination_".((string)$_REQUEST['data_id']) ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('row_index', 1);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<input type="hidden" id="add_product_id" name="product_id" value=""/>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <thead>
    <tr>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:table_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:table_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="1%">
                <?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>&nbsp;<?php } else {
$_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
            </th>
        <?php }?>
        <th width="80%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("product_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <th class="right" width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("price");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
            <th class="center" width="5%"></th>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:table_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_list_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row_index'=>$_smarty_tpl->tpl_vars['row_index']->value++,'hide_amount'=>$_smarty_tpl->tpl_vars['hide_amount']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    function _switchAOC(id, disable, $row)
    {
        var aoc = $row.find('#sw_option_' + id + '_AOC');
        if (aoc.length) {
            aoc.addClass('cm-skip-avail-switch');
            aoc.prop('disabled', disable);
            disable = aoc.prop('checked') ? true : disable;
        }

        $row.find('.cm-picker-product-options').switchAvailability(disable, false);
    }

    function init(context)
    {
        if (context.find('tr[id^=picker_product_row_]').length) {
            if (!$('.cm-add-product').length) {
                context.find('.cm-picker-product-options').switchAvailability(true, false);
            } else {
                context.find('.cm-picker-product-options').switchAvailability(false, false);
            }
        }
    }

    $(document).ready(function() {
        init($(_.doc));

        $.ceEvent('on', 'ce.commoninit', function(context) {
            init(context);
        });

        $(_.doc).on('click', '.cm-increase,.cm-decrease', function() {
            var inp = $('input', $(this).closest('.cm-value-changer'));
            var new_val = parseInt(inp.val()) + ($(this).is('a.cm-increase') ? 1 : -1);
            var disable = new_val > 0 ? false : true;
            var _id = inp.prop('id').replace('product_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $.ceEvent('on', 'ce.formajaxpost_add_products', function(response, params) {
            if ($('.cm-add-product').length && response.current_url) {
                var url = response.current_url;

                $.ceAjax('request', url, {
                    method: 'get',
                    result_ids: 'button_trash_products,om_ajax_update_totals,om_ajax_update_payment,om_ajax_update_shipping',
                    full_render: true
                });
            }
        });

        $(_.doc).on('click', '.cm-add-product', function() {
            if ($(this).prop('id')) {
                var _id = $(this).prop('id');
                $('#add_product_id').val(_id);
            }
        });

        $(_.doc).on('change', '.cm-amount', function() {
            var new_val = parseInt($(this).val());
            var disable = new_val > 0 ? false : true;
            var _id = $(this).prop('id').replace('product_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $(_.doc).on('click', '.cm-item', function() {
            var disable = (this.checked) ? false : true;
            var _id = $(this).prop('id').replace('checkbox_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $(_.doc).on('click', '.cm-check-items', function() {
            var form = $(this).parents('form:first');
            var _checked = this.checked;
            $('.cm-item', form).each(function () {
                if (_checked && !this.checked || !_checked && this.checked) {
                    $(this).click();
                }
            });
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, true);
}
}
