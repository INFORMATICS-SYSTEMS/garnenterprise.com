<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/list_templates/grid_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743588954610e3a926674a7-59278749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3854856fb35be22e6f117959def20c801d0a1678' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/list_templates/grid_list.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1743588954610e3a926674a7-59278749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'show_empty' => 0,
    'columns' => 0,
    'tmpl' => 0,
    'settings' => 0,
    'show_add_to_cart' => 0,
    't1' => 0,
    't2' => 0,
    't3' => 0,
    't4' => 0,
    't5' => 0,
    't6' => 0,
    't7' => 0,
    't8' => 0,
    't9' => 0,
    'pd' => 0,
    'th' => 0,
    'pth' => 0,
    'item_number' => 0,
    'show_custom_class' => 0,
    'ut2_load_more' => 0,
    'splitted_products' => 0,
    'sproducts' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'thumbnails_size' => 0,
    'product_labels' => 0,
    'quick_view' => 0,
    'quick_nav_ids' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'hide_compare_list_button' => 0,
    'show_brand_logo' => 0,
    'b_feature' => 0,
    'rating' => 0,
    'sku' => 0,
    'cur_number' => 0,
    'name' => 0,
    'product_amount' => 0,
    'old_price' => 0,
    'price' => 0,
    'list_discount' => 0,
    'clean_price' => 0,
    'hide_form' => 0,
    'auth' => 0,
    'qty' => 0,
    'show_qty' => 0,
    'add_to_cart' => 0,
    'show_descr' => 0,
    'prod_descr' => 0,
    'show_features' => 0,
    'product_features' => 0,
    'form_close' => 0,
    'iteration' => 0,
    'empty_count' => 0,
    'product_height' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a927ed4e5_80864628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a927ed4e5_80864628')) {function content_610e3a927ed4e5_80864628($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_split')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('empty','empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['products']->value) {?>

	<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

	

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {?>
	    <?php $_smarty_tpl->tpl_vars['product_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], null, 0);?>

	    <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value||$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars['product_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]-38, null, 0);?>
	    <?php }?>
    <?php }?>

    

	    
	    <?php $_smarty_tpl->tpl_vars["pd"] = new Smarty_variable(42, null, 0);?>

	    
	    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp))+10, null, 0);?>

		
        <?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(22, null, 0);?>

		
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(16, null, 0);?>
	    <?php }?>

	    
	    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

	    
	    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp1 : $tmp)==smarty_modifier_enum("YesNo::YES")) {?>
    	    <?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(20, null, 0);?>
	    <?php }?>

	    
	    <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(36, null, 0);?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='N') {?>
	    	<?php $_smarty_tpl->tpl_vars["t7"] = new Smarty_variable(46, null, 0);?>
	    <?php }?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t8"] = new Smarty_variable(14, null, 0);?>
	    <?php }?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t9"] = new Smarty_variable(11, null, 0);?>
	    <?php }?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>

		
	    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(150, null, 0);?>

	    
	    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!=smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t7"] = new Smarty_variable(0, null, 0);?>
	    <?php }?>
	<?php }?>

	<?php $_smarty_tpl->tpl_vars['th'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t4']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t5']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t7']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t8']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t9']->value)===null||$tmp==='' ? 0 : $tmp)+$_smarty_tpl->tpl_vars['pd']->value, null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_gl_item_height", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	
	<?php $_smarty_tpl->tpl_vars['pth'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t8']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t9']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_pr_block_height", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value==smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
    <?php }?>

    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"), null, 0);?>
    <?php }?>

    <div class="grid-list <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
