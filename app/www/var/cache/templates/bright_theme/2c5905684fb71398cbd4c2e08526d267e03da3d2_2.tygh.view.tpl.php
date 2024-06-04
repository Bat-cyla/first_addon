<?php
/* Smarty version 4.1.1, created on 2024-06-04 16:51:02
  from '/app/www/design/themes/responsive/templates/views/companies/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f1bc6259d58_26729645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5905684fb71398cbd4c2e08526d267e03da3d2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/companies/view.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/company_data.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 2,
  ),
),false)) {
function content_665f1bc6259d58_26729645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.normalize_url.php','function'=>'smarty_modifier_normalize_url',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('view_vendor_products','items','yes','no','contact_information','shipping_address','view_vendor_products','items','yes','no','contact_information','shipping_address'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company_data']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), 0, false);
?>
    <div class="ty-company-detail clearfix">

        <div id="block_company_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
            <h1 class="ty-mainbox-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</h1>

            <div class="ty-company-detail__top-links clearfix">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:top_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="ty-company-detail__view-products" id="company_products">
                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>

                            (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:top_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <div class="ty-company-detail__info">
                <div class="ty-company-detail__logo">
                    <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                </div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")], 'field_data', false, 'field_id');
$_smarty_tpl->tpl_vars['field_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field_data']->value) {
$_smarty_tpl->tpl_vars['field_data']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('data_source', $_smarty_tpl->tpl_vars['company_data']->value['fields']);?>
                        <?php if ($_smarty_tpl->tpl_vars['field_data']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['field_data']->value['field_name']);?>
                            <?php $_smarty_tpl->_assignInScope('data_source', $_smarty_tpl->tpl_vars['company_data']->value);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]);?>
                        <div class="ty-company-detail__control-group">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:profile_field_value"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:profile_field_value"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <label class="ty-company-detail__control-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                                <?php if ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
                                    <span><a href="mailto:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                                    <span><?php if ($_smarty_tpl->tpl_vars['field_value']->value === smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                                    <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['field_value']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::RADIO") || $_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_data']->value['values'][$_smarty_tpl->tpl_vars['field_value']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::FILE") && $_smarty_tpl->tpl_vars['field_value']->value['file_name']) {?>
                                    <span><a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field_value']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_id']->value === "url") {?>                                     <span><a href="<?php echo htmlspecialchars((string) smarty_modifier_normalize_url($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE") || ($_smarty_tpl->tpl_vars['field_data']->value['autocomplete_type'] === "phone-full")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) fn_get_country_name($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) fn_get_state_name($_smarty_tpl->tpl_vars['field_value']->value,$_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } else { ?>
                                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:profile_field_value"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)))) {?>
                    <div class="ty-company-detail__info-list ty-company-detail_info-first">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('address', "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('location_full', "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value)) || $_smarty_tpl->tpl_vars['company_data']->value['country']) {?>
                    <div class="ty-company-detail__info-list">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value))) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value);?>
</span>
                            </div>
                        <?php }?>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value))) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value);?>
</span>
                            </div>
                        <?php }?>

                        <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars((string) fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
            <div id="content_description"
                 class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value !== "description") {?>hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']) {?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

                    </div>
                <?php }?>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company_data']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), 0, true);
?>
    <div class="ty-company-detail clearfix">

        <div id="block_company_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
            <h1 class="ty-mainbox-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</h1>

            <div class="ty-company-detail__top-links clearfix">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:top_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="ty-company-detail__view-products" id="company_products">
                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>

                            (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:top_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <div class="ty-company-detail__info">
                <div class="ty-company-detail__logo">
                    <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                </div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")], 'field_data', false, 'field_id');
$_smarty_tpl->tpl_vars['field_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field_data']->value) {
$_smarty_tpl->tpl_vars['field_data']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('data_source', $_smarty_tpl->tpl_vars['company_data']->value['fields']);?>
                        <?php if ($_smarty_tpl->tpl_vars['field_data']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['field_data']->value['field_name']);?>
                            <?php $_smarty_tpl->_assignInScope('data_source', $_smarty_tpl->tpl_vars['company_data']->value);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]);?>
                        <div class="ty-company-detail__control-group">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:profile_field_value"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:profile_field_value"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <label class="ty-company-detail__control-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                                <?php if ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
                                    <span><a href="mailto:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                                    <span><?php if ($_smarty_tpl->tpl_vars['field_value']->value === smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                                    <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['field_value']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::RADIO") || $_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_data']->value['values'][$_smarty_tpl->tpl_vars['field_value']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::FILE") && $_smarty_tpl->tpl_vars['field_value']->value['file_name']) {?>
                                    <span><a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field_value']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_id']->value === "url") {?>                                     <span><a href="<?php echo htmlspecialchars((string) smarty_modifier_normalize_url($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE") || ($_smarty_tpl->tpl_vars['field_data']->value['autocomplete_type'] === "phone-full")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) fn_get_country_name($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) fn_get_state_name($_smarty_tpl->tpl_vars['field_value']->value,$_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } else { ?>
                                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:profile_field_value"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)))) {?>
                    <div class="ty-company-detail__info-list ty-company-detail_info-first">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('address', "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('location_full', "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value)) || $_smarty_tpl->tpl_vars['company_data']->value['country']) {?>
                    <div class="ty-company-detail__info-list">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value))) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value);?>
</span>
                            </div>
                        <?php }?>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value))) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location_full']->value);?>
</span>
                            </div>
                        <?php }?>

                        <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars((string) fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
            <div id="content_description"
                 class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value !== "description") {?>hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']) {?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

                    </div>
                <?php }?>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, true);
?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
