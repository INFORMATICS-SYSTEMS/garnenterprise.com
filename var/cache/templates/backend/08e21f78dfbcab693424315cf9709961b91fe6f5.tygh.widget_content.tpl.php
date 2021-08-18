<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/setup_wizard/components/widget_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297958542610e2efe0567a8-88434477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e21f78dfbcab693424315cf9709961b91fe6f5' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/setup_wizard/components/widget_content.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '297958542610e2efe0567a8-88434477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe059389_97959701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe059389_97959701')) {function content_610e2efe059389_97959701($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.store_setup_wizard_short','sw.store_setup_wizard'));
?>
<div class="hidden">
    <div class="setup-wizard-panel no-js">
        <a class="handle open cm-ajax" id="opener_sw_wizard_opener" data-ca-target-id="sw_wizard_container" data-ca-event-name="setupwizard" href="<?php echo htmlspecialchars(fn_url("setup_wizard.manage"), ENT_QUOTES, 'UTF-8');?>
">
            <span class="mobile-visible">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard_short");?>

            </span>
            <span class="mobile-hidden">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard");?>

            </span>
        </a>

        <a class="handle close" id="sw_wizard_closer" href="#"></a>
        <div class="setup-wizard-content" id="sw_wizard_container"><!--sw_wizard_container--></div>
    </div>
</div>

<?php }} ?>
