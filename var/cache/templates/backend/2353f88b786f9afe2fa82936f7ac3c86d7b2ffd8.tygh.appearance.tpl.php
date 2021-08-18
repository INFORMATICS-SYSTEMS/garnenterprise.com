<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:13:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__fast_navigation/block_settings/appearance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717940834610e32ac760188-05492056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2353f88b786f9afe2fa82936f7ac3c86d7b2ffd8' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__fast_navigation/block_settings/appearance.tpl',
      1 => 1627896058,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '717940834610e32ac760188-05492056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32ac763ef9_26724543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32ac763ef9_26724543')) {function content_610e32ac763ef9_26724543($_smarty_tpl) {?><select title="" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_content_ab__fn_common_btn_type" name="block_data[content][ab__fn_common_btn_type]">
<option value="ab__fn_cbt_btn"<?php if ($_smarty_tpl->tpl_vars['block']->value['content']['ab__fn_common_btn_type']=='ab__fn_cbt_btn') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__fn_cbt_as_btn');?>
</option>
<option value="ab__fn_cbt_text"<?php if ($_smarty_tpl->tpl_vars['block']->value['content']['ab__fn_common_btn_type']=='ab__fn_cbt_text') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__fn_cbt_as_txt');?>
</option>
</select><?php }} ?>
