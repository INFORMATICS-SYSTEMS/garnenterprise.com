<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/views/ab__stickers/components/sticker_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1307674619610e3bc749d875-90512470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db272d4eebcc6f3e5be5bb275236282d48899b2' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/views/ab__stickers/components/sticker_select.tpl',
      1 => 1627896314,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1307674619610e3bc749d875-90512470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected' => 0,
    'name' => 0,
    'id' => 0,
    'sticker_id' => 0,
    'ab__stickers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc74a3be1_05532001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc74a3be1_05532001')) {function content_610e3bc74a3be1_05532001($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__stickers.find_available_stickers'));
?>
<?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>
<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value=""/>
<?php }?>
<div class="object-selector" style="width: 320px;">
<select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
class="cm-object-selector"
name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]"
multiple
data-ca-load-via-ajax="true"
data-ca-placeholder="<?php echo $_smarty_tpl->__("ab__stickers.find_available_stickers");?>
"
data-ca-enable-search="true"
data-ca-enable-images="true"
data-ca-image-width="30"
data-ca-image-height="30"
data-ca-close-on-select="false"
data-ca-page-size="100"
data-ca-data-url="<?php echo fn_url("ab__stickers.get_stickers_objects");?>
">
<?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>
<?php  $_smarty_tpl->tpl_vars['sticker_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sticker_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sticker_id']->key => $_smarty_tpl->tpl_vars['sticker_id']->value) {
$_smarty_tpl->tpl_vars['sticker_id']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__stickers']->value[$_smarty_tpl->tpl_vars['sticker_id']->value]['name_for_admin'], ENT_QUOTES, 'UTF-8');?>
</option>
<?php } ?>
<?php }?>
</select>
</div><?php }} ?>
