<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:53:38
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/companies/components/status_on_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774209263610e3c021e91e4-42157623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32129d7775a4b2d1b14335f857f774b5a5b60072' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/companies/components/status_on_manage.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1774209263610e3c021e91e4-42157623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'id' => 0,
    'status' => 0,
    'items_status' => 0,
    'runtime' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3c021f2a32_52100748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3c021f2a32_52100748')) {function content_610e3c021f2a32_52100748($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_vendor'));
?>


<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']===smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'dispatch'=>"companies.update_status"), 0);?>

<?php } elseif (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']!==smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'items_status'=>$_smarty_tpl->tpl_vars['items_status']->value,'object_id_name'=>"company_id",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'update_controller'=>"companies",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_vendor"),'status_target_id'=>"pagination_contents",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value)), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_status_switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company']->value), 0);?>

<?php }?><?php }} ?>