">
	    <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp2,'position'=>"top",'object'=>"products"), 0);
}?>
        <?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
 $_smarty_tpl->tpl_vars["sproducts"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->index++;
 $_smarty_tpl->tpl_vars["sproducts"]->first = $_smarty_tpl->tpl_vars["sproducts"]->index === 0;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['first'] = $_smarty_tpl->tpl_vars["sproducts"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->index++;
 $_smarty_tpl->tpl_vars["product"]->first = $_smarty_tpl->tpl_vars["product"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['first'] = $_smarty_tpl->tpl_vars["product"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['first']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['first']) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top"), 0);?>
<div class="ut2-gl__item" style="height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?> decolorize<?php }?>" style="min-height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><div class="ut2-gl__image" style="height:<?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp)), ENT_QUOTES, 'UTF-8');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'],'thumbnails_size'=>$_smarty_tpl->tpl_vars['thumbnails_size']->value,'show_gallery'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_gallery']==smarty_modifier_enum("YesNo::YES"),'lazy_load'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']==smarty_modifier_enum("YesNo::YES")), 0);
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons" <?php if (Smarty::$_smarty_vars['capture']['abt__service_buttons_id']) {?>id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']==smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']==smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);
}?><!--<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {
$_smarty_tpl->tpl_vars['b_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 0);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0);?>
</div><?php }
}?></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_rating")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__rating ut2-rating-stars <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>r-block<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:dotd_product_label")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'], ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!="D") {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_rating"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {
$_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];
}?><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value==smarty_modifier_enum("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']!=smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</div><div class="ut2-gl__amount"><?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>
</div><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount']||$_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_pr_block_height'];?>
px;"><div><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
$_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>
</div><div><?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>
</div></div><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><div class="ut2-gl__control<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['call_requests']['item_button']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES"))&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?> bt-2x<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?> ut2-view-qty<?php }?>"><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['show_qty']->value&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?><div class="ut2-gl__qty"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>
</div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];
}?><div class="ut2-gl__bottom"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['show_descr']->value) {?><div class="product-description"><?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='none') {?><div class="ut2-gl__feature"><?php $_smarty_tpl->tpl_vars["product_features"] = new Smarty_variable("product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_features']->value];?>
</div><?php }?></div></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['show_empty']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['last']) {
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['iteration'], null, 0);
$_smarty_tpl->_capture_stack[0][] = array("iteration", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value))); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['iteration'], null, 0);
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value!=0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['name'] = "empty_rows";
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total']);
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ty-product-empty" style="height: <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product_height']->value)+16, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product_height']->value), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
}?>px"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php endfor; endif;
}
}
} ?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp3,'position'=>"bottom",'object'=>"products"), 0);
}?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['products']->value) {?>

	<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

	

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {?>
	    <?php $_smarty_tpl->tpl_vars['product_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], null, 0);?>

	    <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value||$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars['product_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]-38, null, 0);?>
	    <?php }?>
    <?php }?>

    

	    
	    <?php $_smarty_tpl->tpl_vars["pd"] = new Smarty_variable(42, null, 0);?>

	    
	    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp))+10, null, 0);?>

		
        <?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(22, null, 0);?>

		
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(16, null, 0);?>
	    <?php }?>

	    
	    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

	    
	    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp4 : $tmp)==smarty_modifier_enum("YesNo::YES")) {?>
    	    <?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(20, null, 0);?>
	    <?php }?>

	    
	    <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(36, null, 0);?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='N') {?>
	    	<?php $_smarty_tpl->tpl_vars["t7"] = new Smarty_variable(46, null, 0);?>
	    <?php }?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t8"] = new Smarty_variable(14, null, 0);?>
	    <?php }?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']==smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t9"] = new Smarty_variable(11, null, 0);?>
	    <?php }?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>

		
	    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(150, null, 0);?>

	    
	    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

	    
	    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!=smarty_modifier_enum("YesNo::YES")) {?>
	    	<?php $_smarty_tpl->tpl_vars["t7"] = new Smarty_variable(0, null, 0);?>
	    <?php }?>
	<?php }?>

	<?php $_smarty_tpl->tpl_vars['th'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t4']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t5']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t7']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t8']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t9']->value)===null||$tmp==='' ? 0 : $tmp)+$_smarty_tpl->tpl_vars['pd']->value, null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_gl_item_height", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	
	<?php $_smarty_tpl->tpl_vars['pth'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t8']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t9']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_pr_block_height", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value==smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
    <?php }?>

    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"), null, 0);?>
    <?php }?>

    <div class="grid-list <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
">
	    <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp5,'position'=>"top",'object'=>"products"), 0);
}?>
        <?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
 $_smarty_tpl->tpl_vars["sproducts"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->index++;
 $_smarty_tpl->tpl_vars["sproducts"]->first = $_smarty_tpl->tpl_vars["sproducts"]->index === 0;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['first'] = $_smarty_tpl->tpl_vars["sproducts"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->index++;
 $_smarty_tpl->tpl_vars["product"]->first = $_smarty_tpl->tpl_vars["product"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['first'] = $_smarty_tpl->tpl_vars["product"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['first']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['first']) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top"), 0);?>
<div class="ut2-gl__item" style="height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?> decolorize<?php }?>" style="min-height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><div class="ut2-gl__image" style="height:<?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp)), ENT_QUOTES, 'UTF-8');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'],'thumbnails_size'=>$_smarty_tpl->tpl_vars['thumbnails_size']->value,'show_gallery'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_gallery']==smarty_modifier_enum("YesNo::YES"),'lazy_load'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']==smarty_modifier_enum("YesNo::YES")), 0);
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons" <?php if (Smarty::$_smarty_vars['capture']['abt__service_buttons_id']) {?>id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']==smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']==smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);
}?><!--<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {
$_smarty_tpl->tpl_vars['b_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 0);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0);?>
</div><?php }
}?></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_rating")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__rating ut2-rating-stars <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>r-block<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:dotd_product_label")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'], ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!="D") {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_rating"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {
$_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];
}?><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value==smarty_modifier_enum("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating']!=smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</div><div class="ut2-gl__amount"><?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>
</div><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount']||$_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo Smarty::$_smarty_vars['capture']['abt__ut2_pr_block_height'];?>
px;"><div><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
$_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>
</div><div><?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>
</div></div><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><div class="ut2-gl__control<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['call_requests']['item_button']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES"))&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?> bt-2x<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?> ut2-view-qty<?php }?>"><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['show_qty']->value&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?><div class="ut2-gl__qty"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>
</div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];
}?><div class="ut2-gl__bottom"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['show_descr']->value) {?><div class="product-description"><?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='none') {?><div class="ut2-gl__feature"><?php $_smarty_tpl->tpl_vars["product_features"] = new Smarty_variable("product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_features']->value];?>
</div><?php }?></div></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['show_empty']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['last']) {
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['iteration'], null, 0);
$_smarty_tpl->_capture_stack[0][] = array("iteration", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value))); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['iteration'], null, 0);
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value!=0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['name'] = "empty_rows";
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total']);
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ty-product-empty" style="height: <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]) {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product_height']->value)+16, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product_height']->value), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
}?>px"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php endfor; endif;
}
}
} ?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp6,'position'=>"bottom",'object'=>"products"), 0);
}?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
