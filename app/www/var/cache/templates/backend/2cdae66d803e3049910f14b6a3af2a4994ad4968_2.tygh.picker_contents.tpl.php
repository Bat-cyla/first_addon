<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:54:37
  from '/app/www/design/backend/templates/pickers/users/picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fabdd1dc641_78981968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cdae66d803e3049910f14b6a3af2a4994ad4968' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/users/picker_contents.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/users_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_668fabdd1dc641_78981968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','id','email','person_name','registered','type','status','id','email','person_name','registered','type','administrator','vendor_administrator','customer','affiliate','status','disable','active','no_data','choose','add_users_and_close','add_users'));
if (!$_REQUEST['extra']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr((string)$_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    var display_type = '<?php echo strtr((string)$_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';

    $.ceEvent('on', 'ce.formpost_add_users_form', function(frm, elm) {
        var users = {};

        if ($('input.cm-item:checked', frm).length > 0) {

            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var item = $(this).parent().siblings();

                if (display_type == 'radio') {
                    users[id] = item.find('.user-name').text()
                } else {
                    users[id] = {
                        email: item.find('.user-email').text(),
                        user_name: item.find('.user-name').text()
                    };
                }
            });

            if (display_type == 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), users, 'u', {
                    '{user_id}': '%id',
                    '{user_name}': '%item'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), users, 'u', {
                    '{user_id}': '%id',
                    '{email}': '%item.email',
                    '{user_name}': '%item.user_name'
                });
                

                $.ceNotification('show', {
                    type: 'N',
                    title: _.tr('notice'),
                    message: _.tr('text_items_added'),
                    message_state: 'I'
                });
            }
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"profiles.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)(htmlspecialchars((string)$_REQUEST['data_id'], ENT_QUOTES, 'UTF-8', true)))."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" name="add_users_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <th width="1%" class="center">
            <?php if ($_REQUEST['display'] == "checkbox") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></th>
            <?php }?>
        <th><?php echo $_smarty_tpl->__("id");?>
</th>
        <th><?php echo $_smarty_tpl->__("email");?>
</th>
        <th><?php echo $_smarty_tpl->__("person_name");?>
</th>
        <th><?php echo $_smarty_tpl->__("registered");?>
</th>
        <th><?php echo $_smarty_tpl->__("type");?>
</th>
        <th class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
        <td class="left" data-th="">
            <?php if ($_REQUEST['display'] == "checkbox") {?>
            <input type="checkbox" name="add_users[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
            <?php } elseif ($_REQUEST['display'] == "radio") {?>
            <input type="radio" name="selected_user_id" class="cm-item" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td data-th="<?php echo $_smarty_tpl->__("email");?>
"><span class="user-email"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td data-th="<?php echo $_smarty_tpl->__("person_name");?>
"><span class="user-name"><?php if ($_smarty_tpl->tpl_vars['user']->value['firstname'] || $_smarty_tpl->tpl_vars['user']->value['lastname']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php }?></span></td>
        <td data-th="<?php echo $_smarty_tpl->__("registered");?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "A") {
echo $_smarty_tpl->__("administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "V") {
echo $_smarty_tpl->__("vendor_administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C") {
echo $_smarty_tpl->__("customer");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "P") {
echo $_smarty_tpl->__("affiliate");
}?></td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "D") {
echo $_smarty_tpl->__("disable");
} else {
echo $_smarty_tpl->__("active");
}?></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, true);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:picker_opts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:picker_opts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:picker_opts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="buttons-container">
    <?php if ($_REQUEST['display'] == "radio") {?>
        <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("choose"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("add_users_and_close"));?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("add_users"));?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
</div>

</form>
<?php }
}
