<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/status_name_container.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3393112896113fe2cde1269-41918517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17e48ac5adaa457f0f0f80eb6ff8445ce9a5c80' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/status_name_container.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3393112896113fe2cde1269-41918517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'items_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2cde9711_54727992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2cde9711_54727992')) {function content_6113fe2cde9711_54727992($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_unset_key')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.unset_key.php';
?><?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable(smarty_modifier_unset_key($_smarty_tpl->tpl_vars['items_status']->value,$_tmp1), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['items_status'] = clone $_smarty_tpl->tpl_vars['items_status'];?>
<?php }?><?php }} ?>
