<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:50:52
  from '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445b4ceb1c96_15932029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc5a346147bb1962972c2ed0188e2365eaad191' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66445b4ceb1c96_15932029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('administrator'));
?>

<?php $_smarty_tpl->_assignInScope('NAME_CHARACTERS_THRESHOLD', 30);
if ($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company']) {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("administrator");?>
</span><?php }
}
}
