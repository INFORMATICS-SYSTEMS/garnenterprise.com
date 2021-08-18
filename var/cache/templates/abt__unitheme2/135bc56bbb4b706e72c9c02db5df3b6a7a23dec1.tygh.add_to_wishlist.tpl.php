<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:19
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:429734625610e2f0be248c9-65367168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135bc56bbb4b706e72c9c02db5df3b6a7a23dec1' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl',
      1 => 1627896589,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '429734625610e2f0be248c9-65367168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wishlist_button_type' => 0,
    'wishlist_but_id' => 0,
    'but_id' => 0,
    'wishlist_but_name' => 0,
    'but_name' => 0,
    'wishlist_but_title' => 0,
    'wishlist_but_meta' => 0,
    'wishlist_but_href' => 0,
    'but_href' => 0,
    'but_meta' => 0,
    'details_page' => 0,
    'but_title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0be48e23_71567876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0be48e23_71567876')) {function content_610e2f0be48e23_71567876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.add_to_wishlist.tooltip','add_to_wishlist','abt__ut2.add_to_wishlist.tooltip','add_to_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['wishlist_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value : $tmp), null, 0);?>

<a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
	<?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"

    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value=="icon") {?><i class="ut2-icon-baseline-favorite"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['wishlist_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value : $tmp), null, 0);?>

<a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
	<?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"

    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value=="icon") {?><i class="ut2-icon-baseline-favorite"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?>
</a><?php }?><?php }} ?>
