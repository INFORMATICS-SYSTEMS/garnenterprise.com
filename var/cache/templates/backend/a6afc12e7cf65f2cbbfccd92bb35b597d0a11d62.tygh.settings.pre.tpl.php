<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:11:38
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/block_manager_update_grid/settings.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1337878969610e322a207da5-15338167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6afc12e7cf65f2cbbfccd92bb35b597d0a11d62' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/block_manager_update_grid/settings.pre.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1337878969610e322a207da5-15338167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'elm_id' => 0,
    'grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e322a2204e0_23389019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e322a2204e0_23389019')) {function content_610e322a2204e0_23389019($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.grid_settings','abt__ut2.grid.padding','abt__ut2.grid.padding.variants.top','abt__ut2.grid.padding.variants.bottom','abt__ut2.grid.padding.variants.top_bottom','abt__ut2.grid.padding.variants.none','full_width','abt__ut2.extended.o','abt__ut2.extended.e','abt__ut2.extended.f','abt__ut2.grid_tabs.abt__ut2_show_in_tabs','abt__ut2.grid_tabs.abt__ut2_use_ajax'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=='abt__unitheme2') {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("abt__ut2.grid_settings"),'target'=>"#abt__ut2_grid_settings_".((string)$_smarty_tpl->tpl_vars['elm_id']->value)), 0);?>

<div id="abt__ut2_grid_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->__('abt__ut2.grid.tab_description');?>
</div>
<fieldset>



<div class="control-group cm-no-hide-input">
<label class="control-label" for="ext_grid_abt__ut2_padding_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.grid.padding");?>
</label>
<div class="controls">
<select id="ext_grid_abt__ut2_padding_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="abt__ut2_padding">
<option value="ut2-top"<?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_padding']=="ut2-top") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.grid.padding.variants.top");?>
</option>
<option value="ut2-bottom"<?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_padding']=="ut2-bottom") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.grid.padding.variants.bottom");?>
</option>
<option value="ut2-top-bottom"<?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_padding']=="ut2-top-bottom") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.grid.padding.variants.top_bottom");?>
</option>
<option value=""<?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_padding']=='') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.grid.padding.variants.none");?>
</option>
</select>
</div>
</div>



<?php if (!$_smarty_tpl->tpl_vars['grid']->value['parent_id']&&($_smarty_tpl->tpl_vars['grid']->value['width']+$_smarty_tpl->tpl_vars['grid']->value['offset']>=$_smarty_tpl->tpl_vars['runtime']->value['layout']['width'])) {?>
<div class="control-group cm-no-hide-input">
<label class="control-label" for="ext_grid_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("full_width");?>
</label>
<div class="controls">
<select id="ext_grid_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="abt__ut2_extended">
<option value="O" <?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_extended']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.extended.o");?>
</option>
<option value="E" <?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_extended']=="E") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.extended.e");?>
</option>
<option value="F" <?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_extended']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("abt__ut2.extended.f");?>
</option>
</select>
</div>
</div>
<?php }?>



<div class="control-group cm-no-hide-input">
<label class="control-label" for="elm_grid_abt__ut2_show_in_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.grid_tabs.abt__ut2_show_in_tabs");?>
</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="abt__ut2_show_in_tabs" value="N" />
<input id="elm_grid_abt__ut2_show_in_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"
type="checkbox"
class="cm-no-hide-input"
name="abt__ut2_show_in_tabs"
onclick="$(this).prop('checked') ? $('#grid_abt__ut2_use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
').removeClass('hidden') : $('#grid_abt__ut2_use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
').addClass('hidden')"
value="Y" <?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_show_in_tabs']=='Y') {?>checked<?php }?> />
</div>
</div>
<div class="control-group cm-no-hide-input<?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_show_in_tabs']=='N') {?> hidden<?php }?>" id="grid_abt__ut2_use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<label class="control-label" for="elm_grid_abt__ut2_use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.grid_tabs.abt__ut2_use_ajax");?>
</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="abt__ut2_use_ajax" value="N" />
<input id="elm_grid_abt__ut2_use_ajax_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" class="cm-no-hide-input" name="abt__ut2_use_ajax" value="Y" <?php if ($_smarty_tpl->tpl_vars['grid']->value['abt__ut2_use_ajax']=='Y') {?>checked<?php }?> />
</div>
</div>
</fieldset>
</div>
<?php }?><?php }} ?>
