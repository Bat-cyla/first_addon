<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:29
  from '/app/www/design/backend/templates/addons/form_builder/views/pages/components/pages_form_elements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e31ceb295_81474861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547e9466bac313864a49b2964b564445a74e4bc8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/form_builder/views/pages/components/pages_form_elements.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/form_builder/views/pages/components/element_types.tpl' => 2,
    'tygh:buttons/multiple_buttons.tpl' => 5,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
  ),
),false)) {
function content_66446e31ceb295_81474861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','type','required','status','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','name','type','required','status','position_short','variant','position_short','variant','position_short','variant','position_short','name','type','required','status','position_short','description','position_short','description'));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    function fn_check_element_type(elm, id, selectable_elements)
    {
        var $ = Tygh.$;
        var elem_id = id.replace('elm_', 'box_element_variants_');
        $('#' + elem_id).toggleBy(selectable_elements.indexOf(elm) == -1);

        // Hide description box for separator
        $('#descr_' + id).toggleBy((elm == 'D'));
        $('#hr_' + id).toggleBy((elm != 'D'));

        $('#req_' + id).prop('disabled', (elm == 'D' || elm == 'H'));
    }

    function fn_go_check_element_type(id, selectable_elements)
    {
        var $ = Tygh.$;
        var id = id || '';

        var c = parseInt(id.replace('add_elements', '').replace('_', ''));
        c = (isNaN(c))? 1 : c++;
        var c_id = c.toString();
        $('#elm_add_variants_' + c_id).trigger('change');
    }
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->_assignInScope('allow_save', true);
if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['page_data']->value,"pages"));
}?>

<div class="table-responsive-wrapper">
    <table class="table hidden-inputs table-middle table--relative table-responsive">
    <thead>
        <tr>
            <th width="3%">&nbsp;</th>
            <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th width="25%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th width="25%"><?php echo $_smarty_tpl->__("type");?>
</th>
            <th width="12%"><?php echo $_smarty_tpl->__("required");?>
</th>
            <th width="25%">&nbsp;</th>
            <th width="6%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element', false, NULL, 'fe_e', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe_e']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('num', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe_e']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe_e']->value['iteration'] : null));?>
    <tbody class="cm-row-item cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['element']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <tr>
        <td data-th="&nbsp;">
            <div id="on_box_element_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand btn cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-right"></span></div>
            <div id="off_box_element_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand btn hidden cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-down"></span> </div>
        </td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
            <input type="hidden" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][element_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input class="input-micro" type="text" size="3" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['position'], ENT_QUOTES, 'UTF-8');?>
" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <input id="descr_elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>hidden<?php }?>" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
" />
            <hr id="hr_elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" width="100%" <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] != (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>class="hidden"<?php }?> /></td>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/form_builder/views/pages/components/element_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('element_type'=>$_smarty_tpl->tpl_vars['element']->value['element_type'],'elm_id'=>$_smarty_tpl->tpl_vars['element']->value['element_id']), 0, true);
?></td>
        <td class="center" data-th="<?php echo $_smarty_tpl->__("required");?>
">
            <input type="hidden" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][required]" value="N" />
            <input id="req_elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if (strstr("HD",$_smarty_tpl->tpl_vars['element']->value['element_type'])) {?>disabled="disabled"<?php }?> name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][required]" value="Y" <?php if ($_smarty_tpl->tpl_vars['element']->value['required'] == "Y") {?>checked="checked"<?php }?> /></td>
        <td data-th="&nbsp;">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>"Y"), 0, true);
?>
        </td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['element']->value['element_id'],'prefix'=>"elm",'status'=>$_smarty_tpl->tpl_vars['element']->value['status'],'hidden'=>'','object_id_name'=>"element_id",'table'=>"form_options",'non_editable'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0, true);
?>
        </td>
    </tr>
    <tr id="box_element_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!substr_count($_smarty_tpl->tpl_vars['selectable_elements']->value,$_smarty_tpl->tpl_vars['element']->value['element_type'])) {?>hidden<?php }?> row-more row-gray hidden">
        <td>&nbsp;</td>
        <td colspan="5">
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead>
                    <tr class="cm-first-sibling">
                        <th width="5%" class="left"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                        <th><?php echo $_smarty_tpl->__("variant");?>
</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var', false, 'vnum');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vnum']->value => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                <tr class="cm-first-sibling cm-row-item">
                    <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                        <input type="hidden" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vnum']->value, ENT_QUOTES, 'UTF-8');?>
][element_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <input class="input-micro" size="3" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vnum']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['position'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                    <td data-th="<?php echo $_smarty_tpl->__("variant");?>
"><input type="text" class="span7" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vnum']->value, ENT_QUOTES, 'UTF-8');?>
][description]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                    <td data-th="&nbsp;">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>"Y"), 0, true);
?>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"vnum",'x'=>(($tmp = $_smarty_tpl->tpl_vars['vnum']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>

                <tr id="box_elm_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-row-item cm-elm-variants">
                    <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input class="input-micro" size="3" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vnum']->value, ENT_QUOTES, 'UTF-8');?>
][position]" /></td>
                    <td data-th="<?php echo $_smarty_tpl->__("variant");?>
"><input type="text" class="span7" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vnum']->value, ENT_QUOTES, 'UTF-8');?>
][description]" /></td>
                    <td data-th="&nbsp;">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"elm_variants_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'tag_level'=>"5"), 0, true);
?>
                    </td>
                </tr>
                </table>
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
    </tbody>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = $_smarty_tpl->tpl_vars['num']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>

    <tbody class="cm-row-item cm-row-status-a" id="box_add_elements">
    <tr class="no-border">
        <td data-th="&nbsp;">&nbsp;</td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
            <input class="input-micro" size="3" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <input id="descr_elm_add_variants" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" value="" />
            <hr id="hr_elm_add_variants" class="hidden" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/form_builder/views/pages/components/element_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('element_type'=>'','elm_id'=>"add_variants"), 0, true);
?></td>
        <td class="center" data-th="<?php echo $_smarty_tpl->__("required");?>
">
            <input type="hidden" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][required]" value="N" />
            <input id="req_elm_add_variants" type="checkbox" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][required]" value="Y" checked="checked" /></td>
        <td class="left" data-th="&nbsp;">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_elements",'on_add'=>"fn_go_check_element_type();"), 0, true);
?>
        </td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"page_data[form][elements_data][".((string)$_smarty_tpl->tpl_vars['num']->value)."][status]",'display'=>"popup"), 0, false);
?>
        </td>
    </tr>
    <tr id="box_element_variants_add_variants" class="row-more row-gray">
        <td>&nbsp;</td>
        <td colspan="5">
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead>
                    <tr class="cm-first-sibling">
                        <th width="5%" class="left"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                        <th><?php echo $_smarty_tpl->__("description");?>
</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tr id="box_elm_variants_add_variants" class="cm-row-item cm-elm-variants">
                    <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input class="input-micro" size="3" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][0][position]" /></td>
                    <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><input class="span7" type="text" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variants][0][description]" /></td>
                    <td data-th="&nbsp;">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"elm_variants_add_variants",'tag_level'=>"5"), 0, true);
?>
                    </td>
                </tr>
                </table>
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
    </tbody>


    </table>
</div>
<?php }
}
