<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/pickers/products/picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4b14801_87656790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496ac2d58dc9f16779fbee31a28516efd84f575d' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/products/picker_contents.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/products_search_form.tpl' => 1,
    'tygh:views/products/components/products_list.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_6655d9b4b14801_87656790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','options','no','yes','any_option_combinations','add_products','add_products_and_close','choose','close'));
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
    _.tr('options', '<?php echo strtr((string)$_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    _.tr('no', '<?php echo strtr((string)$_smarty_tpl->__("no"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    _.tr('yes', '<?php echo strtr((string)$_smarty_tpl->__("yes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    _.tr('aoc', '<?php echo strtr((string)$_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');

    function _getDescription(obj, id)
    {
        var p = {};
        var d = '';
        var aoc = $('#sw_option_' + id + '_AOC', obj);
        var aocDescription;
        var aocIsChecked = 'N';
        var descriptionPrefix;

        if (aoc.length && aoc.prop('checked')) {
            aocDescription = aoc.data('caAocText') ? aoc.data('caAocText') : _.tr('aoc');
            aocIsChecked = 'Y';
        } else {
            var $container = $('#option_' + id + '_AOC', obj);
                descriptionPrefix = $container.data('caEmptyProductDescriptionPrefix') ? '' : (_.tr('options') + ': ');

            $(':input', $container).each( function() {
                var op = this;
                var j_op = $(this);

                if (typeof(op.name) == 'string' && op.name == '') {
                    return false;
                }
                var matches = op.name.match(/\[(\d+)\]$/);
                if (matches && matches.length) {
                    var option_id = matches[1];
                    if (op.type == 'checkbox') {
                        var variant = (op.checked == false) ? _.tr('no') : _.tr('yes');
                    }
                    if (op.type == 'radio' && op.checked == true) {
                        var variant = $('#option_description_' + id + '_' + option_id + '_' + op.value, obj).text();
                    }
                    if (op.type == 'select-one') {
                        var variant = op.options[op.selectedIndex].text;
                    }
                    if ((op.type == 'text' || op.type == 'textarea') && op.value != '') {
                        if (j_op.hasClass('cm-hint') && op.value == op.defaultValue) { //FIXME: We should not become attached to cm-hint class
                            var variant = '';
                        } else {
                            var variant = op.value;
                        }
                    }
                    if ((op.type == 'checkbox') || ((op.type == 'text' || op.type == 'textarea') && op.value != '') || (op.type == 'select-one') || (op.type == 'radio' && op.checked == true)) {
                        if (op.type == 'checkbox') {
                            p[option_id] = (op.checked == false) ? $('#unchecked_' + id + '_option_' + option_id, obj).val() : op.value;
                        }else{
                            p[option_id] = (j_op.hasClass('cm-hint') && op.value == op.defaultValue) ? '' : op.value; //FIXME: We should not become attached to cm-hint class
                        }

                        var optionName = $('#option_description_' + id + '_' + option_id, obj).text();

                        d += '<li><strong>' + optionName + '</strong>: <bdi>' + variant + '</bdi></li>';
                    }
                }
            });

            d = d ? '<strong>' + descriptionPrefix + '</strong><br><ul class="unstyled">' + d + '</ul>' : '';
        }
        return {
            path: p,
            desc: aocDescription ? aocDescription : d,
            aoc: aocIsChecked,
        };
    }

    $.ceEvent('on', 'ce.formpost_add_products', function(frm, elm) {
        var products = {};
        var _display = frm.find("[name=display_type]").val();

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val(),
                    value = ($('#product_' + id + '_alt').length && $('#product_' + id + '_alt').is(':enabled'))
                        ? $('#product_' + id + '_alt').val()
                        : $('#product_' + id).val();

                if (_display == "options" || _display == "options_amount" || _display == "options_price") {

                    products[id] = {
                        option: _getDescription(frm, id),
                        value: value
                    };
                } else if(_display === 'radio') {
                    products[id] = value;
                } else {
                    products[id] = {
                        value: value
                    };
                }

                if ($('#company_id_' + id).length) {
                    products[id].companyId = $('#company_id_' + id).val();
                    products[id].companyName = $('#company_name_' + id).val();
                }
            });

            $.ceEvent('trigger', 'ce.picker_transfer_js_items', [products, frm]);
            $.cePicker('add_js_item', frm.data('caResultId'), products, 'p', {});

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

<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"products.picker",'picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_products" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
<input type="hidden" name="display_type" value="<?php echo htmlspecialchars((string) $_REQUEST['display'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("add_products"));
$_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("add_products_and_close"));?>

<?php if ($_REQUEST['display'] != "options_amount" && $_REQUEST['display'] != "options_price") {?>
    <?php $_smarty_tpl->_assignInScope('hide_amount', true);
}?>

<?php if ($_REQUEST['display'] == "options_price") {?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);
}?>

<?php if ($_REQUEST['display'] == "radio") {?>
    <?php $_smarty_tpl->_assignInScope('show_radio', true);?>
    <?php $_smarty_tpl->_assignInScope('hide_options', true);?>
    <?php $_smarty_tpl->_assignInScope('but_text', '');?>
    <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("choose"));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'form_name'=>"add_products",'checkbox_id'=>"add_product_checkbox",'div_id'=>"pagination_".((string)$_REQUEST['data_id']),'hide_amount'=>$_smarty_tpl->tpl_vars['hide_amount']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'checkbox_name'=>$_REQUEST['checkbox_name'],'show_aoc'=>$_REQUEST['aoc'],'only_selectable_options'=>$_REQUEST['only_selectable_options'],'additional_class'=>"option-item",'show_radio'=>$_smarty_tpl->tpl_vars['show_radio']->value,'hide_options'=>$_smarty_tpl->tpl_vars['hide_options']->value,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
        <a class="btn cm-dialog-closer tool-link" id="close_add_products"><?php echo $_smarty_tpl->__("close");?>
</a>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary",'but_onclick'=>"$"."('#add_product_id').val('')",'allow_href'=>true), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_close_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
    <?php }?>
</div>
<?php }?>
</form>
<?php }
}
