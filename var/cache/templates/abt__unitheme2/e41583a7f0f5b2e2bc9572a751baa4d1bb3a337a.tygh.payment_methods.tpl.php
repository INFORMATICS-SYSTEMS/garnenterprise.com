<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:19:10
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/blocks/lite_checkout/payment_methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754598450610e33ee588676-27628375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41583a7f0f5b2e2bc9572a751baa4d1bb3a337a' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/blocks/lite_checkout/payment_methods.tpl',
      1 => 1627581745,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1754598450610e33ee588676-27628375',
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
  'unifunc' => 'content_610e33ee591285_02700721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e33ee591285_02700721')) {function content_610e33ee591285_02700721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>false), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/payment_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/payment_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>false), 0);?>

<?php }?><?php }} ?>
