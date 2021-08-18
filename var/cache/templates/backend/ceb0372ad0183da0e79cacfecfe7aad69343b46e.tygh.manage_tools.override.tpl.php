<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:46
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/manage_tools.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18463242546113fc9e7a8220-33671864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb0372ad0183da0e79cacfecfe7aad69343b46e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/manage_tools.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18463242546113fc9e7a8220-33671864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc9e7b9f80_46375480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc9e7b9f80_46375480')) {function content_6113fc9e7b9f80_46375480($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.add_product_from_catalog','master_products.create_new_product','add_product','add_product'));
?>
<!-- Overridden by the Common Products for Vendors add-on -->
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['addons']->value['master_products']['allow_vendors_to_create_products']=='Y') {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("master_products.add_product_from_catalog"),'href'=>"products.master_products"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("master_products.create_new_product"),'href'=>"products.add"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>

<?php } elseif (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['addons']->value['master_products']['allow_vendors_to_create_products']!='Y') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"products.master_products",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_product"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"products.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_product"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php }?><?php }} ?>
