<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/horizontal/row_filling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968824789610e2f08afbd70-39331229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d062830b1ea952a58dff606f47e1b0cda3769b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/horizontal/row_filling.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '968824789610e2f08afbd70-39331229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'item1' => 0,
    'dropdown_class' => 0,
    'settings_cols' => 0,
    'settings' => 0,
    'block' => 0,
    'childs' => 0,
    'col_width' => 0,
    'second_level_counter' => 0,
    'item2' => 0,
    'item2_url' => 0,
    'name' => 0,
    'max_amount3' => 0,
    'item2_childs' => 0,
    'Viewlimit' => 0,
    'item3' => 0,
    'item3_url' => 0,
    'item1_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f08bb54c4_97788625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f08bb54c4_97788625')) {function content_610e2f08bb54c4_97788625($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('more','text_topmenu_more','more','text_topmenu_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['second_level_counter'] = new Smarty_variable(0, null, 0);?>

    <div class="ty-menu__submenu-items cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-dropdown<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }
}?> row-filling" data-cols-count="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
        <?php $_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['no_hidden_elements_second_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>

        <div<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
            <div class="ty-menu__submenu-col" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"<?php }?>>
                <div class="second-lvl" data-elem-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->tpl_vars['second_level_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['second_level_counter']->value+1, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>

                    <div class="ty-menu__submenu-item-header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?> ut2-mwi-icon-wrap<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                        <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item2_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link">
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0);?>

                            <?php }?>
                            <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?>
                        </a>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <i class="ut2-icon-outline-expand_more"></i>
                        </a>
                    <?php }?>

                    <div class="ty-menu__submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position']!="bottom") {?> tree-level-img<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php }?>
                                <?php $_smarty_tpl->tpl_vars['max_amount3'] = new Smarty_variable(2*$_smarty_tpl->tpl_vars['block']->value['properties']['elements_per_column_third_level_view'], null, 0);?>
                                <?php $_smarty_tpl->createLocalArrayVariable('item2', null, 0);
$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount3']->value,true);?>

                            <?php  $_smarty_tpl->tpl_vars["item2_childs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2_childs"]->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/2),true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2_childs"]->key => $_smarty_tpl->tpl_vars["item2_childs"]->value) {
$_smarty_tpl->tpl_vars["item2_childs"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {?><div class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!=smarty_modifier_enum("YesNo::YES")) {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2_childs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                        <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                        <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                            <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item3_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link<?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?>
                                                        <span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background']=='#ffffff') {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                </bdi>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                                <?php }?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__submenu-list<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-col<?php } elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?> hiddenCol<?php }?> cm-responsive-menu-submenu"<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?> style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                        <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item3_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
                                    </div>
                                <?php } ?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                            <?php }?>
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                <a href="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'])===null||$tmp==='' ? "view_items" : $tmp)=="view_items") {?>javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item2_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-more"><span><?php echo $_smarty_tpl->__("more");?>
</span></a>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?>
                            <div class="ut2-mwi-html<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>
</div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                <div class="ty-menu__submenu-alt-link"><a class="ty-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a></div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone"><?php echo trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']);?>
</div>
        <?php }?>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/horizontal/row_filling.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/horizontal/row_filling.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['second_level_counter'] = new Smarty_variable(0, null, 0);?>

    <div class="ty-menu__submenu-items cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-dropdown<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }
}?> row-filling" data-cols-count="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
        <?php $_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['no_hidden_elements_second_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>

        <div<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
            <div class="ty-menu__submenu-col" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"<?php }?>>
                <div class="second-lvl" data-elem-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->tpl_vars['second_level_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['second_level_counter']->value+1, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>

                    <div class="ty-menu__submenu-item-header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?> ut2-mwi-icon-wrap<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                        <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item2_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link">
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0);?>

                            <?php }?>
                            <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?>
                        </a>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <i class="ut2-icon-outline-expand_more"></i>
                        </a>
                    <?php }?>

                    <div class="ty-menu__submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position']!="bottom") {?> tree-level-img<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php }?>
                                <?php $_smarty_tpl->tpl_vars['max_amount3'] = new Smarty_variable(2*$_smarty_tpl->tpl_vars['block']->value['properties']['elements_per_column_third_level_view'], null, 0);?>
                                <?php $_smarty_tpl->createLocalArrayVariable('item2', null, 0);
$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount3']->value,true);?>

                            <?php  $_smarty_tpl->tpl_vars["item2_childs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2_childs"]->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/2),true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2_childs"]->key => $_smarty_tpl->tpl_vars["item2_childs"]->value) {
$_smarty_tpl->tpl_vars["item2_childs"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {?><div class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!=smarty_modifier_enum("YesNo::YES")) {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2_childs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                        <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                        <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                            <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item3_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link<?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?>
                                                        <span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background']=='#ffffff') {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                </bdi>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                                <?php }?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__submenu-list<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-col<?php } elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?> hiddenCol<?php }?> cm-responsive-menu-submenu"<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?> style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                        <a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item3_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background']=="#ffffff") {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
                                    </div>
                                <?php } ?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                            <?php }?>
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                <a href="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'])===null||$tmp==='' ? "view_items" : $tmp)=="view_items") {?>javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item2_url']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-more"><span><?php echo $_smarty_tpl->__("more");?>
</span></a>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?>
                            <div class="ut2-mwi-html<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>
</div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                <div class="ty-menu__submenu-alt-link"><a class="ty-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a></div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone"><?php echo trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']);?>
</div>
        <?php }?>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
