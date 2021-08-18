<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:28
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2089392643610e32d40f7822-96473357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994f6b6cc4c3cce84e536b0eccfff5798aee8309' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2089392643610e32d40f7822-96473357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'promotions_ids' => 0,
    'promotion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d411da24_87100482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d411da24_87100482')) {function content_610e32d411da24_87100482($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
    <div class="ab__deal_of_the_day">
		<div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?> class="col1"<?php }?>>
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
	        <div class="actions-link">
		        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value)>1) {?>
                    <a class="also-in-promos-link cm-external-click" data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day"><i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i><span><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</span></a>
		        <?php }?>
                <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="" target="_blank">
                    <?php if (fn_string_not_empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?><i class="cm-tooltip ty-icon-help-circle" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><span><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
</span>
                </a>
			</div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page']==="Y"&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
    <div class="ab__deal_of_the_day">
		<div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?> class="col1"<?php }?>>
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
	        <div class="actions-link">
		        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value)>1) {?>
                    <a class="also-in-promos-link cm-external-click" data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day"><i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i><span><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</span></a>
		        <?php }?>
                <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="" target="_blank">
                    <?php if (fn_string_not_empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?><i class="cm-tooltip ty-icon-help-circle" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><span><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
</span>
                </a>
			</div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page']==="Y"&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
    </div>
    <?php }?>
<?php }
}?><?php }} ?>
