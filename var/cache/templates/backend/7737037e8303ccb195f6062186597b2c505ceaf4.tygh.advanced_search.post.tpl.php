<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/products/advanced_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134394112610e3bc748ffd5-48812017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7737037e8303ccb195f6062186597b2c505ceaf4' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/products/advanced_search.post.tpl',
      1 => 1627896314,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2134394112610e3bc748ffd5-48812017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc7497d51_03198484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc7497d51_03198484')) {function content_610e3bc7497d51_03198484($_smarty_tpl) {?><div class="group form-horizontal">
<div class="control-group">
<a href="#" class="search-link cm-combination cm-save-state open" id="sw_ab__stickers_product">
<span id="on_ab__stickers_product" class="icon-caret-right cm-save-state<?php if ($_COOKIE['ab__stickers_product']) {?> hidden<?php }?>"> </span>
<span id="off_ab__stickers_product" class="icon-caret-down cm-save-state<?php if (!$_COOKIE['ab__stickers_product']) {?> hidden<?php }?>"></span>
<?php echo $_smarty_tpl->__('ab__stickers.search_by');?>

</a>
<div id="ab__stickers_product"<?php if (!$_COOKIE['ab__stickers_product']) {?> class="hidden"<?php }?>>
<div class="table-wrapper table-responsive-wrapper">
<table class="table-responsive table-responsive--nopadding table-responsive--centered">
<thead>
<tr>
<td><strong><?php echo $_smarty_tpl->__('ab__stickers.attached_stickers');?>
</strong></td>
<td><strong><?php echo $_smarty_tpl->__('ab__stickers.generated_stickers');?>
</strong></td>
</tr>
</thead>
<tbody>
<tr class="delim" valign="top">
<td data-th="<?php echo $_smarty_tpl->__('ab__stickers.attached_stickers');?>
" width="350px">
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__stickers/views/ab__stickers/components/sticker_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ab__stickers_manual_stickers",'selected'=>$_smarty_tpl->tpl_vars['search']->value['ab__stickers_manual_ids'],'name'=>"ab__stickers_manual_ids"), 0);?>

</td>
<td data-th="<?php echo $_smarty_tpl->__('ab__stickers.generated_stickers');?>
" width="350px">
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__stickers/views/ab__stickers/components/sticker_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ab__stickers_generated_stickers",'selected'=>$_smarty_tpl->tpl_vars['search']->value['ab__stickers_generated_ids'],'name'=>"ab__stickers_generated_ids"), 0);?>

</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div><?php }} ?>
