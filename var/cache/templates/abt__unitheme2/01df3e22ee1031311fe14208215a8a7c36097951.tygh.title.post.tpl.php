<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:41
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/theme_editor/title.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750365679610e2f2119b180-51171758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01df3e22ee1031311fe14208215a8a7c36097951' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/theme_editor/title.post.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '750365679610e2f2119b180-51171758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'current_style' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f211a4b40_31064445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f211a4b40_31064445')) {function content_610e2f211a4b40_31064445($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><input type="hidden" name="style[abt__ut2_parent_style]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php echo htmlspecialchars(fn_abt__ut2_get_empty_core_color_variables(true), ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/theme_editor/title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/theme_editor/title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><input type="hidden" name="style[abt__ut2_parent_style]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php echo htmlspecialchars(fn_abt__ut2_get_empty_core_color_variables(true), ENT_QUOTES, 'UTF-8');
}?><?php }} ?>
