<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:25:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517395480610e3573ca7388-89280982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e60d575f7e83d17a33dfbdce93fa0571767837b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl',
      1 => 1627662931,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '517395480610e3573ca7388-89280982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'status_settings' => 0,
    'order_info' => 0,
    'print_pdf_order' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3573cbb7b2_80553787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3573cbb7b2_80553787')) {function content_610e3573cbb7b2_80553787($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('print_pdf_invoice','print_pdf_credit_memo','print_pdf_order_details','print_pdf_invoice','print_pdf_credit_memo','print_pdf_order_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/pdf_documents/hooks/orders/details_tools.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/pdf_documents/hooks/orders/details_tools.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

<?php }?><?php }} ?>
