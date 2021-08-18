<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/adv_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651412442610e31c4d02e75-84769208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540fc78a4af168dc29fcc3b5b183a1310110dee5' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/adv_buttons.override.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1651412442610e31c4d02e75-84769208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c4d09f72_55857667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c4d09f72_55857667')) {function content_610e31c4d09f72_55857667($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_banner','graphic_banner','or','text_banner'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("ab__adv_buttons_tools_list", null, null); ob_start(); ?>
<li><?php ob_start();
echo $_smarty_tpl->__("add_banner");
$_tmp2=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("graphic_banner");
$_tmp3=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("or");
$_tmp4=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("text_banner");
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2." (".$_tmp3." ".$_tmp4." ".$_tmp5.")",'href'=>"banners.add"));?>
</li>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:ab__adv_buttons_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:ab__adv_buttons_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:ab__adv_buttons_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['ab__adv_buttons_tools_list'],'class'=>'','icon'=>"icon-plus"));?>
<?php }} ?>
