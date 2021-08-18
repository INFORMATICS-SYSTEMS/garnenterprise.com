<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:53:38
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:689322537610e3c0215eac5-09340860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26e701663b26a0c0b4583d8f233fb2efbfd360d' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '689322537610e3c0215eac5-09340860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3c0215fe22_08719806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3c0215fe22_08719806')) {function content_610e3c0215fe22_08719806($_smarty_tpl) {?><td width="7%" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
