<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:33
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15524108426113fc91603cd5-60096270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d38a48f0c954b7ad3a95f08e06050606012e6e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15524108426113fc91603cd5-60096270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc91606757_63667834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc91606757_63667834')) {function content_6113fc91606757_63667834($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['_addon']->value==="reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
