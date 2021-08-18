<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17881928976113d92c3196a4-59448423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dd0a15dad74e281610205484f963b5f98651e37' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/products/tabs_content.post.tpl',
      1 => 1627896314,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17881928976113d92c3196a4-59448423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ab_stickers_hide_inputs' => 0,
    'id' => 0,
    'product_data' => 0,
    'sticker_id' => 0,
    'ab__stickers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92c324c71_86164021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92c324c71_86164021')) {function content_6113d92c324c71_86164021($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__stickers.added_by_addon','no_data'));
?>
<?php $_smarty_tpl->tpl_vars['ab_stickers_hide_inputs'] = new Smarty_variable(!fn_check_view_permissions("ab__stickers.edit"), null, 0);?>
<div class="hidden<?php if ($_smarty_tpl->tpl_vars['ab_stickers_hide_inputs']->value) {?> cm-hide-inputs<?php }?>" id="content_ab__stickers">
<p class="muted"><?php echo $_smarty_tpl->__("ab__stickers.added_by_addon");?>
</p>
<div class="control-group">
<label class="control-label" for="ab__stickers_manual_stickers_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('ab__stickers.attached_stickers');?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__('ab__stickers.attached_stickers.product_page.tooltip')), 0);?>
:
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__stickers/views/ab__stickers/components/sticker_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ab__stickers_manual_stickers_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['ab__stickers_manual_ids'],'name'=>"product_data[ab__stickers_manual_ids]"), 0);?>

</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__stickers_generated_stickers_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('ab__stickers.generated_stickers');?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__('ab__stickers.generated_stickers.product_page.tooltip')), 0);?>
:
</label>
<div class="controls">
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['ab__stickers_generated_ids']) {?>
<table>
<tbody>
<?php  $_smarty_tpl->tpl_vars['sticker_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sticker_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_data']->value['ab__stickers_generated_ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sticker_id']->key => $_smarty_tpl->tpl_vars['sticker_id']->value) {
$_smarty_tpl->tpl_vars['sticker_id']->_loop = true;
?>
<tr>
<td>
<a href="<?php echo htmlspecialchars(fn_url("ab__stickers.update?sticker_id=".((string)$_smarty_tpl->tpl_vars['sticker_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__stickers']->value[$_smarty_tpl->tpl_vars['sticker_id']->value]['name_for_admin'], ENT_QUOTES, 'UTF-8');?>
</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
<span style="padding-top: 5px; display: inline-block;"><?php echo $_smarty_tpl->__("no_data");?>
</span>
<?php }?>
</div>
</div>
</div><?php }} ?>
