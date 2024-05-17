<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:38:02
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644584a94b024_69177166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a176126dadb39be427b4e5c9661cd3043b8cca43' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_images.tpl',
      1 => 1715579491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6644584a94b024_69177166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['images']->value) {?>
    <div class="ty-product-review-post-images">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'post_images', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']++;
?>
            <figure class="ty-product-review-post-images__item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'','images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'image_link_additional_attrs'=>array("data-ca-image-order"=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index'] : null)),'show_detailed_link'=>true,'image_id'=>"preview[product_review_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]",'link_class'=>"cm-previewer-only ty-previewer-only",'obj_id'=>uniqid()), 0, true);
?>
            </figure>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['images']->value) {?>
    <div class="ty-product-review-post-images">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'post_images', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']++;
?>
            <figure class="ty-product-review-post-images__item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'','images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'image_link_additional_attrs'=>array("data-ca-image-order"=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index'] : null)),'show_detailed_link'=>true,'image_id'=>"preview[product_review_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]",'link_class'=>"cm-previewer-only ty-previewer-only",'obj_id'=>uniqid()), 0, true);
?>
            </figure>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}