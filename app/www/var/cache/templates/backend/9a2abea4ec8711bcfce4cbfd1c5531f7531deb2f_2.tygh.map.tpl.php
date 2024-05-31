<?php
/* Smarty version 4.1.1, created on 2024-05-31 14:14:12
  from '/app/www/design/backend/templates/addons/store_locator/pickers/map.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659b104071468_59126387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a2abea4ec8711bcfce4cbfd1c5531f7531deb2f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/pickers/map.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6659b104071468_59126387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_coordinates','cancel','set'));
?>
<div class="hidden" id="map_picker" title="<?php echo $_smarty_tpl->__("select_coordinates");?>
">
    <?php $_smarty_tpl->_assignInScope('initial_latitude', doubleval($_smarty_tpl->tpl_vars['store_location']->value['latitude']));?>
    <?php if (!$_smarty_tpl->tpl_vars['initial_latitude']->value) {?>
        <?php $_smarty_tpl->_assignInScope('initial_latitude', doubleval((defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null)));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('initial_longitude', doubleval($_smarty_tpl->tpl_vars['store_location']->value['longitude']));?>
    <?php if (!$_smarty_tpl->tpl_vars['initial_longitude']->value) {?>
        <?php $_smarty_tpl->_assignInScope('initial_longitude', doubleval((defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null)));?>
    <?php }?>

    <div class="cm-geo-map-container map-canvas" id="map_picker_container" style="height: 100%;"
         data-ca-geo-map-initial-lat="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['initial_latitude']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-initial-lng="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['initial_longitude']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-language="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-marker-selector=".cm-store-locator-map-marker"
         data-ca-geo-map-controls-enable-zoom="true"
         data-ca-geo-map-controls-enable-fullscreen="true"
         data-ca-geo-map-controls-enable-layers="true"
         data-ca-geo-map-controls-enable-ruler="true"
         data-ca-geo-map-behaviors-enable-drag="true"
         data-ca-geo-map-behaviors-enable-drag-on-mobile="true"
         data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
         data-ca-geo-map-behaviors-enable-multi-touch="true"
    ></div>

    <form name="map_picker" action="" method="">
        <div class="buttons-container">
            <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("set"),'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-closer cm-map-save-location"), 0, false);
?>
            <?php }?>
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['latitude'] && $_smarty_tpl->tpl_vars['store_location']->value['longitude']) {?>
        <div class="cm-store-locator-map-marker hidden"
             data-ca-geo-map-marker-lat="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geo-map-marker-lng="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/map.js"),$_smarty_tpl);?>

<?php }
}
