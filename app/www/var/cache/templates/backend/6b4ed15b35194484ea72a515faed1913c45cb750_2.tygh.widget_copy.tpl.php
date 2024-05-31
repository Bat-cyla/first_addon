<?php
/* Smarty version 4.1.1, created on 2024-05-31 13:29:25
  from '/app/www/design/backend/templates/common/widget_copy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659a685083363_51669000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4ed15b35194484ea72a515faed1913c45cb750' => 
    array (
      0 => '/app/www/design/backend/templates/common/widget_copy.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a685083363_51669000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('copied','copy'));
echo smarty_function_script(array('src'=>"js/tygh/backend/widget_copy.js"),$_smarty_tpl);?>

<div class="cm-widget-copy widget-copy <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['widget_copy_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value || $_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
        <div class="widget-copy__body">
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value) {?>
                <strong class="widget-copy__title"><?php echo $_smarty_tpl->tpl_vars['widget_copy_title']->value;?>
.</strong>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
                <span class="widget-copy__text"><?php echo $_smarty_tpl->tpl_vars['widget_copy_text']->value;?>
</span>
            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_code_text']->value) {?>
        <div class="widget-copy__code">
            <button class="cm-widget-copy__btn widget-copy__btn" data-title="<?php echo $_smarty_tpl->__("copied");?>
" type="button"><?php echo $_smarty_tpl->__("copy");?>
</button>
            <pre class="widget-copy__pre"><code class="cm-widget-copy__code-text widget-copy__code-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['widget_copy_code_text']->value, ENT_QUOTES, 'UTF-8');?>
</code></pre>
        </div>
    <?php }?>
</div><?php }
}
