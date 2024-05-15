<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab106704f1_17389843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec3d013b47f124adc16f3d11f8c4b6057978412' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/design.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/storefronts/components/picker/presets.tpl' => 1,
    'tygh:buttons/button.tpl' => 3,
    'tygh:views/setup_wizard/components/fileuploader.tpl' => 1,
  ),
),false)) {
function content_6641ab106704f1_17389843 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','sw.selected_design','sw.edit_design','edit_content_on_site','sw.upload_logo','sw.logo_','sw.logo_','sw.logo_recommended_size_text','save','sw.select_right_design','sw.selected_design','sw.activate','no_themes_available'));
?>
<div id="sw_design_extra">

    <div class="sw-columns-block">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>array("current_url"=>fn_url("index.index")),'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'show_empty_variant'=>true,'empty_variant_text'=>$_smarty_tpl->__("all_vendors"),'selected_storefront_id'=>$_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id,'show_all_storefront'=>false,'storefront_picker_link_suffix'=>"#sw_wizard_opener"), 0, false);
?>
    </div>

    <div class="sw-columns-block sw-themes sw-theme-and-logo">
        <?php $_smarty_tpl->_assignInScope('theme', $_smarty_tpl->tpl_vars['available_themes']->value['current']);?>
        <?php $_smarty_tpl->_assignInScope('theme_name', $_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name']);?>
        <?php $_smarty_tpl->_assignInScope('style', $_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']]);?>

        <div class="first-column themes-available" id="sw_selected_design">
            <div>
                <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.selected_design");?>
</h2>
                <span class="pull-right sw-current-theme" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>

            <div class="theme theme-selected">
                <div class="theme-use">
                    <div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id']),'but_text'=>$_smarty_tpl->__("sw.edit_design"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"btn-primary cm-post"), 0, false);
?>
                    </div>
                    <div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable",'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-primary cm-post",'but_target'=>"_blank"), 0, true);
?>
                    </div>
                </div>
                <div class="sw-current-theme-preview">
                    <img class="screenshot" src="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['style']->value['image'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" alt="">
                </div>
            </div>
        <!--sw_selected_design--></div>

        <div class="second-column sw-logo-manage" id="sw_logos_form">
            <form name="logos_form" class="cm-ajax" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="dispatch" value="setup_wizard.update_logos" />
                <input type="hidden" name="result_ids" value="sw_logos_form" />
                <div class="sw-tabs cm-sw-tabs">
                    <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.upload_logo");?>
</h2>
                    <ul class="pull-right sw-pills">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['type']->value == "theme") {?>class="active"<?php }?>><a data-ca-target-id="elm_sw_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("sw.logo_".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("sw.logo_".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <br /><span>(<?php echo $_smarty_tpl->__("sw.logo_recommended_size_text",array("[height]"=>210,"[width]"=>45));?>
)</span>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>

                        <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value && $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id']);?>
                            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image']);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('id', 0);?>
                            <?php $_smarty_tpl->_assignInScope('image', array());?>
                        <?php }?>

                        <div class="<?php if ($_smarty_tpl->tpl_vars['type']->value != "theme") {?>hidden<?php }?> cm-sw-tab-contents" id="elm_sw_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="text" class="hidden" name="sw_logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                            <input type="text" class="hidden" name="sw_logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <div class="attach-images">
                                <div class="upload-box clearfix">

                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/setup_wizard/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"sw_logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0, true);
?>

                                    <div class="pull-right">
                                        <button class="btn btn-primary ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("save");?>
</span></button>
                                    </div>

                                    <div class="image-wrap pull-left">
                                        <div class="sw-image">
                                            <div class="sw-bg-image cm-sw-logo" data-ca-image-area="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;">
                                                <div class="cm-sw-dark-bg sw-dark-bg sw-bg-switcher"></div>
                                                <div class="cm-sw-light-bg sw-light-bg sw-bg-switcher"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </form>
        <!--sw_logos_form--></div>
    </div>

    <div class="sw-columns-block sw-themes sw-themes-list" id="sw_themes_form">

        <div class="themes-available">
            <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.select_right_design");?>
</h2>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_themes']->value['installed'], 'installed_theme', false, 'theme_name');
$_smarty_tpl->tpl_vars['installed_theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->value => $_smarty_tpl->tpl_vars['installed_theme']->value) {
$_smarty_tpl->tpl_vars['installed_theme']->do_else = false;
?>

                <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value) {?>

                    <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['styles']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_theme']->value['styles'], 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                            <div class="sw-theme-preview">

                                <div class="theme <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id'] == $_smarty_tpl->tpl_vars['layout']->value['style_id'] && $_smarty_tpl->tpl_vars['layout']->value['theme_name'] == $_smarty_tpl->tpl_vars['theme_name']->value) {?>theme-selected<?php }?>">
                                    <div class="theme-title">
                                        <span title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id'] == $_smarty_tpl->tpl_vars['layout']->value['style_id'] && $_smarty_tpl->tpl_vars['layout']->value['theme_name'] == $_smarty_tpl->tpl_vars['theme_name']->value) {?>
                                        <div class="theme-use">
                                            <div class="sw_selected_design_text">
                                                <span><?php echo $_smarty_tpl->__("sw.selected_design");?>
</span>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="theme-use">
                                            <div>
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"setup_wizard.update_themes?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)."&style=".((string)$_smarty_tpl->tpl_vars['style']->value['style_id']),'but_text'=>$_smarty_tpl->__("sw.activate"),'but_role'=>"action",'but_meta'=>"btn-primary ladda-button cm-ajax cm-post",'but_target_id'=>"sw_themes_form,sw_selected_design,sw_logos_form"), 0, true);
?>
                                                <div class="sw-notifications-box"></div>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['style']->value['image'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" alt="">
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php }?>
                <?php }?>

            <?php
}
if ($_smarty_tpl->tpl_vars['installed_theme']->do_else) {
?>
                <div class="no-items">
                    <?php echo $_smarty_tpl->__("no_themes_available");?>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    <!--sw_themes_form--></div>
<!--sw_design_extra--></div>
<?php }
}
