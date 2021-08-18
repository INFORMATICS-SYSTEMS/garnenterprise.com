<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 12:30:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117639039610e52c8c8de85-15393087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b132b95bc7a1e0dd64474c05dacb51217fbefeee' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl',
      1 => 1627581748,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1117639039610e52c8c8de85-15393087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'locations' => 0,
    'country' => 0,
    'state' => 0,
    'city' => 0,
    'state_id' => 0,
    'country_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e52c8ca4864_05215689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e52c8ca4864_05215689')) {function content_610e52c8ca4864_05215689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['locations']->value) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['country_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['country_id']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_smarty_tpl->tpl_vars['state_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state_id']->value = $_smarty_tpl->tpl_vars['state']->key;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['state']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['locations']->value) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['country_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['country_id']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_smarty_tpl->tpl_vars['state_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state_id']->value = $_smarty_tpl->tpl_vars['state']->key;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['state']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
<?php }?>
<?php }?><?php }} ?>
