<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_filters/for_category/abt__ut2_selected_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:607918876610e3a920e5397-30546215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca75362011f6406708626a182f51e0638c86f07' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_filters/for_category/abt__ut2_selected_filters.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '607918876610e3a920e5397-30546215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'config' => 0,
    'curl' => 0,
    'block' => 0,
    'filter_base_url' => 0,
    'filter' => 0,
    'location' => 0,
    'reset_url' => 0,
    'ajax_div_ids' => 0,
    'value' => 0,
    'addons' => 0,
    'v' => 0,
    'fh' => 0,
    'min' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'max' => 0,
    'left' => 0,
    'right' => 0,
    'abt__selected' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a9214b757_51718890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a9214b757_51718890')) {function content_610e3a9214b757_51718890($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.filter.vendor_location_variant','reset','abt__ut2.filter.vendor_location_variant','reset'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->_capture_stack[0][] = array("abt__selected_filters", null, null); ob_start();
$_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", null, 0);
$_smarty_tpl->tpl_vars['curl'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);
$_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), null, 0);?><div class="ut2-selected-product-filters cm-product-filters"id="selected_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter_base_url']->value, null, 0);
$_smarty_tpl->tpl_vars['abt__selected'] = new Smarty_variable(false, null, 0);
$_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']||$_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->tpl_vars['abt__selected'] = new Smarty_variable(true, null, 0);
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==="Z") {
$_smarty_tpl->tpl_vars['location'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['location'], null, 0);
$_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['location']->value->toArray(), null, 0);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.filter.vendor_location_variant",array("[range]"=>$_smarty_tpl->tpl_vars['value']->value['radius'],"[suffix]"=>$_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit']));?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==="R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {
$_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['selected_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
$_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id'],$_smarty_tpl->tpl_vars['v']->value['variant_id']), null, 0);
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)), null, 0);
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php }
} elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)), null, 0);
}
$_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp)*(($tmp = @$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'])===null||$tmp==='' ? 1 : $tmp), null, 0);
$_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp)*(($tmp = @$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'])===null||$tmp==='' ? 1 : $tmp), null, 0);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['left']->value), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['right']->value), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['abt__selected']->value) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".ty-mainbox-title" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/for_category/abt__ut2_selected_filters.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/for_category/abt__ut2_selected_filters.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->_capture_stack[0][] = array("abt__selected_filters", null, null); ob_start();
$_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", null, 0);
$_smarty_tpl->tpl_vars['curl'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);
$_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), null, 0);?><div class="ut2-selected-product-filters cm-product-filters"id="selected_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter_base_url']->value, null, 0);
$_smarty_tpl->tpl_vars['abt__selected'] = new Smarty_variable(false, null, 0);
$_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']||$_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->tpl_vars['abt__selected'] = new Smarty_variable(true, null, 0);
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==="Z") {
$_smarty_tpl->tpl_vars['location'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['location'], null, 0);
$_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['location']->value->toArray(), null, 0);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.filter.vendor_location_variant",array("[range]"=>$_smarty_tpl->tpl_vars['value']->value['radius'],"[suffix]"=>$_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit']));?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==="R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {
$_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['selected_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
$_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id'],$_smarty_tpl->tpl_vars['v']->value['variant_id']), null, 0);
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)), null, 0);
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php }
} elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)), null, 0);
}
$_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp)*(($tmp = @$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'])===null||$tmp==='' ? 1 : $tmp), null, 0);
$_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp)*(($tmp = @$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'])===null||$tmp==='' ? 1 : $tmp), null, 0);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['left']->value), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['right']->value), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['abt__selected']->value) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".ty-mainbox-title" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}
}?><?php }} ?>
