<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:49:27
  from '/app/www/design/backend/templates/addons/newsletters/views/newsletters/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668faaa7410235_84481489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d92f860f125744117daf5696ac2dfbb2444ab7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/newsletters/manage.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 3,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_668faaa7410235_84481489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('newsletters','newsletter_templates','newsletter_autoresponders','subject','mailing_lists','date','status','subject','mailing_lists','date','edit','delete','status','no_data','add_newsletter','add_template','add_autoresponder'));
if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_names', $_smarty_tpl->__("newsletters"));
} elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_TEMPLATE') ? constant('NEWSLETTER_TYPE_TEMPLATE') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_names', $_smarty_tpl->__("newsletter_templates"));
} elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_AUTORESPONDER') ? constant('NEWSLETTER_TYPE_AUTORESPONDER') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_names', $_smarty_tpl->__("newsletter_autoresponders"));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="newsletters_form" enctype="multipart/form-data" id="newsletters_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="newsletter_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['newsletters']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "newsletters_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table-responsive">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="1%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <input type="checkbox"
                           class="bulkedit-toggler hide"
                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="40%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=subject&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("subject");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "subject") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></th>
                <?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value === (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
                    <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=mailing_lists&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("mailing_lists");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "mailing_lists") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></th>
                    <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></th>
                <?php }?>
                <th>&nbsp;</th>
                <th class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></th>
            </tr>
            </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsletters']->value, 'newsletter');
$_smarty_tpl->tpl_vars['newsletter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newsletter']->value) {
$_smarty_tpl->tpl_vars['newsletter']->do_else = false;
?>
                        <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['newsletter']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <td class="left mobile-hide">
                                <input type="checkbox" name="newsletter_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['newsletter']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("subject");?>
">
                                <a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("newsletters.update?newsletter_id=".((string)$_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['newsletter'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </td>
                            <?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
                                <td data-th="<?php echo $_smarty_tpl->__("mailing_lists");?>
">
                                    <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['newsletter']->value['mailing_list_names'] ?? null)===null||$tmp==='' ? " - " ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td data-th="<?php echo $_smarty_tpl->__("date");?>
" class="nowrap">
                                    <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['sent_date']) {?>
                                        <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsletter']->value['sent_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                                    <?php } else { ?>
                                    &nbsp;-&nbsp;
                                    <?php }?>
                                </td>
                            <?php }?>

                            <td class="nowrap right">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"newsletters.update?newsletter_id=".((string)$_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id'])), true);?>
</li>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"newsletters.delete?newsletter_id=".((string)$_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id']),'method'=>"POST"), true);?>
</li>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                </div>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("status");?>
" class="right" width="10%">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id'],'status'=>$_smarty_tpl->tpl_vars['newsletter']->value['status'],'items_status'=>fn_get_predefined_statuses("newsletters"),'object_id_name'=>"newsletter_id",'table'=>"newsletters",'popup_additional_class'=>"dropleft"), 0, true);
?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"newsletters_form",'object'=>"newsletters",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'newsletters_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"newsletters.add?type=".((string)(defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)),'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_newsletter")), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_TEMPLATE') ? constant('NEWSLETTER_TYPE_TEMPLATE') : null)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"newsletters.add?type=".((string)(defined('NEWSLETTER_TYPE_TEMPLATE') ? constant('NEWSLETTER_TYPE_TEMPLATE') : null)),'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_template")), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_AUTORESPONDER') ? constant('NEWSLETTER_TYPE_AUTORESPONDER') : null)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"newsletters.add?type=".((string)(defined('NEWSLETTER_TYPE_AUTORESPONDER') ? constant('NEWSLETTER_TYPE_AUTORESPONDER') : null)),'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_autoresponder")), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['object_names']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
