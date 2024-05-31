<?php
/* Smarty version 4.1.1, created on 2024-05-30 09:14:52
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6658195cd2f136_91135462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa0f1669eb0d7be816eb6c8fbc0f5e714ae3051' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/detailed_content.post.tpl',
      1 => 1717049687,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_6658195cd2f136_91135462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('extended_tags','tags'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("extended_tags")), 0, false);
echo smarty_function_script(array('src'=>"js/addons/tags_ext/tags_autocomplete.js"),$_smarty_tpl);?>

<div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
    <div class="controls">
        <ul id="my_tags">
                <textarea name="my_tags" type="text" data-ca-tags="myTagsValues" class="hidden-accessible">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['tags'], 'tag', true);
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_0_saved = $_smarty_tpl->tpl_vars['tag'];
?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                        <?php if (!$_smarty_tpl->tpl_vars['tag']->last) {?>
                    <?php }
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></textarea>
            <input type="hidden" id="object_id" value=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 />
            <input type="hidden" id="object_type" value=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
 />
            <input type="hidden" name="user_data[tags][]" value="" />
            <input type="hidden" id="object_name" value="user_data[tags][]" />
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['tags'], 'tag', true, NULL, 'tag', array (
));
$_smarty_tpl->tpl_vars['tag']->iteration = 0;
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
$__foreach_tag_1_saved = $_smarty_tpl->tpl_vars['tag'];
?><li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div><?php }
}
