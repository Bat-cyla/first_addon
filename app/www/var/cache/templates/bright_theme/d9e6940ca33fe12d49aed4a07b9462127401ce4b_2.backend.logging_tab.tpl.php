<?php
/* Smarty version 4.1.1, created on 2024-06-28 09:50:27
  from '/app/www/design/backend/templates/views/debugger/components/logging_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e5d33a1f464_84746258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e6940ca33fe12d49aed4a07b9462127401ce4b' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/logging_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667e5d33a1f464_84746258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="deb-tab-content" id="DebugToolbarTabLoggingContent">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'checkpoint', false, 'name');
$_smarty_tpl->tpl_vars['checkpoint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['checkpoint']->value) {
$_smarty_tpl->tpl_vars['checkpoint']->do_else = false;
?>
    <div class="table-wrapper">
        <table class="deb-table">
            <caption><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</caption>
                <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('cur_memory', $_smarty_tpl->tpl_vars['checkpoint']->value['memory']-$_smarty_tpl->tpl_vars['previous']->value['memory']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_files', $_smarty_tpl->tpl_vars['checkpoint']->value['included_files']-$_smarty_tpl->tpl_vars['previous']->value['included_files']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_queries', $_smarty_tpl->tpl_vars['checkpoint']->value['queries']-$_smarty_tpl->tpl_vars['previous']->value['queries']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_time', $_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['previous']->value['time']);?>
                    <?php $_smarty_tpl->_assignInScope('total_time', $_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['first']->value['time']);?>
                <?php }?>
                <tr>
                    <th width="10%">Memory</th>
                    <th width="10%">Files</th>
                    <th width="10%"v>Queries</th>
                    <th width="10%">Time</th>
                </tr>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['cur_memory']->value), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_files']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_queries']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['cur_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['total_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
)</td>
                    <?php } else { ?>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>0</td>
                        <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['checkpoint']->value);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('previous', $_smarty_tpl->tpl_vars['checkpoint']->value);?>
                </tr>
        </table>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--DebugToolbarTabLoggingContent--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/logging_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/logging_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabLoggingContent">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'checkpoint', false, 'name');
$_smarty_tpl->tpl_vars['checkpoint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['checkpoint']->value) {
$_smarty_tpl->tpl_vars['checkpoint']->do_else = false;
?>
    <div class="table-wrapper">
        <table class="deb-table">
            <caption><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</caption>
                <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('cur_memory', $_smarty_tpl->tpl_vars['checkpoint']->value['memory']-$_smarty_tpl->tpl_vars['previous']->value['memory']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_files', $_smarty_tpl->tpl_vars['checkpoint']->value['included_files']-$_smarty_tpl->tpl_vars['previous']->value['included_files']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_queries', $_smarty_tpl->tpl_vars['checkpoint']->value['queries']-$_smarty_tpl->tpl_vars['previous']->value['queries']);?>
                    <?php $_smarty_tpl->_assignInScope('cur_time', $_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['previous']->value['time']);?>
                    <?php $_smarty_tpl->_assignInScope('total_time', $_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['first']->value['time']);?>
                <?php }?>
                <tr>
                    <th width="10%">Memory</th>
                    <th width="10%">Files</th>
                    <th width="10%"v>Queries</th>
                    <th width="10%">Time</th>
                </tr>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['cur_memory']->value), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_files']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_queries']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['cur_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['total_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
)</td>
                    <?php } else { ?>
                        <td><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>0</td>
                        <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['checkpoint']->value);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('previous', $_smarty_tpl->tpl_vars['checkpoint']->value);?>
                </tr>
        </table>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--DebugToolbarTabLoggingContent--></div><?php }
}
}
