<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:20
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:400402367610e2f0c522c02-76365528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14dcbbbbf1913af7aa2c31eaafd2c0d999e7b80b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '400402367610e2f0c522c02-76365528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'icon_play' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0c530771_80525262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0c530771_80525262')) {function content_610e2f0c530771_80525262($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['icon_play'] = new Smarty_variable('icon', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->tpl_vars['icon_play']->value!="icon") {?>
    	<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0);?>

    <?php } else { ?>
    	<i class="ut2-icon-youtube ab__vg-icon-video "></i>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['icon_play'] = new Smarty_variable('icon', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->tpl_vars['icon_play']->value!="icon") {?>
    	<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0);?>

    <?php } else { ?>
    	<i class="ut2-icon-youtube ab__vg-icon-video "></i>
    <?php }?>
<?php }
}?><?php }} ?>
