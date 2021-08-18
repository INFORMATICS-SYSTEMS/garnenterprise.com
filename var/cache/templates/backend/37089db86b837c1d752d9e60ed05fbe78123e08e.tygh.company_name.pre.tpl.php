<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:46
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/companies/company_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7574128906113fc9ed1e676-30310841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37089db86b837c1d752d9e60ed05fbe78123e08e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/companies/company_name.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7574128906113fc9ed1e676-30310841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc9ed237f8_21111693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc9ed237f8_21111693')) {function content_6113fc9ed237f8_21111693($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.all_vendors_master_product'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['object']->value['company_id']&&$_smarty_tpl->tpl_vars['object']->value['product_id']&&!$_smarty_tpl->tpl_vars['clone']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('object', null, 1);
$_smarty_tpl->tpl_vars['object']->value['company_name'] = $_smarty_tpl->__("master_products.all_vendors_master_product");
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['object'] = clone $_smarty_tpl->tpl_vars['object'];?>
<?php }?><?php }} ?>
