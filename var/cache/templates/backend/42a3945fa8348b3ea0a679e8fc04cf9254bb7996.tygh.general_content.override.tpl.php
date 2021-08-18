<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/general_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244109827610e31cb2cd968-31710306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a3945fa8348b3ea0a679e8fc04cf9254bb7996' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/general_content.override.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1244109827610e31cb2cd968-31710306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'device' => 0,
    'field' => 0,
    'disabled' => 0,
    'elm' => 0,
    'id' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb2eb256_70102700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb2eb256_70102700')) {function content_610e31cb2eb256_70102700($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','position_short','type','banner_type.','abt__ut2.banner.params.','abt__ut2.banner.params.','creation_date'));
?>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['type']==(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)||$_REQUEST['type']==(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)) {?>
<input type="hidden" class="" name="selected_section" id="selected_section">
<?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_image_id']) {?>
<input type="hidden" class="" name="banner_data[banner_image_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner_image_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:general_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:general_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
<label for="elm_banner_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
<div class="controls">
<input type="text" name="banner_data[banner]" id="elm_banner_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" /></div>
</div>
<?php if (fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"banner_data[company_id]",'id'=>"banner_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['banner']->value['company_id']), 0);?>

<?php }?>
<div class="control-group">
<label for="elm_banner_position" class="control-label"><?php echo $_smarty_tpl->__("position_short");?>
</label>
<div class="controls">
<input type="text" name="banner_data[position]" id="elm_banner_position" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['banner']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="3"/>
</div>
</div>
<div class="control-group">
<label for="elm_banner_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("type");?>
</label>
<div class="controls">
<select name="banner_data[type]" id="elm_banner_type">
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']==(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("banner_type.".((string)(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)));?>
</option>
</select>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/abt__ut2_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<hr/>
<?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_from = array('tablet','mobile'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['device']->value)."_use", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?> hidden<?php }?>">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<div class="controls">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
</div>
</div>
<?php } ?>
<hr/>
<div class="control-group">
<label class="control-label" for="elm_banner_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_banner_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"banner_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['banner']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"banner_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['banner']->value['localization']), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"banner_data[status]",'id'=>"elm_banner_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['banner']->value,'hidden'=>true), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:general_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
