<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:25
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_templates/default_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513986009610e32d1573640-11988817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515934e8a3c2363c58f11768f5d94b131609afcf' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_templates/default_template.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '513986009610e32d1573640-11988817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'settings' => 0,
    'is_add_to_cart_mv' => 0,
    'hide_title' => 0,
    'no_images' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'addons' => 0,
    'tabs' => 0,
    '_tabs' => 0,
    'rating' => 0,
    'add_scroll' => 0,
    'discussion' => 0,
    'show_sku' => 0,
    'sku' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'price' => 0,
    'brand_feature' => 0,
    'product_amount' => 0,
    'capture_options_vs_qty' => 0,
    'product_options' => 0,
    'advanced_options' => 0,
    'product_edp' => 0,
    'min_qty' => 0,
    'qty' => 0,
    'capture_buttons' => 0,
    'show_details_button' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'show_short_descr' => 0,
    'form_close' => 0,
    'show_product_tabs' => 0,
    'tabs_block_id' => 0,
    'blocks' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d168b3f3_77687579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d168b3f3_77687579')) {function content_610e32d168b3f3_77687579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_render_block')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.render_block.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','reviews','write_review','write_review','view_details','add_to_cart','reviews','write_review','write_review','view_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['is_add_to_cart_mv'] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product']->value['master_product_id']||!$_smarty_tpl->tpl_vars['product']->value['company_id'])) {
$_smarty_tpl->tpl_vars['is_add_to_cart_mv'] = new Smarty_variable(false, null, 0);
}?>

<div class="ut2-pb ty-product-block ty-product-detail<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&!in_array($_smarty_tpl->tpl_vars['product']->value['zero_price_action'],array("P","A"))&&$_smarty_tpl->tpl_vars['product']->value['price']>0&&$_smarty_tpl->tpl_vars['product']->value['amount']>0&&$_smarty_tpl->tpl_vars['is_add_to_cart_mv']->value) {?> sticky_add_to_cart<?php }?>">
	
	<?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
		<h1 class="ut2-pb__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
	<?php }?>
	

	 <div class="ut2-breadcrumbs__wrapper">
		 <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ut2_main_info_breadcrumbs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			 <?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	 </div>

	<div class="ut2-pb__wrapper clearfix">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'product_labels_position'=>"right-top"), 0);?>


            <div class="ut2-pb__img-wrapper ty-product-block__img-wrapper">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>

                        <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update">
							<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>
	                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES"),'image_width'=>"288",'image_height'=>"288",'lazy_load'=>false,'thumbnails_size'=>50), 0);?>

	                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        	<?php } else { ?>
	                        	<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES"),'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>

	                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        	<?php }?>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bottom_product_layer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </div>
            <div class="ut2-pb__right">
                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                <div class="top-product-layer">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:discussion_rating_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total'],'button'=>true), 0);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D'&&$_smarty_tpl->tpl_vars['product']->value['discussion']['posts']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']>0) {?><div class="ut2-pb__rating"><div class="ty-discussion__rating-wrapper" id="average_rating_product"><?php $_smarty_tpl->tpl_vars['_tabs'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['tabs']->value,'html_id'), null, 0);
$_smarty_tpl->tpl_vars['add_scroll'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['_tabs']->value['discussion']||$_smarty_tpl->tpl_vars['_tabs']->value['discussion']['show_in_popup']!='Y', null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->tpl_vars['add_scroll']->value) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?></div></div><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?><div class="ut2-pb__rating"><div class="ty-discussion__rating-wrapper"><span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?></div></div><?php }
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['show_sku']->value=="true"&&$_smarty_tpl->tpl_vars['product']->value['product_code']) {?><div class="ut2-pb__sku"><?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</div><?php }?>
	            </div>

				<div class="cols-wrap">

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<div class="col-left">

	                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
	                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
	                        <div class="ty-product-prices">
	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
	                            <?php }?>

	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
	                                <div class="ut2-pb__price-actual">
	                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

	                                </div>
	                            <?php }?>

	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
	                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

	                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>


	                            <?php if ($_smarty_tpl->tpl_vars['product']->value['prices']) {?>
	                                <div class="ut2__qty-discounts"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_qty_discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	                            <?php }?>
	                        </div>
	                        <?php }?>

	                        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp1 : $tmp)==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand_default")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <div class="ut2-pb__product-brand">
                                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'feature_image'=>true,'feature_link'=>true), 0);?>

                                            </div>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand_default"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>
                            <?php }?>
	                    </div>

		                <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
						<?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                <div class="ut2-pb__option">
		                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

		                <div class="ut2-pb__advanced-option clearfix">
		                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

		                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
		                </div>

		                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                <div class="ut2-qty__wrap <?php if ($_smarty_tpl->tpl_vars['min_qty']->value&&$_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>min-qty<?php }?> ut2-pb__field-group">
		                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


		                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

		                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
		                <div class="ut2-pb__button ty-product-block__button">
		                    <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
		                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

		                    <?php }?>

		                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


		                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['show_short_descr']->value) {?>
                            <div class="ut2-pb__short-descr" <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
                        <?php }?>
                    </div>
					<div class="col-right">

	                	<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__motivation_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id'])) {?>
	                        <?php echo smarty_function_render_block(array('block_id'=>intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

	                    <?php }?>

						
	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:geo_maps")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:geo_maps"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
		                    <div class="ut2-pb__note">
		                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

		                    </div>
		                <?php }?>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
                            <div>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                            </div>
		                <?php }?>

		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	            	</div>
				</div>

				<?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
				<?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


				<?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
		            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		            <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

	            <?php }?>

			</div>
        <?php }?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']==smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:buy_together")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:buy_together"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs_pre")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

            <?php } else { ?>
                <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/default_template.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/default_template.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['is_add_to_cart_mv'] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product']->value['master_product_id']||!$_smarty_tpl->tpl_vars['product']->value['company_id'])) {
$_smarty_tpl->tpl_vars['is_add_to_cart_mv'] = new Smarty_variable(false, null, 0);
}?>

