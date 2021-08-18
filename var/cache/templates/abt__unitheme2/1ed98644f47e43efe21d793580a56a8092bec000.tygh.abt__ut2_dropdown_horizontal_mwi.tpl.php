<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_horizontal_mwi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115869057610e2f08a82885-97569168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed98644f47e43efe21d793580a56a8092bec000' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_horizontal_mwi.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115869057610e2f08a82885-97569168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'item1' => 0,
    'item1_url' => 0,
    'childs' => 0,
    'settings_cols' => 0,
    'settings' => 0,
    'name' => 0,
    'item2' => 0,
    'unique_elm_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f08af1e80_73919816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f08af1e80_73919816')) {function content_610e2f08af1e80_73919816($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('go_back','next','go_back','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] = smarty_modifier_enum("YesNo::NO");?><div class="ut2-h__menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names']==smarty_modifier_enum("YesNo::YES")) {?> tbm-menu<?php }
ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp18=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'])===null||$tmp==='' ? $_tmp18 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?> ut2-m-slider<?php }?>"><div class="ty-menu__wrapper"><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ty-menu__menu-btn m-button"><i class="ut2-icon-outline-menu"></i></a><ul class="ty-menu__items cm-responsive-menu"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_math(array('assign'=>"settings_cols",'equation'=>"min(6, x)",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'])===null||$tmp==='' ? 4 : $tmp)),$_smarty_tpl);
$_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
$_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);
$_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)md5($_smarty_tpl->tpl_vars['item1_url']->value)), null, 0);
$_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?><li class="ty-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
" data-settings-cols="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item1_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__item-link a-first-lvl<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> childs<?php }?>"><span<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {?> class="item-icon"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true,'lazy_load'=>false), 0);
}?><bdi<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names']==smarty_modifier_enum("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names_max_width']))===null||$tmp==='' ? 100 : $tmp), ENT_QUOTES, 'UTF-8');?>
px"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut1_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background']=="#ffffff") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?></bdi>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start(); ?>
                                <?php $_smarty_tpl->tpl_vars['col_width'] = new Smarty_variable(100/$_smarty_tpl->tpl_vars['settings_cols']->value, null, 0);?>
                                <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/horizontal/".((string)(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'])===null||$tmp==='' ? 'column_filling' : $tmp)).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!=smarty_modifier_enum("YesNo::YES")) {?>
                                <div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
			                        <?php echo Smarty::$_smarty_vars['capture']['children'];?>

                                </div>
			                <?php } else { ?>
			                    <div class="abt__ut2_am ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
"></div>
			                    <?php echo htmlspecialchars(fn_abt__ut2_ajax_menu_save(Smarty::$_smarty_vars['capture']['children'],$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>


                                <?php if (!Smarty::$_smarty_vars['capture']['ut2_mwi_ajax_upload_included']) {?>
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("ut2_mwi_ajax_upload_included", null, null); ob_start(); ?>1<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/ajax_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                <?php }?>
			                <?php }?>

                        <?php }?>
                    </li>
                <?php } ?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->__("go_back");?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->__("next");?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp19=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'])===null||$tmp==='' ? $_tmp19 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"),$_smarty_tpl);?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/abt__ut2_dropdown_horizontal_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/abt__ut2_dropdown_horizontal_mwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] = smarty_modifier_enum("YesNo::NO");?><div class="ut2-h__menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names']==smarty_modifier_enum("YesNo::YES")) {?> tbm-menu<?php }
ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp20=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'])===null||$tmp==='' ? $_tmp20 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?> ut2-m-slider<?php }?>"><div class="ty-menu__wrapper"><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ty-menu__menu-btn m-button"><i class="ut2-icon-outline-menu"></i></a><ul class="ty-menu__items cm-responsive-menu"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_math(array('assign'=>"settings_cols",'equation'=>"min(6, x)",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'])===null||$tmp==='' ? 4 : $tmp)),$_smarty_tpl);
$_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
$_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);
$_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)md5($_smarty_tpl->tpl_vars['item1_url']->value)), null, 0);
$_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?><li class="ty-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
" data-settings-cols="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item1_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__item-link a-first-lvl<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> childs<?php }?>"><span<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {?> class="item-icon"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true,'lazy_load'=>false), 0);
}?><bdi<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names']==smarty_modifier_enum("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names_max_width']))===null||$tmp==='' ? 100 : $tmp), ENT_QUOTES, 'UTF-8');?>
px"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut1_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background']=="#ffffff") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?></bdi>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start(); ?>
                                <?php $_smarty_tpl->tpl_vars['col_width'] = new Smarty_variable(100/$_smarty_tpl->tpl_vars['settings_cols']->value, null, 0);?>
                                <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/horizontal/".((string)(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'])===null||$tmp==='' ? 'column_filling' : $tmp)).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!=smarty_modifier_enum("YesNo::YES")) {?>
                                <div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
			                        <?php echo Smarty::$_smarty_vars['capture']['children'];?>

                                </div>
			                <?php } else { ?>
			                    <div class="abt__ut2_am ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
"></div>
			                    <?php echo htmlspecialchars(fn_abt__ut2_ajax_menu_save(Smarty::$_smarty_vars['capture']['children'],$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>


                                <?php if (!Smarty::$_smarty_vars['capture']['ut2_mwi_ajax_upload_included']) {?>
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("ut2_mwi_ajax_upload_included", null, null); ob_start(); ?>1<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/ajax_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                <?php }?>
			                <?php }?>

                        <?php }?>
                    </li>
                <?php } ?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->__("go_back");?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->__("next");?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp21=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'])===null||$tmp==='' ? $_tmp21 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"),$_smarty_tpl);?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
