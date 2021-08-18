<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:13:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__fast_navigation/block_settings/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2099582969610e32ac7476f5-38912677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '321d4a567c954ec4100de1df361f48566ffd7882' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__fast_navigation/block_settings/show.tpl',
      1 => 1627896058,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2099582969610e32ac7476f5-38912677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32ac749b01_17880910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32ac749b01_17880910')) {function content_610e32ac749b01_17880910($_smarty_tpl) {?><input type="hidden" name="block_data[content][ab__fn_show_common_btn]" value='N' />
<input title="" type="checkbox" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_content_ab__fn_show_common_btn" name="block_data[content][ab__fn_show_common_btn]" value='Y'<?php if ($_smarty_tpl->tpl_vars['block']->value['content']['ab__fn_show_common_btn']=="Y") {?> checked="checked"<?php }?> class="checkbox" /><?php }} ?>
