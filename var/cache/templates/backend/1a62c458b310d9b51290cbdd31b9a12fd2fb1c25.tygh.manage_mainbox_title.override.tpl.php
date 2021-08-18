<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5690525356113d924629f77-98948537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a62c458b310d9b51290cbdd31b9a12fd2fb1c25' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5690525356113d924629f77-98948537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92462d8e8_25737361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92462d8e8_25737361')) {function content_6113d92462d8e8_25737361($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php }} ?>
