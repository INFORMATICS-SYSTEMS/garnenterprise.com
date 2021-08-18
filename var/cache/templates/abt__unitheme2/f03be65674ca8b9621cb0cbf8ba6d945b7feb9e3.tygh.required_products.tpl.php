<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/required_products/blocks/product_tabs/required_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389168994610e32d68d51d2-56392629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03be65674ca8b9621cb0cbf8ba6d945b7feb9e3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/required_products/blocks/product_tabs/required_products.tpl',
      1 => 1627896589,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1389168994610e32d68d51d2-56392629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'settings' => 0,
    'columns' => 0,
    'tmpl' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d69267a7_39904937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d69267a7_39904937')) {function content_610e32d69267a7_39904937($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='grid_list') {?>
	
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], null, 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'columns'=>$_smarty_tpl->tpl_vars['columns']->value,'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features','show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='description','show_brand_logo'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='product_list') {?>
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_without_options', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_product_options'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='compact_list') {?>
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('short_list', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>
	
	<?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/blocks/product_tabs/required_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/blocks/product_tabs/required_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='grid_list') {?>
	
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], null, 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'columns'=>$_smarty_tpl->tpl_vars['columns']->value,'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features','show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='description','show_brand_logo'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='product_list') {?>
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_without_options', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_product_options'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='compact_list') {?>
		<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('short_list', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>
	
	<?php }?>
<?php }?>
<?php }?><?php }} ?>
