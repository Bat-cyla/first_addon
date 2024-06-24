<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:11:15
  from '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f0463246b53_42284185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde436180e4d31153541f5835ef5c0b1766bf10c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f0463246b53_42284185 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.storefronts_update_for_vendor.title','vendor_plans.storefronts_update_for_vendor.general_message','vendor_plans.storefronts_update_for_vendor.add_storefronts_message','vendor_plans.storefronts_update_for_vendor.remove_storefronts_message'));
?>
<div class="hidden alert alert-block" data-ca-vendor-plans="updateVendorStorefrontVendorsNotification">

    <h4>
        <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.title");?>

    </h4>

    <div>
        <div>
            <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.general_message");?>

        </div>

        <div>
            <div data-ca-vendor-plans="updateVendorStorefrontVendorsAddNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[add_vendor_to_new_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.add_storefronts_message");?>

                </label>
            </div>

            <div data-ca-vendor-plans="updateVendorStorefrontVendorsRemoveNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[remove_vendor_from_old_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.remove_storefronts_message");?>

                </label>
            </div>
        </div>
    </div>
</div>
<?php }
}
