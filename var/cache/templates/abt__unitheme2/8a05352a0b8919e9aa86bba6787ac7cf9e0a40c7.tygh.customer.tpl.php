<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:24:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/views/checkout/components/steps/customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235327599610e354814e564-26953456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a05352a0b8919e9aa86bba6787ac7cf9e0a40c7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/views/checkout/components/steps/customer.tpl',
      1 => 1627581745,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '235327599610e354814e564-26953456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_title' => 0,
    'show_address' => 0,
    'show_information' => 0,
    'show_notes' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3548161362_60595344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3548161362_60595344')) {function content_610e3548161362_60595344($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_title']->value||$_smarty_tpl->tpl_vars['show_address']->value||$_smarty_tpl->tpl_vars['show_information']->value||$_smarty_tpl->tpl_vars['show_notes']->value) {?>
    <div class="litecheckout__container litecheckout__step">
        <div class="litecheckout__section">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_information']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_notes']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_title']->value||$_smarty_tpl->tpl_vars['show_address']->value||$_smarty_tpl->tpl_vars['show_information']->value||$_smarty_tpl->tpl_vars['show_notes']->value) {?>
    <div class="litecheckout__container litecheckout__step">
        <div class="litecheckout__section">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_information']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_notes']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>
