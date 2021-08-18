<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:53:38
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711861015610e3c02159ff4-13494106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb33e4ab36194a676a6246590ed374dfb0bc1ce' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1711861015610e3c02159ff4-13494106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3c0215b884_22452400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3c0215b884_22452400')) {function content_610e3c0215b884_22452400($_smarty_tpl) {?><td width="16%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }} ?>
