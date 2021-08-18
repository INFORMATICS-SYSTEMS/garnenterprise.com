<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:19
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/product_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1640583092610e2f0b9e3fd9-86331020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39d870faddfb5ef8dfc8d312ebd413a491f5c8c' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/product_data.post.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1640583092610e2f0b9e3fd9-86331020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'obj_id' => 0,
    'selected_layout' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0b9f4759_35564560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0b9f4759_35564560')) {function content_610e2f0b9f4759_35564560($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("abt__service_buttons_id", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['block']->value['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();?><?php echo htmlspecialchars(str_replace("/","_",substr((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['template'])===null||$tmp==='' ? '' : $tmp),0,-4)), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp48=ob_get_clean();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected_layout']->value)===null||$tmp==='' ? $_tmp48 : $tmp), ENT_QUOTES, 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("abt__service_buttons_id", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['block']->value['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();?><?php echo htmlspecialchars(str_replace("/","_",substr((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['template'])===null||$tmp==='' ? '' : $tmp),0,-4)), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp49=ob_get_clean();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected_layout']->value)===null||$tmp==='' ? $_tmp49 : $tmp), ENT_QUOTES, 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
