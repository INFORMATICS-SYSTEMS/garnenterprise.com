<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5495013406113d92a642c46-89506084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3365f44f9f42b96f8e13df88d00c49d245135655' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5495013406113d92a642c46-89506084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92a646410_28456189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92a646410_28456189')) {function content_6113d92a646410_28456189($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
