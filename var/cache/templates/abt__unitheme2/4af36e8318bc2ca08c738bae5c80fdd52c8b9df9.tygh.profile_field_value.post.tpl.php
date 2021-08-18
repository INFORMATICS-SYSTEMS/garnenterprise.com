<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:45:21
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/call_requests/hooks/companies/profile_field_value.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8955887396113fea14e3766-51703522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af36e8318bc2ca08c738bae5c80fdd52c8b9df9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/call_requests/hooks/companies/profile_field_value.post.tpl',
      1 => 1627581749,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8955887396113fea14e3766-51703522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field_id' => 0,
    'addons' => 0,
    'block' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fea14f7703_28340629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fea14f7703_28340629')) {function content_6113fea14f7703_28340629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.request_call','call_requests.request_call','call_requests.request_call','call_requests.request_call'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['field_id']->value==="phone"&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['enable_call_requests_for_vendors']==smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable("block", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id']),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/companies/profile_field_value.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/companies/profile_field_value.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['field_id']->value==="phone"&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['enable_call_requests_for_vendors']==smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable("block", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id']),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
<?php }
}?><?php }} ?>
