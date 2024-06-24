<?php
/* Smarty version 4.1.1, created on 2024-06-17 17:43:03
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/profiles/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66704b77a85333_17591025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e660467b5e6a27e8443bebc05627211d4e291ba8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/profiles/detailed_content.post.tpl',
      1 => 1718635382,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
  ),
),false)) {
function content_66704b77a85333_17591025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('extended_tags','tags'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("extended_tags")), 0, false);
?>

<?php echo smarty_function_script(array('src'=>"js/addons/tags_ext/tags_autocomplete.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('company_id', fn_get_runtime_company_id());?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
    <div class="controls">
        <ul id="my_tags">
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
                <textarea name="user_tags[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
]" type="text" data-ca-tags="TagsValues" class="hidden-accessible"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['tag']->last) {
}?></textarea>
            <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
?>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[profiles.update]",'but_role'=>"submit-link",'but_target_form'=>"profile_form"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
