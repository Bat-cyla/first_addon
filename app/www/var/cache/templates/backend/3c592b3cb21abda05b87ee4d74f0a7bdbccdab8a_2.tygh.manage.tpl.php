<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab1037d2a0_68887953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c592b3cb21abda05b87ee4d74f0a7bdbccdab8a' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:views/setup_wizard/components/setup_wizard_form.tpl' => 1,
  ),
),false)) {
function content_6641ab1037d2a0_68887953 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.marketplace_setup_wizard'));
?>
<div class="setup-wizard-content" id="sw_wizard_container">
    <div class="hidden" id="sw_wizard_subcontainer">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, false);
?>

        <div class="wizard-title"><h1><?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>
</h1></div>

        <div class="liquid-slider" id="setup-wizard-main-slider">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setup_wizard']->value, 'tab', false, 'tab_id');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_id']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_tab">
                    <h2 class="title hidden"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['tab']->value['title']);?>
</h2>
                    <div class="head-wrap">
                        <div class="head-text">
                            <h3><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['tab']->value['header']);?>
</h3>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['extra']) {?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['extra'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['sections'] && !(($tmp = $_smarty_tpl->tpl_vars['tab']->value['show_section_in_extra'] ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/setup_wizard/components/setup_wizard_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                <!--sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_tab--></div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
<!--sw_wizard_container--></div>

<?php }
}
