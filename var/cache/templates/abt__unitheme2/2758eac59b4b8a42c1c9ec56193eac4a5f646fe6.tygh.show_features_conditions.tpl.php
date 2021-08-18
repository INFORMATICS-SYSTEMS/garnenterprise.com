<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/show_features_conditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:694582567610e3a927fd7a7-42140583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2758eac59b4b8a42c1c9ec56193eac4a5f646fe6' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/show_features_conditions.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '694582567610e3a927fd7a7-42140583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_features' => 0,
    'products' => 0,
    'settings' => 0,
    'tmpl' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a9281aff8_55500308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a9281aff8_55500308')) {function content_610e3a9281aff8_55500308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_features']->value)===null||$tmp==='' ? true : $tmp)) {?>
    
    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true), null, 0);?>
	
	
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit']>0&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='variations') {?>
		<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features_and_variations') {?>
		<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
		<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true), null, 0);?>

		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {?>
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],true), null, 0);?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/show_features_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/components/show_features_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_features']->value)===null||$tmp==='' ? true : $tmp)) {?>
    
    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true), null, 0);?>
	
	
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit']>0&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='variations') {?>
		<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features_and_variations') {?>
		<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
		<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true), null, 0);?>

		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {?>
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],true), null, 0);?>
<?php }
}?><?php }} ?>
