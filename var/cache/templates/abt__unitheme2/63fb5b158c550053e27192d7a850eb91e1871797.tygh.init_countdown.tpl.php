<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:28:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/init_countdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21271273256114e9c00e8c98-43565640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fb5b158c550053e27192d7a850eb91e1871797' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/init_countdown.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21271273256114e9c00e8c98-43565640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotion' => 0,
    'addons' => 0,
    'to_timestamp' => 0,
    'total_seconds' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e9c0106052_38059605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e9c0106052_38059605')) {function content_6114e9c0106052_38059605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['promotion']->value['from_date'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['count_to']=='end_of_the_day'||!$_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable((strtotime('tomorrow midnight')), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['promotion']->value['to_date'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['total_seconds'] = new Smarty_variable($_smarty_tpl->tpl_vars['to_timestamp']->value-(defined('TIME') ? constant('TIME') : null), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['total_seconds']->value) {?>
    <div id="ab__deal_of_the_day_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type']==="flipclock") {?>flipclock<?php } else { ?>js-counter<?php }?>"></div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type']==="flipclock") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/counters/flipclock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/counters/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/init_countdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/init_countdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['promotion']->value['from_date'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['count_to']=='end_of_the_day'||!$_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable((strtotime('tomorrow midnight')), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['to_timestamp'] = new Smarty_variable($_smarty_tpl->tpl_vars['promotion']->value['to_date'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['total_seconds'] = new Smarty_variable($_smarty_tpl->tpl_vars['to_timestamp']->value-(defined('TIME') ? constant('TIME') : null), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['total_seconds']->value) {?>
    <div id="ab__deal_of_the_day_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type']==="flipclock") {?>flipclock<?php } else { ?>js-counter<?php }?>"></div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type']==="flipclock") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/counters/flipclock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/counters/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
<?php }
}?><?php }} ?>
