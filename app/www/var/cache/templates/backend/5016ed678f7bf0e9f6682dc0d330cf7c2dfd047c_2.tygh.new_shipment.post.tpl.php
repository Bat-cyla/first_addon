<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:09:21
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/new_shipment.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100d1a700b8_33141952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5016ed678f7bf0e9f6682dc0d330cf7c2dfd047c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/new_shipment.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669100d1a700b8_33141952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>

    <?php echo smarty_function_script(array('src'=>"js/addons/tags_ext/tags_autocomplete.js"),$_smarty_tpl);?>

    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['tags'], 'tag', true);
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_24_saved = $_smarty_tpl->tpl_vars['tag'];
?>
                <textarea name="order_tags[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
]" type="text"  data-ca-tags="TagsValues" class="hidden-accessible"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['tag']->last) {
}?></textarea>
                <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_24_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <input type="hidden" id="object_name" value="tags[]"/>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['tags'], 'tag', true, NULL, 'tag', array (
));
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_25_saved = $_smarty_tpl->tpl_vars['tag'];
?>
                    <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </ul>
        </div>
    </div>
<?php }
}
