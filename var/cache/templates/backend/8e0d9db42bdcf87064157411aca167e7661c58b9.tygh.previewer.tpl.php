<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:05
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328737855610e2efd1043c6-62421371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e0d9db42bdcf87064157411aca167e7661c58b9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl',
      1 => 1627896335,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '328737855610e2efd1043c6-62421371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efd108a54_39474274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efd108a54_39474274')) {function content_610e2efd108a54_39474274($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
?><!--override with ab__image_previewers-->
<?php if (fn_ab__ip_is_ab_previewer()) {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php } else { ?>
<?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
