<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:19
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416236179610e2f0b79de38-41117767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba467d887132c2d5ebbc5eab4225116e2764bbd7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '416236179610e2f0b79de38-41117767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0b7a7734_65249655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0b7a7734_65249655')) {function content_610e2f0b7a7734_65249655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><input type="hidden" name="ab__stickers_output_side" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
"><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><input type="hidden" name="ab__stickers_output_side" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php }} ?>
