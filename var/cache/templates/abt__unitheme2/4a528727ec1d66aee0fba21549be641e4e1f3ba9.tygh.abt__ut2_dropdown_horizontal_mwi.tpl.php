<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1706606905610e2f08a746b2-65077009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a528727ec1d66aee0fba21549be641e4e1f3ba9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1706606905610e2f08a746b2-65077009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f08a7f219_84077519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f08a7f219_84077519')) {function content_610e2f08a7f219_84077519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/abt__ut2_dropdown_horizontal_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/abt__ut2_dropdown_horizontal_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0);
}?><?php }} ?>
