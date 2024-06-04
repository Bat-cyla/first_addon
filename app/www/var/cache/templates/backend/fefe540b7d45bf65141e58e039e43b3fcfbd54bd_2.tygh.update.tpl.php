<?php
/* Smarty version 4.1.1, created on 2024-06-04 14:15:58
  from '/app/www/design/backend/templates/views/promotions/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665ef76e2ca440_90567410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefe540b7d45bf65141e58e039e43b3fcfbd54bd' => 
    array (
      0 => '/app/www/design/backend/templates/views/promotions/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/calendar.tpl' => 2,
    'tygh:common/select_status.tpl' => 1,
    'tygh:views/promotions/components/group.tpl' => 1,
    'tygh:views/promotions/components/bonuses_group.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_665ef76e2ca440_90567410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','detailed_description','short_description','owner','image','use_avail_period','avail_from','avail_till','priority','stop_following_rules','stop_other_rules','tt_views_promotions_update_stop_other_rules','add_storefronts','all_storefronts','delete','new_promotion'));
if ($_smarty_tpl->tpl_vars['promotion_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['promotion_data']->value['promotion_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->_assignInScope('allow_save', true);
if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['promotion_data']->value,"promotions"));
}?>

<?php $_smarty_tpl->_assignInScope('storefront_owner_id', false);
if ($_smarty_tpl->tpl_vars['promotion_data']->value['storefront_owner_id']) {?>
    <?php $_smarty_tpl->_assignInScope('storefront_owner_id', $_smarty_tpl->tpl_vars['promotion_data']->value['storefront_owner_id']);
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/promotion_update.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
function fn_promotion_add(id, skip_select, type)
{
    var $ = Tygh.$,
        new_group = false,
        new_id = $('#container_' + id).cloneNode(0, true, true).str_replace('container_', ''),
        $new_container = $('#container_' + new_id),
        $input = null;

    skip_select = skip_select || false;

    // Iterate through all previous elements
    $new_container.prevAll('[id^="container_"]').each(function() {
        var $this = $(this);
        $input = $('input[name^=promotion_data]:first', $this).clone();
        if ($input.length == 0) {
            $input = $('input[data-ca-input-name^=promotion_data]:first', $this).clone();
        }

        if ($input.length == 0) {

        } else {
            if ($input.val() != 'undefined' && $input.val() != '') {
                $input.val('');
            }

            return false;
        }
    });

    // We added new group, so we need to get input from parent element or this is the new condition
    if ($input === null || !$input.get(0)) {
        $input = $('input[name^=promotion_data]:first', $new_container.parents('li:first')).clone(); // for group

        $('.no-node.no-items', $new_container.parents('ul:first')).hide(); // hide conainer with "no items" text

        // new condition
        if (!$input.get(0)) {
            var n = (type == 'condition') ? "promotion_data[conditions][conditions][0][condition]" : "promotion_data[bonuses][0][bonus]";
            $input = $('<input type="hidden" name="'+ n +'" value="" />');
        } else {
            new_group = true;
        }
    }

    var _name = $input.prop('name').length > 0 ? $input.prop('name') : $input.data('caInputName');
    var val = parseInt(_name.match(/(.*)\[(\d+)\]/)[2]);
    var name = new_group ? _name : _name.replace(/(.*)\[(\d+)\]/, '$1[' + (val + 1) +']');

    $input.attr('name', name);
    $new_container.append($input);
    name = name.replace(/\[(\w+)\]$/, '');

    if (new_group) {
        name += '[conditions][1]';
    }

    $new_container.prev().removeClass('cm-last-item'); // remove tree node closure from previous element
    $new_container.addClass('cm-last-item').show(); // add tree node closure to new element
    // Update selector with name with new index
    if (skip_select == false) {
        $('#container_' + new_id + ' select').prop('id', new_id).prop('name', name);

    // Or just return id and name (for group)
    } else {
        $new_container.empty(); // clear node contents
        return {
            new_id: new_id,
            name: name
        };
    }
}

function fn_promotion_add_group(id, zone)
{
    var $ = Tygh.$;
    var res = fn_promotion_add(id, true, 'condition');
    $.ceAjax('request', fn_url('promotions.dynamic?promotion_id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
&zone=' + zone + '&prefix=' + encodeURIComponent(res.name) + '&group=new&elm_id=' + res.new_id), {
        result_ids: 'container_' + res.new_id
    });
}

function fn_promotion_rebuild_mixed_data(items, value, id, element_id, condition_value, condition_value_name)
{
    var $ = Tygh.$;
    var opts = '';
    var first_variant = '';

    for (var k in items) {
        if (items[k]['is_group']) {
            for (var l in items[k]['items']) {
                first_variant = '';
                if (l == value) {
                    if (items[k]['items'][l]['variants']) {
                        var count = 0;
                        for (var m in items[k]['items'][l]['variants']) {
                            if (!first_variant) {
                                first_variant = m;
                            }
                            opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['items'][l]['variants'][m] + '</option>';
                            count++;
                        }
                        if (count < <?php echo htmlspecialchars((string) (defined('PRODUCT_FEATURE_VARIANTS_THRESHOLD') ? constant('PRODUCT_FEATURE_VARIANTS_THRESHOLD') : null), ENT_QUOTES, 'UTF-8');?>
) {
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                            $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                            $('#mixed_input_' + id).hide().prop('disabled', true);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                        } else {
                            $('#mixed_ajax_select_' + id).data('ajax_content', null);
                            $('#mixed_select_' + id).hide().prop('disabled', true);
                            $('#mixed_ajax_select_' + id).html('');
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                            $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                            $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', fn_url('product_features.get_feature_variants_list?enter_other=N&feature_id=' + l));
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                            $('#mixed_input_' + id + '_name').val(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id).hide().prop('disabled', false);
                            $('#mixed_input_' + id).val(first_variant);
                            if (condition_value && element_id == l) {
                                $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                                $('#mixed_input_' + id + '_name').val(condition_value_name);
                                $('#mixed_input_' + id).val(condition_value);
                            }
                        }
                    } else {
                        $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                    }
                }
            }
        } else {
            if (k == value) {
                if (items[k]['variants']) {
                    var count = 0;
                    for (var m in items[k]['variants']) {
                        if (!first_variant) {
                            first_variant = m;
                        }
                        opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['variants'][m] + '</option>';
                        count++;
                    }
                    if (count < <?php echo htmlspecialchars((string) (defined('PRODUCT_FEATURE_VARIANTS_THRESHOLD') ? constant('PRODUCT_FEATURE_VARIANTS_THRESHOLD') : null), ENT_QUOTES, 'UTF-8');?>
) {
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                        $('#mixed_input_' + id).hide().prop('disabled', true);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                    } else {
                        $('#mixed_ajax_select_' + id).data('ajax_content', null);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).html('');
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                        $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                        $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', fn_url('product_features.get_feature_variants_list?enter_other=N&feature_id=' + k));
                        $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                        $('#mixed_input_' + id + '_name').val(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id).hide().prop('disabled', false);
                        $('#mixed_input_' + id).val(first_variant);
                        if (condition_value && element_id == k) {
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                            $('#mixed_input_' + id + '_name').val(condition_value_name);
                            $('#mixed_input_' + id).val(condition_value);
                        }
                    }
                } else {
                    $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false).removeClass('hidden');
                    $('#mixed_select_' + id).hide().prop('disabled', true);
                    $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                    $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                }
            }
        }
    }
}
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="promotion_form" class="conditions-tree form-horizontal form-edit  <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" >
            <input type="hidden" class="cm-no-hide-input" name="promotion_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" class="cm-no-hide-input" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" class="cm-no-hide-input" name="promotion_data[zone]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['promotion_data']->value['zone'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

            <div id="content_details">
                <fieldset>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                        <div class="control-group">
                            <label for="elm_promotion_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                            <div class="controls">
                                <input type="text" name="promotion_data[name]" id="elm_promotion_name" size="25" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_promotion_det_descr"><?php echo $_smarty_tpl->__("detailed_description");?>
:</label>
                            <div class="controls">
                                <textarea id="elm_promotion_det_descr" name="promotion_data[detailed_description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_data']->value['detailed_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_promotion_sht_descr"><?php echo $_smarty_tpl->__("short_description");?>
:</label>
                            <div class="controls">
                                <textarea id="elm_promotion_sht_descr" name="promotion_data[short_description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_data']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            </div>
                        </div>

                        <?php if (fn_allowed_for("ULTIMATE") || !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "marketplace");?>
                                <?php $_smarty_tpl->_assignInScope('company_field_name', $_smarty_tpl->__("owner"));?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"promotion_data[company_id]",'id'=>"elm_promotion_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'disable_company_picker'=>fn_allowed_for("MULTIVENDOR"),'company_field_name'=>$_smarty_tpl->tpl_vars['company_field_name']->value,'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), 0, false);
?>
                        <?php }?>

                        <div class="control-group" id="promo_image">
                            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
                            <div class="controls">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"promo_main",'image_object_type'=>"promotion",'image_pair'=>$_smarty_tpl->tpl_vars['promotion_data']->value['image'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
                            <div class="controls">
                                <input type="checkbox" name="avail_period" id="elm_use_avail_period" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['from_date'] || $_smarty_tpl->tpl_vars['promotion_data']->value['to_date']) {?>checked="checked"<?php }?> value="Y" onclick="fn_activate_calendar(this);"/>
                            </div>
                        </div>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "calendar_disable", null, null);
if (!$_smarty_tpl->tpl_vars['promotion_data']->value['from_date'] && !$_smarty_tpl->tpl_vars['promotion_data']->value['to_date']) {?>disabled="disabled"<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <div class="control-group">
                            <label class="control-label" for="elm_date_holder_from"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
                            <div class="controls">
                                <input type="hidden" name="promotion_data[from_date]" value="0" />
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_date_holder_from",'date_name'=>"promotion_data[from_date]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_data']->value['from_date'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'calendar_disable')), 0, false);
?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_date_holder_to"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
                            <div class="controls">
                                <input type="hidden" name="promotion_data[to_date]" value="0" />
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_date_holder_to",'date_name'=>"promotion_data[to_date]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_data']->value['to_date'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'calendar_disable')), 0, true);
?>
                            </div>
                        </div>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 language="javascript">
                            function fn_activate_calendar(el)
                            {
                                var $ = Tygh.$;
                                var jelm = $(el);
                                var checked = jelm.prop('checked');

                                $('#elm_date_holder_from,#elm_date_holder_to').prop('disabled', !checked);
                            }

                            fn_activate_calendar(Tygh.$('#elm_use_avail_period'));
                        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <div class="control-group">
                            <label class="control-label" for="elm_promotion_priority"><?php echo $_smarty_tpl->__("priority");?>
</label>
                            <div class="controls">
                                <input type="text" name="promotion_data[priority]" id="elm_promotion_priority" size="25" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_data']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" />
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['stop'] == smarty_modifier_enum("YesNo::YES")) {?>
                            <div class="control-group">
                                <label class="control-label" for="elm_promotion_stop"><?php echo $_smarty_tpl->__("stop_following_rules");?>
</label>
                                <div class="controls">
                                    <input type="hidden" name="promotion_data[stop]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="checkbox" name="promotion_data[stop]" id="elm_promotion_stop" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['stop'] == smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
                                </div>
                            </div>
                        <?php }?>

                        <div class="control-group">
                            <label class="control-label" for="elm_promotion_stop"><?php echo $_smarty_tpl->__("stop_other_rules");?>
</label>
                            <div class="controls">
                                <input type="hidden" name="promotion_data[stop_other_rules]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                                <input type="checkbox" name="promotion_data[stop_other_rules]" id="elm_promotion_stop_other_rules" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['stop_other_rules'] == smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
                                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_promotions_update_stop_other_rules");?>
</p>
                            </div>
                        </div>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"promotion_data[status]",'id'=>"elm_promotion_status",'obj'=>$_smarty_tpl->tpl_vars['promotion_data']->value,'hidden'=>true), 0, false);
?>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </fieldset>
            <!--content_details--></div>

            <div id="content_conditions">

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"promotion_data[conditions]",'group'=>$_smarty_tpl->tpl_vars['promotion_data']->value['conditions'],'root'=>true,'no_ids'=>true,'zone'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_data']->value['zone'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value ?? null : $tmp),'hide_add_buttons'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0, false);
?>

            <!--content_conditions--></div>

            <div id="content_bonuses">

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/components/bonuses_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"promotion_data[bonuses]",'group'=>$_smarty_tpl->tpl_vars['promotion_data']->value['bonuses'],'zone'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_data']->value['zone'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['zone']->value ?? null : $tmp),'hide_add_buttons'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0, false);
?>

            <!--content_bonuses--></div>

            <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
                <div class="hidden" id="content_storefronts">
                    <?php $_smarty_tpl->_assignInScope('add_storefront_text', $_smarty_tpl->__("add_storefronts"));?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"promotion_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['promotion_data']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0, false);
?>
                <!--content_storefronts--></div>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </form>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>

        <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
            <?php $_smarty_tpl->_assignInScope('hide_second_button', true);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"promotions.delete?promotion_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[promotions.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_target_form'=>"promotion_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['promotion_data']->value['name'] : $_smarty_tpl->__("new_promotion"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
