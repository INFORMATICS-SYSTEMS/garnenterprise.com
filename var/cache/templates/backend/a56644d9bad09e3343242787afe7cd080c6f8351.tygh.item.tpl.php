<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:06:09
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11638062296113d9518b9b90-53176765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56644d9bad09e3343242787afe7cd080c6f8351' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11638062296113d9518b9b90-53176765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d9518c2064_68242328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d9518c2064_68242328')) {function content_6113d9518c2064_68242328($_smarty_tpl) {?><div class="object-picker__vendor-plan-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result") {?>
        <div class="object-picker__vendor-plan-content">
            <div class="object-picker__vendor-plan-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name}<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <div class="object-picker__vendor-plan-monthly-fee">
                ${data.price}&nbsp;${data.periodicity}
            </div>
            <div class="object-picker__vendor-plan-transaction-fee">
                ${data.commission_text}
            </div>
            <div class="object-picker__vendor-plan-vendor-count">
                ${data.vendor_count_text}
            </div>
            <div class="object-picker__vendor-plan-status">
                ${data.status}
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
        ${data.name}(${data.price})
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__vendor-plan-results-label">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__vendor-plan-results-label-icon-wrapper">
                    <i class="object-picker__results-label-icon object-picker__vendor-plan-results-label-icon <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__vendor-plan-results-label-prefix">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__vendor-plan-results-label-body">
                ${data.name}
            </div>
        </div>
    <?php }?>
</div><?php }} ?>
