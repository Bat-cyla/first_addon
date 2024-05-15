<?php
/* Smarty version 4.1.1, created on 2024-05-15 15:08:23
  from '/app/www/design/backend/templates/views/languages/components/install_languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644a5b7ee2327_36563946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddd3a21945685cf488a5fccb621ba7e5e74b714' => 
    array (
      0 => '/app/www/design/backend/templates/views/languages/components/install_languages.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6644a5b7ee2327_36563946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('language_code','name','country','language_code','name','country','install','no_items'));
?>
<div class="hidden" id="content_available_languages">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['langs_meta']->value) > 0) {?>
                <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_install_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) $_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead>
                    <tr class="cm-first-sibling">
                        <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
                        <th><?php echo $_smarty_tpl->__("name");?>
</th>
                        <th><?php echo $_smarty_tpl->__("country");?>
</th>
                        <th class="right">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs_meta']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("language_code");?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("country");?>
">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"flag flag-".((string)(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'])))),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td class="right" data-th="">
                            <?php ob_start();
echo htmlspecialchars((string) fn_url("languages.install?pack=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_prefixVariable1,'but_text'=>$_smarty_tpl->__("install"),'but_role'=>"action",'but_meta'=>"lowercase cm-post"), 0, true);
?>
                        </td>

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                </table>
            </div>

        </form>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
<!--content_available_languages--></div>
<?php }
}
