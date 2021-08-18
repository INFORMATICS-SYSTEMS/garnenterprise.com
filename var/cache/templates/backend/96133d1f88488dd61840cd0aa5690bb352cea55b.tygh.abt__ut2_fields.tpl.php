<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/abt__ut2_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:920084448610e31cb5f88a9-00839335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96133d1f88488dd61840cd0aa5690bb352cea55b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/views/banners/components/abt__ut2_fields.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '920084448610e31cb5f88a9-00839335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'device' => 0,
    'device_prefix' => 0,
    'field' => 0,
    'enabled_fields' => 0,
    'elm' => 0,
    'disabled' => 0,
    'banner' => 0,
    'e' => 0,
    'content_bg' => 0,
    'how_to_opens' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb7a61b2_67581098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb7a61b2_67581098')) {function content_610e31cb7a61b2_67581098($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.banner.params_of_block','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params_of_title','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params_of_description','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','image','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params_of_button','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params_additional','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.','abt__ut2.banner.params.'));
?>
<?php $_smarty_tpl->tpl_vars['device_prefix'] = new Smarty_variable('', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['device']->value) {?>
<?php $_smarty_tpl->tpl_vars['device_prefix'] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['device']->value), null, 0);?>
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->__('abt__ut2.banner.warning');?>
</div>
<?php }?>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("abt__ut2.banner.params_of_block");?>
</h4>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("color_scheme", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('light','dark'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_valign", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<option value="top" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='top') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.top");?>
</option>
<option value="center" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='center'||!$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.center");?>
</option>
<option value="bottom" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='bottom') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.bottom");?>
</option>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_align", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<option value="left" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='left') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.left");?>
</option>
<option value="center" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='center'||!$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.center");?>
</option>
<option value="right" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]=='right') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.right");?>
</option>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("padding", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls cm-trim abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value])===null||$tmp==='' ? "20px 20px 20px 20px" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="25"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_full_width", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
</div>
</div>
<hr>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("abt__ut2.banner.params_of_title");?>
</h4>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls cm-trim abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
" size="25" class="span10"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title_font_size", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls cm-trim abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value])===null||$tmp==='' ? "18px" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-mini"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title_font_weight", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('300','400','700','900'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title_tag", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('div','h1','h2','h3'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("title_shadow", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
</div>
</div>
<hr>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("abt__ut2.banner.params_of_description");?>
</h4>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("description", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls cm-trim abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<textarea id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="35" rows="6" class="span10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("description_font_size", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls cm-trim abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value])===null||$tmp==='' ? "13px" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-small"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("description_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("description_bg_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_id']) {?>
<hr/>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("image");?>
</h4>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
function fn_change_object_type<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
(v) {
var img_obj = $('.control-group.object-image<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
');
var vd_obj = $('.control-group.object-video<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
');
switch (v){
case 'image':
img_obj.removeClass('hidden');
vd_obj.addClass('hidden');
break;
case 'video':
img_obj.addClass('hidden');
vd_obj.removeClass('hidden');
break;
}
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("object", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="fn_change_object_type(this.value);">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('image','video'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("main_image", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_object']!='image') {?> hidden<?php }?> object-image<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<div id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>$_smarty_tpl->tpl_vars['elm']->value,'image_object_type'=>"abt__ut2_banners",'image_type'=>smarty_modifier_enum("ImagePairTypes::MAIN"),'image_pair'=>$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value],'image_object_id'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_banner_image_id'],'no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("youtube_id", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_object']!='video') {?> hidden<?php }?> object-video<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-trim"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
" size="25" class="span4"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("youtube_autoplay", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>


<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_object']!='video') {?> hidden<?php }?> object-video<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("youtube_hide_controls", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>


<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_object']!='video') {?> hidden<?php }?> object-video<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("background_image", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<div id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>$_smarty_tpl->tpl_vars['elm']->value,'image_object_type'=>"abt__ut2_banners",'image_type'=>smarty_modifier_enum("ImagePairTypes::ADDITIONAL"),'image_pair'=>$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value],'image_object_id'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_banner_image_id'],'no_detailed'=>true,'hide_alt'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("background_image_size", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('cover','contain'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("background_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php }?>
<hr>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("abt__ut2.banner.params_of_button");?>
</h4>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 language="javascript">
function fn_button_use<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
(el) {
if (!el.checked){
Tygh.$('#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_text,#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_text_color,#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_color').addClass('hidden');
}else{
Tygh.$('#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_text,#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_text_color,#abt__ut2<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_button_color').removeClass('hidden');
}
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("button_use", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> onclick="fn_button_use<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device_prefix']->value, ENT_QUOTES, 'UTF-8');?>
(this);"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("button_text", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value["abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_button_use"]=='N') {?> hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-trim"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
" size="25"/>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("button_text_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value["abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_button_use"]=='N') {?> hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("button_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group<?php if ($_smarty_tpl->tpl_vars['banner']->value["abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_button_use"]=='N') {?> hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<hr>
<h4 class="ty-subheader"><?php echo $_smarty_tpl->__("abt__ut2.banner.params_additional");?>
</h4>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 language="javascript">
function fn_change_content_bg(e) {
var $ = Tygh.$;
var position = $('.content_bg_position');
var opacity = $('.content_bg_opacity');
var color = $('.content_bg_color');
switch (e.val()) {
case 'none':
position.addClass('hidden');
opacity.addClass('hidden');
color.addClass('hidden');
break;
case 'transparent':
position.removeClass('hidden');
opacity.removeClass('hidden');
color.addClass('hidden');
break;
case 'colored':
position.addClass('hidden');
opacity.addClass('hidden');
color.removeClass('hidden');
break;
}
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_bg", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['content_bg'] = new Smarty_variable($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="fn_change_content_bg($(this));">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('none','transparent','colored'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_bg_position", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!in_array($_smarty_tpl->tpl_vars['content_bg']->value,array('transparent'))) {?>hidden<?php }?>">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('only_under_content','whole_banner'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_bg_opacity", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!in_array($_smarty_tpl->tpl_vars['content_bg']->value,array('transparent'))) {?>hidden<?php }?>">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = range(10,80,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
%</option>
<?php } ?>
</select>
</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("content_bg_color", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!in_array($_smarty_tpl->tpl_vars['content_bg']->value,array('colored'))) {?>hidden<?php }?>">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".tooltip")), 0);?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("how_to_open", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php $_smarty_tpl->tpl_vars['how_to_opens'] = new Smarty_variable(array('in_this_window','in_new_window'), null, 0);?>
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['how_to_opens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 language="javascript">
function fn_activate_calendar(el) {
Tygh.$('#elm_banner_abt__ut2_avail_from').prop('disabled', !el.checked);
Tygh.$('#elm_banner_abt__ut2_avail_till').prop('disabled', !el.checked);
if (!el.checked){
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').addClass('hidden');
}else{
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').removeClass('hidden');
}
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("use_avail_period", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="hidden" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
<input type="checkbox" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> value="Y" onclick="fn_activate_calendar(this);"/>
</div>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("calendar_disable", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]!=smarty_modifier_enum("YesNo::YES")) {?>disabled="disabled"<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("avail_from", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_use_avail_period']=='N') {?>hidden<?php }?>" id="period_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_banner_".((string)$_smarty_tpl->tpl_vars['elm']->value),'date_name'=>"banner_data[".((string)$_smarty_tpl->tpl_vars['elm']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

</div>
</div>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("avail_till", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_use_avail_period']=='N') {?>hidden<?php }?>" id="period_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_banner_".((string)$_smarty_tpl->tpl_vars['elm']->value),'date_name'=>"banner_data[".((string)$_smarty_tpl->tpl_vars['elm']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

</div>
</div>
<hr>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("class", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="controls cm-trim"><div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>"></div>
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
" size="25" class="span10"/>
</div>
</div>
<hr>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("data_type", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<select name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.$('div[id*=data_type_]').addClass('hidden');Tygh.$('div[id*=data_type_' + this.value + ']').removeClass('hidden');">
<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = array('url'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value]==$_smarty_tpl->tpl_vars['e']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value).".variants.".((string)$_smarty_tpl->tpl_vars['e']->value));?>
</option>
<?php } ?>
</select>
</div>
</div>

<div id="data_type_url" class="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_data_type'])===null||$tmp==='' ? 'url' : $tmp)!='url') {?>hidden<?php }?>">
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable("url", null, 0);
$_smarty_tpl->tpl_vars['elm'] = new Smarty_variable("abt__ut2".((string)$_smarty_tpl->tpl_vars['device_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['field']->value), null, 0);
$_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(fn_abt__ut2_is_disabled_field($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['enabled_fields']->value), null, 0);?>
<div class="control-group">
<label for="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-trim <?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?>disabled<?php }?>"><?php echo $_smarty_tpl->__("abt__ut2.banner.params.".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</label>
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/use_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="overlay_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" class="controls abt-ut2-overlay<?php if ($_smarty_tpl->tpl_vars['disabled']->value||$_smarty_tpl->tpl_vars['banner']->value[((string)$_smarty_tpl->tpl_vars['elm']->value)."_use_own"]=='N') {?> active<?php }?>">
<input type="text" name="banner_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['elm']->value], ENT_QUOTES, 'UTF-8');?>
" size="25" class="span10"/>
</div>
</div>
</div><?php }} ?>
