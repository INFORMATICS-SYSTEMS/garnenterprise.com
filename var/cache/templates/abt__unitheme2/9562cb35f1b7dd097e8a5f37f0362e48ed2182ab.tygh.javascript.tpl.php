<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:28:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/counters/javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836939066114e9c010ad06-87524608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9562cb35f1b7dd097e8a5f37f0362e48ed2182ab' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/counters/javascript.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '836939066114e9c010ad06-87524608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'total_seconds' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e9c0117c58_60663254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e9c0117c58_60663254')) {function content_6114e9c0117c58_60663254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>
    (function (_, $) {
        $(document).ready(function() {
            $.getScript('js/addons/ab__deal_of_the_day/js_counter.js', function () {
                ab_dotd_js_counter('ab__deal_of_the_day_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_seconds']->value, ENT_QUOTES, 'UTF-8');?>
, {
                    'days'    : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.days');?>
',
                    'hours'   : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.hours');?>
',
                    'minutes' : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.minutes');?>
',
                    'seconds' : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.seconds');?>
'
                });
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/counters/javascript.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/counters/javascript.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>
    (function (_, $) {
        $(document).ready(function() {
            $.getScript('js/addons/ab__deal_of_the_day/js_counter.js', function () {
                ab_dotd_js_counter('ab__deal_of_the_day_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_seconds']->value, ENT_QUOTES, 'UTF-8');?>
, {
                    'days'    : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.days');?>
',
                    'hours'   : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.hours');?>
',
                    'minutes' : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.minutes');?>
',
                    'seconds' : '<?php echo $_smarty_tpl->__('ab__dotd.countdown.seconds');?>
'
                });
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }?><?php }} ?>
