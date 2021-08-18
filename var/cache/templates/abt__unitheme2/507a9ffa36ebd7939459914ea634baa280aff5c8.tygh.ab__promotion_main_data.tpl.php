<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:28:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4453095166114e9bfdacd19-85553582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507a9ffa36ebd7939459914ea634baa280aff5c8' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4453095166114e9bfdacd19-85553582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotion' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e9bfe08ca5_34628935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e9bfe08ca5_34628935')) {function content_6114e9bfe08ca5_34628935($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.page_action_period','active_promotions','ab__dotd.page_action_period','active_promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ab__dotd_promotion <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>action-is-over<?php }?>">
    <div class="row-fluid ab__dotd_promotion-main_info">
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
            <div class="span8 ab__dotd_promotion-image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image']), 0);?>

            </div>
        <?php }?>
        <div class="span8 ab__dotd_promotion-content">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__deal_of_the_day:promotion_page_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['h1'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['name'] : $tmp);?>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>
)</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_awaited');?>
)</span>
                    <?php }?>
                </h1>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_promotion_page']==="Y"&&(($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date'])||$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited'])) {?>
                <div class="ab__dotd_promotion-timer">
                    <div class="ab__dotd_promotion-timer_title"><b><?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {
echo $_smarty_tpl->__('ab__dotd_time_awaited_left');
} else {
echo $_smarty_tpl->__('ab__dotd_time_left');
}?>:</b></div>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']||$_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                <div class="ab__dotd_promotion_date">
                    <p><?php echo $_smarty_tpl->__("ab__dotd.page_action_period");?>

                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </p>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']) {?>
                <div class="actions-link"><a href="<?php echo htmlspecialchars(fn_url("promotions.list"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("active_promotions");?>
</a></div>
            <?php }?>
        </div>
    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ab__dotd_promotion <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>action-is-over<?php }?>">
    <div class="row-fluid ab__dotd_promotion-main_info">
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
            <div class="span8 ab__dotd_promotion-image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image']), 0);?>

            </div>
        <?php }?>
        <div class="span8 ab__dotd_promotion-content">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__deal_of_the_day:promotion_page_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['h1'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['name'] : $tmp);?>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>
)</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_awaited');?>
)</span>
                    <?php }?>
                </h1>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_promotion_page']==="Y"&&(($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date'])||$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited'])) {?>
                <div class="ab__dotd_promotion-timer">
                    <div class="ab__dotd_promotion-timer_title"><b><?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {
echo $_smarty_tpl->__('ab__dotd_time_awaited_left');
} else {
echo $_smarty_tpl->__('ab__dotd_time_left');
}?>:</b></div>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']||$_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                <div class="ab__dotd_promotion_date">
                    <p><?php echo $_smarty_tpl->__("ab__dotd.page_action_period");?>

                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </p>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']) {?>
                <div class="actions-link"><a href="<?php echo htmlspecialchars(fn_url("promotions.list"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("active_promotions");?>
</a></div>
            <?php }?>
        </div>
    </div>
</div><?php }?><?php }} ?>
