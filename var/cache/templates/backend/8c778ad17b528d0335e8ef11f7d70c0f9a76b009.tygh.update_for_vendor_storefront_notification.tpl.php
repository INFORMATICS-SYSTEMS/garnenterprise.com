<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:06:09
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12748786356113d9518906d5-82336540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c778ad17b528d0335e8ef11f7d70c0f9a76b009' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12748786356113d9518906d5-82336540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d9518932c8_65342636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d9518932c8_65342636')) {function content_6113d9518932c8_65342636($_smarty_tpl) {?><?php
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
<?php }} ?>
