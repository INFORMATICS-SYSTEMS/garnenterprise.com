<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170075859610e3a93839c04-98737579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b47d4da77b862b25256a8a8cf2d74d3924ef1b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl',
      1 => 1627662932,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170075859610e3a93839c04-98737579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'filter' => 0,
    'filter_uid' => 0,
    'collapse' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a93850052_85766221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a93850052_85766221')) {function content_610e3a93850052_85766221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::REGION")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_region.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::ZONE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_zone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::REGION")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_region.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::ZONE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_zone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
