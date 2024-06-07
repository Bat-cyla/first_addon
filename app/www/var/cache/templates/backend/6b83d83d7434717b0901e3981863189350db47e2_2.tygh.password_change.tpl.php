<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:32:35
  from '/app/www/design/backend/templates/views/auth/password_change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f09636e9658_71130862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b83d83d7434717b0901e3981863189350db47e2' => 
    array (
      0 => '/app/www/design/backend/templates/views/auth/password_change.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_665f09636e9658_71130862 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','error_password_expired','email','password','confirm_password','save','sign_out'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class="signin-modal__form cm-skip-check-items">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
">

        <div class="modal-header">
            <h4 class="signin-modal__form-header"><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->__("error_password_expired");?>
</p>
            <label><?php echo $_smarty_tpl->__("email");?>
:</label>
            <div id="email" class="input-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</div>
            <label for="password1" class="signin-modal__form-label cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
            <input class="signin-modal__form-field cm-autocomplete-off" type="password" id="password1" name="user_data[password1]" size="20" maxlength="32" value="            ">

            <label for="password2" class="signin-modal__form-label cm-required"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
            <input class="signin-modal__form-field cm-autocomplete-off" type="password" id="password2" name="user_data[password2]" size="20" maxlength="32" value="            ">
        </div>
        <div class="modal-footer signin-modal__footer">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[auth.password_change]",'but_role'=>"button_main"), 0, false);
?>
            <a href="<?php echo htmlspecialchars((string) fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        </div>
    </form>
</div><?php }
}
