<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:23
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/components/disapproval_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12348987976113d923bd8c27-55039776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6947bb327861c692f909a182b56fb4b80ac1f6' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/components/disapproval_popup.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12348987976113d923bd8c27-55039776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d923bdea96_96230389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d923bdea96_96230389')) {function content_6113d923bdea96_96230389($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('disapprove_products','vendor_data_premoderation.disapproval_reason','cancel','disapprove'));
?>

<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->__("disapprove_products") : $tmp), null, 0);?>
<div class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" id="disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label">
                <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
            </label>
            <div class="controls">
                <textarea class="input-textarea-long premoderation-reason"
                          name="product_approval[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][reason]"
                          cols="55"
                          rows="8"
                ></textarea>
            </div>
        </div>
    </div>
    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link btn">
            <?php echo $_smarty_tpl->__("cancel");?>

        </a>
        <input type="submit"
               class="btn btn-primary"
               name="dispatch[premoderation.m_decline.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
               value="<?php echo $_smarty_tpl->__("disapprove");?>
"
        />
    </div>
    <!--disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
