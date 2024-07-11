<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:29:15
  from '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e708b941983_09594540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfbfda978396a8247bef568dfa72027ba74d7f2f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/status.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
    'tygh:common/section.tpl' => 1,
  ),
),false)) {
function content_668e708b941983_09594540 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','gift_cert_from','gift_cert_to','email','gift_certificate_status','gift_cert_code'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "section", null, null);?>

<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="gift_certificates_search_form" method="get">
    
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
        <div class="sidebar-field">
            <label for="sender"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
            <input type="text" name="sender" id="sender" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" size="20">
        </div>
    
        <div class="sidebar-field">
            <label for="recipient"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
            <input type="text" name="recipient" id="recipient" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" size="20">
        </div>
    
       <div class="sidebar-field">
            <label for="email"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="25">
       </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
        <div class="group form-horizontal">
            <div class="control-group">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"gift_certificates_search_form"), 0, false);
?>
            </div>
        </div>
        
        <div class="group">
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("gift_certificate_status");?>
:</label>
                <div class="controls checkbox-list">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'status_type'=>(defined('STATUSES_GIFT_CERTIFICATE') ? constant('STATUSES_GIFT_CERTIFICATE') : null)), 0, false);
?>
                </div>
            </div>
        </div>
        
        <div class="group form-horizontal">
            <div class="control-group">
                <label  class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
                <div class="controls">
                    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30">
                </div>
            </div>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>"gift_certificates.manage",'view_type'=>"events"), 0, false);
?>

    </form>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'section')), 0, false);
}
}