<div class="ut2-pb ty-product-block ty-product-detail<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&!in_array($_smarty_tpl->tpl_vars['product']->value['zero_price_action'],array("P","A"))&&$_smarty_tpl->tpl_vars['product']->value['price']>0&&$_smarty_tpl->tpl_vars['product']->value['amount']>0&&$_smarty_tpl->tpl_vars['is_add_to_cart_mv']->value) {?> sticky_add_to_cart<?php }?>">
	
	<?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
		<h1 class="ut2-pb__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
	<?php }?>
	

	 <div class="ut2-breadcrumbs__wrapper">
		 <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ut2_main_info_breadcrumbs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			 <?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	 </div>

	<div class="ut2-pb__wrapper clearfix">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'product_labels_position'=>"right-top"), 0);?>


            <div class="ut2-pb__img-wrapper ty-product-block__img-wrapper">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>

                        <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update">
							<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>
	                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES"),'image_width'=>"288",'image_height'=>"288",'lazy_load'=>false,'thumbnails_size'=>50), 0);?>

	                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        	<?php } else { ?>
	                        	<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES"),'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>

	                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        	<?php }?>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bottom_product_layer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </div>
            <div class="ut2-pb__right">
                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                <div class="top-product-layer">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:discussion_rating_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total'],'button'=>true), 0);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D'&&$_smarty_tpl->tpl_vars['product']->value['discussion']['posts']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']>0) {?><div class="ut2-pb__rating"><div class="ty-discussion__rating-wrapper" id="average_rating_product"><?php $_smarty_tpl->tpl_vars['_tabs'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['tabs']->value,'html_id'), null, 0);
$_smarty_tpl->tpl_vars['add_scroll'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['_tabs']->value['discussion']||$_smarty_tpl->tpl_vars['_tabs']->value['discussion']['show_in_popup']!='Y', null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->tpl_vars['add_scroll']->value) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?></div></div><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?><div class="ut2-pb__rating"><div class="ty-discussion__rating-wrapper"><span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?></div></div><?php }
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['show_sku']->value=="true"&&$_smarty_tpl->tpl_vars['product']->value['product_code']) {?><div class="ut2-pb__sku"><?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</div><?php }?>
	            </div>

				<div class="cols-wrap">

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<div class="col-left">

	                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
	                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
	                        <div class="ty-product-prices">
	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
	                            <?php }?>

	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
	                                <div class="ut2-pb__price-actual">
	                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

	                                </div>
	                            <?php }?>

	                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
	                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

	                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>


	                            <?php if ($_smarty_tpl->tpl_vars['product']->value['prices']) {?>
	                                <div class="ut2__qty-discounts"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_qty_discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	                            <?php }?>
	                        </div>
	                        <?php }?>

	                        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']])===null||$tmp==='' ? $_tmp2 : $tmp)==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand_default")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <div class="ut2-pb__product-brand">
                                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'feature_image'=>true,'feature_link'=>true), 0);?>

                                            </div>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand_default"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>
                            <?php }?>
	                    </div>

		                <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
						<?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                <div class="ut2-pb__option">
		                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

		                <div class="ut2-pb__advanced-option clearfix">
		                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

		                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
		                </div>

		                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
		                <div class="ut2-qty__wrap <?php if ($_smarty_tpl->tpl_vars['min_qty']->value&&$_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>min-qty<?php }?> ut2-pb__field-group">
		                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


		                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

		                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
		                <div class="ut2-pb__button ty-product-block__button">
		                    <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
		                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

		                    <?php }?>

		                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


		                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
		                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

		                </div>
		                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['show_short_descr']->value) {?>
                            <div class="ut2-pb__short-descr" <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
                        <?php }?>
                    </div>
					<div class="col-right">

	                	<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__motivation_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id'])) {?>
	                        <?php echo smarty_function_render_block(array('block_id'=>intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

	                    <?php }?>

						
	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:geo_maps")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:geo_maps"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
		                    <div class="ut2-pb__note">
		                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

		                    </div>
		                <?php }?>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
                            <div>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                            </div>
		                <?php }?>

		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	            	</div>
				</div>

				<?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
				<?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


				<?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
		            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		            <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

	            <?php }?>

			</div>
        <?php }?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']==smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:buy_together")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:buy_together"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs_pre")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

            <?php } else { ?>
                <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
