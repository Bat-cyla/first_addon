<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/views/companies/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b5ad4515_36794935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77134ee01a1f719f4c74062d0be17779211b43d0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/companies/products.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6686a6b5ad4515_36794935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_products','products_found','text_no_matching_products_found','vendor_products','products_found','text_no_matching_products_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('_title', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("vendor_products") ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('products_search', "Y");?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:products"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div id="products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
        <?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)),$_smarty_tpl);?>

        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['category_data']->value['description'] && $_smarty_tpl->tpl_vars['category_data']->value['description'] != '') {?>
        <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
            <ul class="subcategories clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_subcategories']->value, 'ssubcateg');
$_smarty_tpl->tpl_vars['ssubcateg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ssubcateg']->value) {
$_smarty_tpl->tpl_vars['ssubcateg']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ssubcateg']->value, 'category', false, NULL, 'ssubcateg', array (
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                        <li class="ty-subcategories__item">
                            <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0, true);
?>
                            <?php }?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
        <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0, true);
?>
        <?php }?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_no_matching_found"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

<!--products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('_title', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("vendor_products") ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('products_search', "Y");?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:products"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div id="products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
        <?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)),$_smarty_tpl);?>

        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['category_data']->value['description'] && $_smarty_tpl->tpl_vars['category_data']->value['description'] != '') {?>
        <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
            <ul class="subcategories clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_subcategories']->value, 'ssubcateg');
$_smarty_tpl->tpl_vars['ssubcateg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ssubcateg']->value) {
$_smarty_tpl->tpl_vars['ssubcateg']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ssubcateg']->value, 'category', false, NULL, 'ssubcateg', array (
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                        <li class="ty-subcategories__item">
                            <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0, true);
?>
                            <?php }?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
        <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0, true);
?>
        <?php }?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_no_matching_found"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

<!--products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
