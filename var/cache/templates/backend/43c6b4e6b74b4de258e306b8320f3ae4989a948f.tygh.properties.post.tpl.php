<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:00:20
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/paypal/hooks/payments/properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17486598646113d7f4ba4e74-00779790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c6b4e6b74b4de258e306b8320f3ae4989a948f' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/paypal/hooks/payments/properties.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17486598646113d7f4ba4e74-00779790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d7f4bacf95_48811633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d7f4bacf95_48811633')) {function content_6113d7f4bacf95_48811633($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.paypal_processor_ids = <?php echo json_encode(fn_get_paypal_processors(''));?>
;

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data, response_text) {
            for (var i in elms) {
                fn_paypal_add_redesign_handlers(_);
                fn_paypal_perform_redesign(
                    _,
                    $('[data-ca-form-group="main"]', elms[i]),
                    $('[data-ca-form-group="processor"] select', elms[i]).val()
                );
            }
        });

        $(document).ready(function () {
            fn_paypal_add_redesign_handlers(_);
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
