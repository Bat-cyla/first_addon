<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:38:31
  from '/app/www/design/backend/templates/addons/gdpr/views/gdpr/get_user_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e987e42ed7_80943921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73b3cf47f1b0aaf81a76f42668f60171ad7ab8e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gdpr/views/gdpr/get_user_data.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6656e987e42ed7_80943921 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.export_to_xml','gdpr.text_anonymize_question','gdpr.anonymize','user_info','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','gdpr_'));
?>
<div id="content_gdpr_user_data">
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)"profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_meta'=>"cm-post",'target'=>"_blank",'but_href'=>"gdpr.export_to_xml?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value),'but_text'=>$_smarty_tpl->__("gdpr.export_to_xml")), 0, false);
?>
    <?php if (!$_smarty_tpl->tpl_vars['anonymized']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"btn cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable1),'text'=>$_smarty_tpl->__("gdpr.anonymize"),'method'=>"POST"), true);?>

    <?php }?>
    <table class="table table-sort table-middle table--relative">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->__("user_info");?>
</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gdpr_user_data']->value, 'user', false, 'item_name');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_name']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td>
                    <span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts"><span class="icon-caret-right"></span></span>
                    <span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts"><span class="icon-caret-down"></span></span>
                    <?php echo $_smarty_tpl->__("gdpr_".((string)$_smarty_tpl->tpl_vars['item_name']->value));?>

                </td>
            </tr>
            <tbody id="user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden row-more">
                <tr class="no-border">
                    <td colspan="3" class="row-more-body top row-gray">
                        <dl>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'field_values', false, 'field_name');
$_smarty_tpl->tpl_vars['field_values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value => $_smarty_tpl->tpl_vars['field_values']->value) {
$_smarty_tpl->tpl_vars['field_values']->do_else = false;
?>
                                <dt><b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
</b></dt>
                                <dd>
                                    <?php if ($_smarty_tpl->tpl_vars['field_name']->value == "orders_list") {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_values']->value, 'order_link', false, 'order_id');
$_smarty_tpl->tpl_vars['order_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order_id']->value => $_smarty_tpl->tpl_vars['order_link']->value) {
$_smarty_tpl->tpl_vars['order_link']->do_else = false;
?>
                                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
 </a>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php echo (($tmp = implode(" | ",(array) $_smarty_tpl->tpl_vars['field_values']->value) ?? null)===null||$tmp==='' ? "—" ?? null : $tmp);?>

                                    <?php }?>
                                </dd>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </dl>
                    </td>
                </tr>
            </tbody>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<!--content_gdpr_user_data--></div>
<?php }
}
