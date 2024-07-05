<?php
/* Smarty version 4.1.1, created on 2024-07-05 10:15:13
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/new_shipment.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66879d81904641_44642498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5016ed678f7bf0e9f6682dc0d330cf7c2dfd047c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/new_shipment.post.tpl',
      1 => 1720163708,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66879d81904641_44642498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('Tags'));
?>
<div class="control-group shift-top">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("Tags")), 0, false);
?>
</div>
    <?php echo smarty_function_script(array('src'=>"js/addons/cp_extended_tags/tags_autocomplete.js"),$_smarty_tpl);?>

    <div class="cp-control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <div class="cp-controls">
            <span class="cp-input">
            <ul id="my_tags" class="cp-input">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['tags'], 'tag', true);
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_0_saved = $_smarty_tpl->tpl_vars['tag'];
?>
                <textarea name="order_tags[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
]" type="text" id="tags-field" data-ca-tags="TagsValues" class="hidden-accessible"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['tag']->last) {
}?></textarea>
                <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved;
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
$__foreach_tag_1_saved = $_smarty_tpl->tpl_vars['tag'];
?>
                    <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </span>
        </div>
    </div>
<?php }
}
