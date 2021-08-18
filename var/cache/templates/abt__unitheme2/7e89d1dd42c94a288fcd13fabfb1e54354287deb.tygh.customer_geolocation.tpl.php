<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 12:30:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/geo_maps/views/geo_maps/customer_geolocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1355905596610e52c8a3c1c4-23354686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e89d1dd42c94a288fcd13fabfb1e54354287deb' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/geo_maps/views/geo_maps/customer_geolocation.tpl',
      1 => 1627581748,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1355905596610e52c8a3c1c4-23354686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e52c8a7c0b8_16832284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e52c8a7c0b8_16832284')) {function content_610e52c8a7c0b8_16832284($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.location_detection_disabled','ok','geo_maps.location_detection_disabled','ok'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"geo_maps:customer_location_selector")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->__("geo_maps.location_detection_disabled");?>

    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->__("ok")), 0);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/customer_geolocation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/views/geo_maps/customer_geolocation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"geo_maps:customer_location_selector")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->__("geo_maps.location_detection_disabled");?>

    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->__("ok")), 0);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }?><?php }} ?>
