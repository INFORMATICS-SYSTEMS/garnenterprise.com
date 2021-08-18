<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 16:54:51
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/orders/components/context_menu/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7360462186113d6ab78a989-94803859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97807cddd55c17ae6c8a3edc3d7958da81d8a735' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/orders/components/context_menu/status.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7360462186113d6ab78a989-94803859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d6ab790ff8_04583887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d6ab790ff8_04583887')) {function content_6113d6ab790ff8_04583887($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','change_to_status'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_status_descr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
            <li>
                <a class="cm-ajax cm-post cm-ajax-send-form"
                    href="<?php echo htmlspecialchars(fn_url("orders.m_update?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="pagination_contents"
                    data-ca-target-form="#orders_list_form"
                >
                    <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

                </a>
            </li>
        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify_customer_status'=>true,'notify_department_status'=>true,'notify_vendor_status'=>true,'name_prefix'=>"notify"), 0);?>

    </ul>
</li>
<?php }} ?>
