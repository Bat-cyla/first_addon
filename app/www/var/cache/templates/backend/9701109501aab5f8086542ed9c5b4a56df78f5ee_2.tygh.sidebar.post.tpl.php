<?php
/* Smarty version 4.1.1, created on 2024-05-31 12:41:02
  from '/app/www/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66599b2e9fb0b1_07410105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9701109501aab5f8086542ed9c5b4a56df78f5ee' => 
    array (
      0 => '/app/www/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66599b2e9fb0b1_07410105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),));
if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
