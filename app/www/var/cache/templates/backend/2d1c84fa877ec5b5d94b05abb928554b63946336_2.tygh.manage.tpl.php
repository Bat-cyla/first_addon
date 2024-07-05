<?php
/* Smarty version 4.1.1, created on 2024-06-28 14:08:37
  from '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/views/cp_generate_cart_from_file/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e99b52f9a31_03847111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d1c84fa877ec5b5d94b05abb928554b63946336' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/views/cp_generate_cart_from_file/manage.tpl',
      1 => 1719490045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667e99b52f9a31_03847111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','name','date','default','id','name','date','default','edit','delete','no_data','cp_import_template','cp_uploaded_templates'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="templates_form" class="cm-processed-form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    
    <?php if ($_smarty_tpl->tpl_vars['templates']->value) {?>
    <table class="table table-middle content_templates">
        <thead>
            <tr>
                <th>
                    <?php echo $_smarty_tpl->__("id");?>

                </th>
                <th>
                    <?php echo $_smarty_tpl->__("name");?>

                </th>
                <th>
                    <?php echo $_smarty_tpl->__("date");?>

                </th>
                <th width="10%">
                    <?php echo $_smarty_tpl->__("default");?>

                </th>
                <th width="6%" class="mobile-hide">&nbsp;</th>
            </tr>
        </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
        <tr>
            <td id="template_id" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['template_id'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                <a class="row-status"
                href="<?php echo htmlspecialchars((string) fn_url("cp_generate_cart_from_file.update?template_id=".((string)$_smarty_tpl->tpl_vars['template']->value['template_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['template']->value), 0, true);
?>
            </td>
            <td width="15%" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                <div><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['template']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
            </td>
            <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("default");?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['default_template'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="6%" class="mobile-hide">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                    <li>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"cp_generate_cart_from_file.update?template_id=".((string)$_smarty_tpl->tpl_vars['template']->value['template_id'])), true);?>

                    </li>
                    <li>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"cp_generate_cart_from_file.delete?template_id=".((string)$_smarty_tpl->tpl_vars['template']->value['template_id']),'method'=>"POST"), true);?>

                    </li>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"cp_generate_cart_from_file.update",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("cp_import_template"),'icon'=>"icon-plus"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cp_uploaded_templates"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
