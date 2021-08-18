<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__video_gallery/hooks/products/advanced_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504571193610e3bc74866e0-71867605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c807c551d5e750ad3225eedbc3cb8387b5a77d' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__video_gallery/hooks/products/advanced_search.post.tpl',
      1 => 1627896122,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '504571193610e3bc74866e0-71867605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc748bf80_56444941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc748bf80_56444941')) {function content_610e3bc748bf80_56444941($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__vg.products_search.with_video'));
?>
<div class="row-fluid">
<div class="group span6 ">
<a id="sw_ab__vg_products_search" class="search-link cm-combination cm-save-state">
<span id="on_ab__vg_products_search" class="icon-caret-right<?php if ($_COOKIE['ab__vg_products_search']) {?> hidden<?php }?>"></span>
<span id="off_ab__vg_products_search" class="icon-caret-down<?php if (!$_COOKIE['ab__vg_products_search']) {?> hidden<?php }?>"></span>
<?php echo $_smarty_tpl->__('ab__video_gallery');?>

</a>
<div class="form-horizontal<?php if (!$_COOKIE['ab__vg_products_search']) {?> hidden<?php }?>" id="ab__vg_products_search">
<div class="control-group" style="margin-top: 15px;">
<label for="ab__vg_products_with_video" class="control-label"><?php echo $_smarty_tpl->__("ab__vg.products_search.with_video");?>
</label>
<div class="controls">
<input type="hidden" name="ab__vg_products_with_video" value="N" />
<input type="checkbox" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['ab__vg_products_with_video']=="Y") {?> checked="checked"<?php }?> name="ab__vg_products_with_video" id="ab__vg_products_with_video" />
</div>
</div>
</div>
</div>
</div><?php }} ?>
