<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/use_own.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583745522610e31cb7c1ae4-98740503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c448e3a60a633efc9c9fae00bf1b6ab5bc8453a2' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/use_own.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1583745522610e31cb7c1ae4-98740503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'device' => 0,
    'field' => 0,
    'enabled_fields' => 0,
    'elm' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb7ca9e1_37478187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb7ca9e1_37478187')) {function content_610e31cb7ca9e1_37478187($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><div class="abt-ut2-banner-use-own-value <?php if ($_smarty_tpl->tpl_vars['device']->value) {?>for_device<?php }?>">
<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value)&&$_smarty_tpl->tpl_vars['device']->value) {?>
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
_use_own]" value="N"/>
<input type="checkbox"
name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
_use_own]"
id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
_use_own"
data-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
"
value="Y"
<?php if ($_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
class="cm-tooltip"
title="<?php echo $_smarty_tpl->__('abt__ut2.banner.use_own_info');?>
"
/>
<?php } elseif ($_smarty_tpl->tpl_vars['device']->value) {?>
<input type="checkbox"
checked="checked"
class="cm-tooltip"
disabled="disabled"
title="<?php echo $_smarty_tpl->__('abt__ut2.banner.use_own_info');?>
"
/>
<?php }?>
</div>
<?php }} ?>
