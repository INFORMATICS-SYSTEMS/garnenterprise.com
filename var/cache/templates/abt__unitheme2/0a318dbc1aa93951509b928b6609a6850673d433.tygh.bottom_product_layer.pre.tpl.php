<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:27
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/social_buttons/hooks/products/bottom_product_layer.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2021807254610e32d3c48347-33851684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a318dbc1aa93951509b928b6609a6850673d433' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/social_buttons/hooks/products/bottom_product_layer.pre.tpl',
      1 => 1627896589,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2021807254610e32d3c48347-33851684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'provider_settings' => 0,
    'settings' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d3c560f6_38014722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d3c560f6_38014722')) {function content_610e32d3c560f6_38014722($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.addon_social_buttons.share','abt__ut2.addon_social_buttons.share'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['provider_settings']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_social_buttons']['view'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?><div class="ut2-pb__share-block"><div class="share-link"><i class="ut2-icon-share"></i><?php echo $_smarty_tpl->__("abt__ut2.addon_social_buttons.share");?>
</div><div class="ut2-social-buttons ut2-upload-block" data-ut2-object-type="product" data-ut2-object-dispatch="products.view" data-ut2-action="social_buttons" data-ut2-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div></div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/products/bottom_product_layer.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/products/bottom_product_layer.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['provider_settings']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_social_buttons']['view'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?><div class="ut2-pb__share-block"><div class="share-link"><i class="ut2-icon-share"></i><?php echo $_smarty_tpl->__("abt__ut2.addon_social_buttons.share");?>
</div><div class="ut2-social-buttons ut2-upload-block" data-ut2-object-type="product" data-ut2-object-dispatch="products.view" data-ut2-action="social_buttons" data-ut2-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div></div><?php }
}?><?php }} ?>
