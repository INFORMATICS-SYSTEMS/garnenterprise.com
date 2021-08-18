<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:20
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_rating/hooks/companies/vendor_rating.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1802181739610e2f0cd0e812-23407739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f442845d5287c91edd308db300f80506914fae91' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/vendor_rating/hooks/companies/vendor_rating.post.tpl',
      1 => 1627581748,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1802181739610e2f0cd0e812-23407739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_vendor_rating' => 0,
    'company' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0cd19097_20817275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0cd19097_20817275')) {function content_610e2f0cd19097_20817275($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/hooks/companies/vendor_rating.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/hooks/companies/vendor_rating.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0);?>

<?php }
}?><?php }} ?>
