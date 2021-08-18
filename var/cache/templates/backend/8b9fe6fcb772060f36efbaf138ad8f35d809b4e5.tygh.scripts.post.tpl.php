<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:734686226610e2efe2e0e11-01980294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9fe6fcb772060f36efbaf138ad8f35d809b4e5' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '734686226610e2efe2e0e11-01980294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe2e34f0_23741560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe2e34f0_23741560')) {function content_610e2efe2e34f0_23741560($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='ab__motivation_block') {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/admin.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
