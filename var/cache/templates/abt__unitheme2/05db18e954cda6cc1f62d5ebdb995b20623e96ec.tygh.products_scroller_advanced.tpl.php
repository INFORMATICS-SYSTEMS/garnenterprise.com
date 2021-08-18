<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:17
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/products/products_scroller_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:543967432610e2f0977a322-05824891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05db18e954cda6cc1f62d5ebdb995b20623e96ec' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/products/products_scroller_advanced.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '543967432610e2f0977a322-05824891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'settings' => 0,
    'items' => 0,
    'tmpl' => 0,
    't1' => 0,
    't2' => 0,
    't3' => 0,
    'pth' => 0,
    'obj_prefix' => 0,
    'show_add_to_cart' => 0,
    'product' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'tbh' => 0,
    'tbw' => 0,
    'product_labels' => 0,
    'quick_nav_ids' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'hide_compare_list_button' => 0,
    'show_brand_logo' => 0,
    'b_feature' => 0,
    'rating' => 0,
    'sku' => 0,
    'item_number' => 0,
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
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f09893849_18815114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f09893849_18815114')) {function content_610e2f09893849_18815114($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp22=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp22 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp23=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_sku"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp23 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp24=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp24 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp25=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_brand_logo"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp25 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["hide_qty_label"] = new Smarty_variable(true, null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp26=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp26 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_amount_label"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>




<?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(37, null, 0);?>
	    

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
	<?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(15, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']==smarty_modifier_enum("YesNo::YES")) {?>
	<?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(15, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pth'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_pr_block_height", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars["tbw"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_width'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["tbh"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp), null, 0);?>




<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp27=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp27, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp28=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['block_id'] = $_tmp28;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list<?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?> no-buttons<?php }?> ut2-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__item<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?> out-of-stock<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top"), 0);
$_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body"><div class="ut2-gl__image <?php if (!$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>ut2-no-image<?php }?>" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbh']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px"><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbw']->value : $tmp),'image_height'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbh']->value : $tmp),'no_ids'=>true,'lazy_load'=>true), 0);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['main_icon'];
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons" <?php if (Smarty::$_smarty_vars['capture']['abt__service_buttons_id']) {?>id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
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
<div class="ut2-gl__rating ut2-rating-stars"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:dotd_product_label")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
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
</div></div><?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {
$_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><div class="ut2-gl__control<?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['call_requests']['item_button']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES"))&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?> bt-2x<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?> ut2-view-qty<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_qty']->value&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?><div class="ut2-gl__qty"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div></div><?php }?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp29=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp29 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp30=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_sku"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp30 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp31=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp31 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp32=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_brand_logo"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp32 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["hide_qty_label"] = new Smarty_variable(true, null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp33=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp33 : $tmp)==smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_amount_label"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>




<?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(37, null, 0);?>
	    

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
	<?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(15, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']==smarty_modifier_enum("YesNo::YES")) {?>
	<?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(15, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pth'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_pr_block_height", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars["tbw"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_width'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["tbh"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp), null, 0);?>




<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp34=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp34, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp35=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['block_id'] = $_tmp35;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list<?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?> no-buttons<?php }?> ut2-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__item<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?> out-of-stock<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top"), 0);
$_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body"><div class="ut2-gl__image <?php if (!$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>ut2-no-image<?php }?>" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbh']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px"><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbw']->value : $tmp),'image_height'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tbh']->value : $tmp),'no_ids'=>true,'lazy_load'=>true), 0);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['main_icon'];
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons" <?php if (Smarty::$_smarty_vars['capture']['abt__service_buttons_id']) {?>id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__service_buttons_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
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
<div class="ut2-gl__rating ut2-rating-stars"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:dotd_product_label")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
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
</div></div><?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {
$_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><div class="ut2-gl__control<?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['call_requests']['item_button']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES"))&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?> bt-2x<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?> ut2-view-qty<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_qty']->value&&strlen(trim(smarty_modifier_replace(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]),"&nbsp;",'')))) {?><div class="ut2-gl__qty"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div></div><?php }?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);
}?><?php }} ?>
