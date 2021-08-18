<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:588507055610e3a93065638-44610852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1aa431da7411a9743202c5caa6d73ae65e403e4' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/additional_info.pre.tpl',
      1 => 1627896589,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '588507055610e3a93065638-44610852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'tmpl' => 0,
    'show_features' => 0,
    'product' => 0,
    'variation_feature' => 0,
    'limit' => 0,
    'printed_variations' => 0,
    'variant' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a930aa2b2_28061457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a930aa2b2_28061457')) {function content_610e3a930aa2b2_28061457($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_block_ab__hide_content')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.ab__hide_content.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('more','more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='variations'&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='features_and_variations') {?>
	<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
        <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);?>

        <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']===smarty_modifier_enum("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value>0) {?>
                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>
                    <?php $_smarty_tpl->tpl_vars['printed_variations'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['printed_variations']->value<$_smarty_tpl->tpl_vars['limit']->value&&($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants']===smarty_modifier_enum("YesNo::YES"))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>

                                
                                <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style']=='color') {?>
                                    <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                <?php } else { ?>
                                    <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>">
                                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                                <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                </a>
                            <?php }?>
						<?php }?>
                        <?php $_smarty_tpl->tpl_vars['printed_variations'] = new Smarty_variable($_smarty_tpl->tpl_vars['printed_variations']->value+1, null, 0);?>
                    <?php } ?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])>$_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ut2-lv__item-features">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/additional_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/additional_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='variations'&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!='features_and_variations') {?>
	<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
        <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);?>

        <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']===smarty_modifier_enum("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value>0) {?>
                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>
                    <?php $_smarty_tpl->tpl_vars['printed_variations'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['printed_variations']->value<$_smarty_tpl->tpl_vars['limit']->value&&($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants']===smarty_modifier_enum("YesNo::YES"))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>

                                
                                <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style']=='color') {?>
                                    <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                <?php } else { ?>
                                    <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>">
                                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                                <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                </a>
                            <?php }?>
						<?php }?>
                        <?php $_smarty_tpl->tpl_vars['printed_variations'] = new Smarty_variable($_smarty_tpl->tpl_vars['printed_variations']->value+1, null, 0);?>
                    <?php } ?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])>$_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ut2-lv__item-features">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
<?php }
}?><?php }} ?>
