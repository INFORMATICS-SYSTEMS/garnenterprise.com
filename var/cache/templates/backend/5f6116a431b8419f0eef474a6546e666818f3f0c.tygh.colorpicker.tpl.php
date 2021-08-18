<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/theme_editor/components/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84993957610e31cb7f2d65-68032772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f6116a431b8419f0eef474a6546e666818f3f0c' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/theme_editor/components/colorpicker.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '84993957610e31cb7f2d65-68032772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_id' => 0,
    'cp_name' => 0,
    'cp_value' => 0,
    'cp_storage' => 0,
    'cp_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb7f7a64_04264490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb7f7a64_04264490')) {function content_610e31cb7f7a64_04264490($_smarty_tpl) {?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php }} ?>
