<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:06:09
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14499544736113d9518c62a9-44078794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4297f3189ed6baf52e9f8899f2b701bc3c6d6772' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/companies/tabs_content.post.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14499544736113d9518c62a9-44078794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'ab__mb_items' => 0,
    'ab__mb_item' => 0,
    '_key' => 0,
    'tmpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d9518d9b54_89669435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d9518d9b54_89669435')) {function content_6113d9518d9b54_89669435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__mb.description','no_data'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&(fn_check_view_permissions('ab__motivation_block.view','GET')||$_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status']!=smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
<div id="content_ab__motivation_block" class="hidden">
<?php if ($_smarty_tpl->tpl_vars['ab__mb_items']->value) {?>
<?php  $_smarty_tpl->tpl_vars["ab__mb_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ab__mb_item"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ab__mb_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ab__mb_item"]->key => $_smarty_tpl->tpl_vars["ab__mb_item"]->value) {
$_smarty_tpl->tpl_vars["ab__mb_item"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["ab__mb_item"]->key;
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:companies_motivation_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:companies_motivation_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['status']!=smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
<div style="margin: 20px 0">
<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>
<?php if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path']=='addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl') {?>
<input type="hidden" name="ab__mb_items[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][motivation_item_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" />
<div class="control-group">
<label class="control-label" for="ab__mb_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__mb.description");?>
:</label>
<div class="controls">
<textarea id="ab__mb_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="ab__mb_items[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="35" rows="8" class="<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type']=='html') {?>cm-wysiwyg <?php }?>input-large" style="width: calc(100% - 50px);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
<a data-ca-field="description" data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" class="btn ab__mb_restore_default" target="_blank" title="<?php echo $_smarty_tpl->__('ab__mb.set_default_value');?>
"><i class="icon-cog"></i></a>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable(array('status'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['vendor_status']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"ab__mb_items[".((string)$_smarty_tpl->tpl_vars['_key']->value)."][status]",'id'=>"ab__mb_".((string)$_smarty_tpl->tpl_vars['_key']->value)."_status",'obj_id'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'],'obj'=>$_smarty_tpl->tpl_vars['tmpl']->value,'hidden'=>false), 0);?>

<?php } else { ?>
<p class="no-items ty-mt-m text-center"><span style="display: inline-block; max-width: 70%;"><?php echo $_smarty_tpl->__('ab__mb.vendor.motivation_item.template_choosen');?>
</span></p>
<?php }?>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:companies_motivation_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
$('.ab__mb_restore_default').click(function () {
var btn = $(this);
var item_id = btn.data('caId');
var field = btn.data('caField');
if (item_id !== undefined && field !== undefined) {
$.ceAjax('request', fn_url("ab__motivation_block.get_default_value"), {
method: 'get',
data: {
motivation_item_id: item_id,
field: field
},
callback: function(data){
var input = btn.closest('.controls').find('*[name$="[' + field + ']"]');
if (data.value !== undefined && input.length) {
if (input.attr('type') === "checkbox") {
input.prop('checked', (data.value === <?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
));
} else {
input.val(data.value);
if (input.hasClass('cm-wysiwyg')) {
input.ceEditor('destroy');
input.ceEditor('recover');
}
$.ceEvent('trigger', 'ab__mb.restored_default', [ item_id, data.value ]);
}
}
}
});
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</div>
<?php }?>
<?php }} ?>
