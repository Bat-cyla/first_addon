<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:50:52
  from '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445b4cc20c72_12991468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28a2cca65655a532b3770c6a8641179c52ca625f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66445b4cc20c72_12991468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>

<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer'] || $_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer'] === smarty_modifier_enum("YesNo::YES")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok-sign muted",'title'=>$_smarty_tpl->__("product_reviews.verified_purchase")),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-close muted",'title'=>$_smarty_tpl->__("anonymous")),$_smarty_tpl);?>

    <?php }?>

<?php }
}
}
