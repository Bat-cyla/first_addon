<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:08:36
  from '/app/www/design/backend/templates/views/documents/preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100a4270296_98327405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b623424b1721932448b2ab42a7125d7f056513f' => 
    array (
      0 => '/app/www/design/backend/templates/views/documents/preview.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669100a4270296_98327405 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('preview'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }
}
