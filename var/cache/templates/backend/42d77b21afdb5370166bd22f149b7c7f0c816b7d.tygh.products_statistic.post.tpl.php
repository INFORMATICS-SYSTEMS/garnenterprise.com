<?php /* Smarty version Smarty-3.1.21, created on 2021-08-09 08:56:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8353746636110c3a035def6-10825200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d77b21afdb5370166bd22f149b7c7f0c816b7d' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8353746636110c3a035def6-10825200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_data_premoderation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6110c3a0363826_13983924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110c3a0363826_13983924')) {function content_6110c3a0363826_13983924($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.disapproved'));
?>
<div class="dashboard-card">
    <div class="dashboard-card-title">
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    </div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>

<div class="dashboard-card">
    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproved");?>
</div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }} ?>
