<?php /* Smarty version Smarty-3.1.21, created on 2021-08-13 22:03:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11714635786116c1e78d82f6-57510189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696795b1edd86105f85b627c525565ea732c8993' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11714635786116c1e78d82f6-57510189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'allow_auto_detect' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6116c1e78e2ba6_39097964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6116c1e78e2ba6_39097964')) {function content_6116c1e78e2ba6_39097964($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('auto','semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['allow_auto_detect']->value) {?>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO")) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("auto");?>
</option>
    <?php }?>
    <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
    <option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select>
<?php }} ?>
