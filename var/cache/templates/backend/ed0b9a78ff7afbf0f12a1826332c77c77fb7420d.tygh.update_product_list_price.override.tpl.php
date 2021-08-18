<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18792247536113d92ae03020-67265204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed0b9a78ff7afbf0f12a1826332c77c77fb7420d' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18792247536113d92ae03020-67265204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92ae05206_17674208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92ae05206_17674208')) {function content_6113d92ae05206_17674208($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_price")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
