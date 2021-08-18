<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:05
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:432885555610e2efd661768-07768567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97c64be9ca7effc886b00eb8a03e882602482ec' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '432885555610e2efd661768-07768567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efd6650e6_86206801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efd6650e6_86206801')) {function content_610e2efd6650e6_86206801($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_name']->value=='abt__unitheme2') {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
<?php echo Smarty::$_smarty_vars['capture']['add_new_picker'];?>

<hr>
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->__('abt__ut2.clone_theme');?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }} ?>
