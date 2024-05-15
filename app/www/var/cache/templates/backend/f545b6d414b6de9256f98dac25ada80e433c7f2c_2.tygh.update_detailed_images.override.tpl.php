<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:57
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_detailed_images.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4da89ff0_22801825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f545b6d414b6de9256f98dac25ada80e433c7f2c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/update_detailed_images.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/form_file_uploader.tpl' => 1,
  ),
),false)) {
function content_66436f4da89ff0_22801825 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('images'));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['image_pairs'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0, false);
?>
        </div>
    </div>
<?php }
}
}
