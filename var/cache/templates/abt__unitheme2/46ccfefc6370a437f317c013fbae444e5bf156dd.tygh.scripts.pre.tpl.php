<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:22
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/scripts.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:566467691610e2f0e29e8a2-65529869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ccfefc6370a437f317c013fbae444e5bf156dd' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/scripts.pre.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '566467691610e2f0e29e8a2-65529869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0e2c3a76_23370495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0e2c3a76_23370495')) {function content_610e2f0e2c3a76_23370495($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 data-no-defer>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',temporary: { },}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_light_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_lazy_load.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['use_swipe_to_close_filters'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_swipe_menu.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['push_history_on_popups'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_history_on_popups.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 data-no-defer>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',temporary: { },}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_light_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_lazy_load.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['use_swipe_to_close_filters'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]==smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_swipe_menu.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['push_history_on_popups'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_history_on_popups.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
