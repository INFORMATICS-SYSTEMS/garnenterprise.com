<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:45:21
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3549448786113fea1707a76-99821767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae051ce2f971cebc2c7ae6e0e9f232622f6faab' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl',
      1 => 1627581750,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3549448786113fea1707a76-99821767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'selected_section' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fea1715309_13246718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fea1715309_13246718')) {function content_6113fea1715309_13246718($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="discussion") {?>hidden<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="discussion") {?>hidden<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0);?>

</div><?php }?><?php }} ?>
