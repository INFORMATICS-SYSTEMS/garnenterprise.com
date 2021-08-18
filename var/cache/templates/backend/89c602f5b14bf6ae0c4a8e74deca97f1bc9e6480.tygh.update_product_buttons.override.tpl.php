<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20358015166113fca8c4a987-95599229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c602f5b14bf6ae0c4a8e74deca97f1bc9e6480' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20358015166113fca8c4a987-95599229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca8c509a3_42969775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca8c509a3_42969775')) {function content_6113fca8c509a3_42969775($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.sell_this'));
?>
<?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <!-- Overridden by the Common Products for Vendors add-on -->
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn btn-primary",'text'=>$_smarty_tpl->__("master_products.sell_this"),'href'=>"products.sell_master_product?master_product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'method'=>"post"));?>

<?php }?><?php }} ?>
