<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:25:41
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_communication/hooks/orders/tabs.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1679912807610e35758e36a6-47976196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e05842da48519f7ecd752a7a59f16cc2994ede3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_communication/hooks/orders/tabs.post.tpl',
      1 => 1627581748,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1679912807610e35758e36a6-47976196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_communication_order_thread' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e35758f3a24_05237853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e35758f3a24_05237853')) {function content_610e35758f3a24_05237853($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <div id="content_vendor_communication" data-ca-accordion-is-active-scroll-to-elm="0">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread_id'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['thread_id'],'messages'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['messages'],'redirect_url'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication"),'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/orders/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/orders/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <div id="content_vendor_communication" data-ca-accordion-is-active-scroll-to-elm="0">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread_id'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['thread_id'],'messages'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['messages'],'redirect_url'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication"),'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

    </div>
<?php }?>
<?php }?><?php }} ?>
