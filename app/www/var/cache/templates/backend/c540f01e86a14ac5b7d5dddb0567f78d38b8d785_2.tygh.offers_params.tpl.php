<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:52:46
  from '/app/www/design/backend/templates/addons/yml_export/views/yml/offers_params.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c81e8eec95_37987049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c540f01e86a14ac5b7d5dddb0567f78d38b8d785' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/views/yml/offers_params.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c81e8eec95_37987049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor','yml2_offer_feature_','yml2_product_field_','yml_export.offers_params'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->_assignInScope('allow_save', fn_check_permissions("yml","update","admin","POST"));?>

<div id="yml_offer_features">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="yml_export_offers" class="form-horizontal form-edit <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">
        <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php ob_start();
echo $_smarty_tpl->__("vendor");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1,'target'=>"#collapsable_addon_option_yml_export_company"), 0, false);
?>

            <div id="collapsable_addon_option_yml_export_company" class="in collapse">
                <div id="container_addon_option_yml_export_company" class="control-group setting-wide yml_export">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"company_id",'id'=>"offer_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['company_id']->value,'js_action'=>"fn_select_vendor_offers();",'zero_company_id_name_lang_var'=>"yml_export.default_settings_variant"), 0, false);
?>
                </div>
            </div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml_offer_types']->value, 'offer_name', false, 'offer');
$_smarty_tpl->tpl_vars['offer_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offer']->value => $_smarty_tpl->tpl_vars['offer_name']->value) {
$_smarty_tpl->tpl_vars['offer_name']->do_else = false;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['yml_offer_features']->value[$_smarty_tpl->tpl_vars['offer']->value])) {?>

                <?php ob_start();
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['offer_name']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable2,'target'=>"#collapsable_addon_option_yml_export_".((string)$_smarty_tpl->tpl_vars['offer']->value)), 0, true);
?>

                <div id="collapsable_addon_option_yml_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse" style="height: auto;">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml_offer_features']->value[$_smarty_tpl->tpl_vars['offer']->value], 'data', false, 'offer_feature_key');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offer_feature_key']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                        <div id="container_addon_option_yml_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_feature_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group setting-wide yml_export">
                            <label for="addon_option_yml_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_feature_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label "><?php echo $_smarty_tpl->__("yml2_offer_feature_".((string)$_smarty_tpl->tpl_vars['offer']->value)."_".((string)$_smarty_tpl->tpl_vars['offer_feature_key']->value));?>
:
                            </label>

                            <div class="controls">
                                <select id="addon_option_yml_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_feature_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        name="data[ym_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_feature_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                        class="cm-object-selector"
                                        data-ca-page-size="50"
                                        data-ca-enable-search="true"
                                        data-ca-load-via-ajax="true"
                                        data-ca-data-url="<?php echo fn_url("yml.get_variants_list?offer=".((string)$_smarty_tpl->tpl_vars['offer']->value)."&offer_key=".((string)$_smarty_tpl->tpl_vars['offer_feature_key']->value));?>
"
                                        >
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 'product') {?>
                                        <option value="product.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php echo $_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['data']->value['value']));?>
</option>
                                    <?php } else { ?>
                                        <option value="feature.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['feature_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php }?>
                                </select>
                                <div class="right">
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
<!--yml_offer_features--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[yml.update_offers]",'but_role'=>"submit-link",'but_target_form'=>"yml_export_offers"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("yml_export.offers_params"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
?>

<?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var fn_select_vendor_offers = function(){
        $.ceAjax('request', Tygh.current_url, {
            data: {
                company_id: $('[name="company_id"]').val()
            },
            result_ids: 'yml_offer_features'
        })
    };
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
