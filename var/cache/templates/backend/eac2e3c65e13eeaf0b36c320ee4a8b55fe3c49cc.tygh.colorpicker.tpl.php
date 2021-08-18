<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63041628610e31cb7e8df2-38874305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac2e3c65e13eeaf0b36c320ee4a8b55fe3c49cc' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/colorpicker.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63041628610e31cb7e8df2-38874305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'device_prefix' => 0,
    'field' => 0,
    'elm1' => 0,
    'banner' => 0,
    'elm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb7ef963_80099111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb7ef963_80099111')) {function content_610e31cb7ef963_80099111($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?>
<?php $_smarty_tpl->tpl_vars['elm1'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value)."_use", null, 0);?>
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm1']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm1']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm1']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm1']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> style="margin-right: 5px;"/>
<?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"banner_data[".((string)$_smarty_tpl->tpl_vars['elm']->value)."]",'cp_id'=>"elm_banner_".((string)$_smarty_tpl->tpl_vars['elm']->value),'cp_value'=>$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]), 0);?>
<?php }} ?>
