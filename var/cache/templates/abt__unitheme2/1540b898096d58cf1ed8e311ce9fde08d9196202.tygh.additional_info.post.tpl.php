<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/additional_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:655530640610e3a930d58a1-51608129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1540b898096d58cf1ed8e311ce9fde08d9196202' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/additional_info.post.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '655530640610e3a930d58a1-51608129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a930e17f3_20078634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a930e17f3_20078634')) {function content_610e3a930e17f3_20078634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (($_smarty_tpl->tpl_vars['product']->value['avail_since']>(defined('TIME') ? constant('TIME') : null))) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/additional_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/additional_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (($_smarty_tpl->tpl_vars['product']->value['avail_since']>(defined('TIME') ? constant('TIME') : null))) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0);?>

<?php }
}?><?php }} ?>
