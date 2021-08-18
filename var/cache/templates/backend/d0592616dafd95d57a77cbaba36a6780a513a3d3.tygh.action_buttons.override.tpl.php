<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:46
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/action_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3994166666113fc9e713e16-33794778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0592616dafd95d57a77cbaba36a6780a513a3d3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/action_buttons.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3994166666113fc9e713e16-33794778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_common_products_action_buttons' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc9e71a1e7_49526255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc9e71a1e7_49526255')) {function content_6113fc9e71a1e7_49526255($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_product_addition','export_found_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['show_common_products_action_buttons']->value) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_product_addition"),'href'=>"products.m_add"));?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_found_products"),'href'=>"products.export_found.master"));?>
</li>
    <?php }?>
<?php }?><?php }} ?>
