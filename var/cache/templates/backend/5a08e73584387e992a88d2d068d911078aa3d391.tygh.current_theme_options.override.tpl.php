<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:05
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1878108484610e2efd2f5496-81832215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a08e73584387e992a88d2d068d911078aa3d391' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1878108484610e2efd2f5496-81832215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'available_layout' => 0,
    'available_themes' => 0,
    'style' => 0,
    'has_styles' => 0,
    'styles_descr' => 0,
    'o' => 0,
    'storefront' => 0,
    'but_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efd312ab9_01792482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efd312ab9_01792482')) {function content_610e2efd312ab9_01792482($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('theme_styles_and_layouts','layout','theme_editor.style','none','theme_no_styles_text','theme_editor','theme_editor_not_supported','theme_editor','edit_layout_on_site','edit_content_on_site'));
?>
<?php if ($_smarty_tpl->tpl_vars['theme']->value['theme_name']=='abt__unitheme2') {?>
<span class="muted"><?php echo $_smarty_tpl->__("theme_styles_and_layouts");?>
</span>
<div class="table-wrapper">
<table class="table table-middle table--relative">
<thead>
<tr>
<th><?php echo $_smarty_tpl->__("layout");?>
</th>
<th><?php echo $_smarty_tpl->__("theme_editor.style");?>
</th>
<th> </th>
<th> </th>
</tr>
</thead>
<tbody>
<?php $_smarty_tpl->tpl_vars['has_styles'] = new Smarty_variable(!!$_smarty_tpl->tpl_vars['theme']->value['styles'], null, 0);?>
<?php  $_smarty_tpl->tpl_vars['available_layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['available_layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['layouts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['available_layout']->key => $_smarty_tpl->tpl_vars['available_layout']->value) {
$_smarty_tpl->tpl_vars['available_layout']->_loop = true;
?>
<tr>
<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['available_layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
<td>
<?php $_smarty_tpl->tpl_vars['styles_descr'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_themes']->value['current']['styles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
<?php $_smarty_tpl->createLocalArrayVariable('styles_descr', null, 0);
$_smarty_tpl->tpl_vars['styles_descr']->value[$_smarty_tpl->tpl_vars['style']->value['style_id']] = $_smarty_tpl->tpl_vars['style']->value['name'];?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['has_styles']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'],'status'=>$_smarty_tpl->tpl_vars['available_layout']->value['style_id'],'items_status'=>$_smarty_tpl->tpl_vars['styles_descr']->value,'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,themes_list",'statuses'=>$_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'],'btn_meta'=>mb_strtolower("btn-text o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status']), 'UTF-8'),'default_status_text'=>$_smarty_tpl->__("none")), 0);?>

<?php } else { ?>
<span class="muted"><?php echo $_smarty_tpl->__("theme_no_styles_text");?>
</span>
<?php }?>
</td>
<td>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__('abt__ut2.settings'),'href'=>"abt__ut2.settings"));?>
</li>
<li><?php ob_start();
echo $_smarty_tpl->__('abt__ut2.less_settings');
$_tmp13=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp13." ".((string)$_smarty_tpl->tpl_vars['available_layout']->value['style_id']),'href'=>"abt__ut2.less_settings?style=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['style_id']).".less"));?>
</li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

</td>
<td class="right btn-toolbar btn-toolbar--theme-editor">
<?php if ($_smarty_tpl->tpl_vars['available_layout']->value['is_default']) {?>
<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("btn-small btn-primary cm-post", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("btn-small cm-post", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['has_styles']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("theme_editor_not_supported"),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"btn",'but_meta'=>"btn btn-small disabled cm-tooltip"), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=block_manager&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_layout_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0);?>

</td>
<tr>
<?php } ?>
</tbody>
</table>
</div>
<?php }?><?php }} ?>
