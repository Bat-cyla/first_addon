<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/setup_wizard_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab103d5ee5_58039714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d024a79c1a18134945a59188b749312fcfac615' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/setup_wizard_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/setup_wizard/components/settings_fields.tpl' => 2,
  ),
),false)) {
function content_6641ab103d5ee5_58039714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('sw.activate','save'));
?>
<div id="setup_wizard_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form">
    <form name="setup_wizard_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form_elm" class="form-horizontal cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="dispatch" value="setup_wizard.update" />
        <input type="hidden" name="result_ids" value="setup_wizard_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form" />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['sections'], 'sect', false, 'sect_id');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect_id']->value => $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
            <div class="sw-columns-block">
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['template']) {?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['sect']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                    <?php continue 1;?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
                    <div class="control-group">
                        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['show_submit_button'] === smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="pull-right">
                        <button class="btn btn-primary btn-large ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("sw.activate");?>
</span></button>
                        <div class="sw-notifications-box"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['decoration_class']) {?>
                    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['decoration_class'], ENT_QUOTES, 'UTF-8');?>
"></div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['hidden_items']) {?>
                    <div class="sw-toggle-hidden" ><a id="sw_sect_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="#" class="cm-combination"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['sect']->value['show_hidden_text']);?>
</a></div>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/setup_wizard/components/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->tpl_vars['item']->value['decoration_class']),'item'=>$_smarty_tpl->tpl_vars['item']->value['setting_data'],'html_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name']),'html_name'=>"settings[".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name'])."]",'label_extra'=>$_smarty_tpl->tpl_vars['item']->value['label_extra'],'placeholder'=>$_smarty_tpl->tpl_vars['item']->value['placeholder'],'field_extra_description'=>$_smarty_tpl->tpl_vars['item']->value['field_extra_description'],'field_extra_link'=>$_smarty_tpl->tpl_vars['item']->value['field_extra_link']), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div id="sect_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['hidden_items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/setup_wizard/components/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->tpl_vars['item']->value['decoration_class']),'item'=>$_smarty_tpl->tpl_vars['item']->value['setting_data'],'html_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name']),'html_name'=>"settings[".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name'])."]"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_submit_button'] !== smarty_modifier_enum("YesNo::NO")) {?>
            <div class="apply-button">
                <button class="btn btn-primary btn-large ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("save");?>
</span></button>
                <span class="sw-notifications-box"></span>
            </div>
        <?php }?>
    </form>
<!--setup_wizard_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form--></div><?php }
}
