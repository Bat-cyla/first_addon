<?php
/* Smarty version 4.1.1, created on 2024-05-29 09:20:55
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/new_shipment.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656c947963754_67802676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc1e2cd36d5cd4c41a018501148e1834caa8f3e5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/new_shipment.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656c947963754_67802676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>

    <?php echo smarty_function_script(array('src'=>"js/addons/tags_ext/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <textarea name="my_tags" type="text" data-ca-tags="myTagsValues" class="hidden-accessible"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['tags'], 'tag', true);
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_25_saved = $_smarty_tpl->tpl_vars['tag'];
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['tag']->last) {?>
                    <?php }
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></textarea>
                <input type="hidden" id="object_id" value=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" id="object_type" value=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" name="order_info[tags][]" value="" />
                <input type="hidden" id="object_name" value="order_info[tags][]" />
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['tags'], 'tag', true, NULL, 'tag', array (
));
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_26_saved = $_smarty_tpl->tpl_vars['tag'];
?><li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
<?php }
}
