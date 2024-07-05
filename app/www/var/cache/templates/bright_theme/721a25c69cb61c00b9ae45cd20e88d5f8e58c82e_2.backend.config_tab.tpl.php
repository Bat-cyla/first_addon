<?php
/* Smarty version 4.1.1, created on 2024-07-02 10:36:39
  from '/app/www/design/backend/templates/views/debugger/components/config_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683ae07dee046_46752860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721a25c69cb61c00b9ae45cd20e88d5f8e58c82e' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/config_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683ae07dee046_46752860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Config</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object' || $_smarty_tpl->tpl_vars['value']->value === 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource' || $_smarty_tpl->tpl_vars['value']->value === 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/config_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/config_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Config</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object' || $_smarty_tpl->tpl_vars['value']->value === 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource' || $_smarty_tpl->tpl_vars['value']->value === 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php }
}
}
