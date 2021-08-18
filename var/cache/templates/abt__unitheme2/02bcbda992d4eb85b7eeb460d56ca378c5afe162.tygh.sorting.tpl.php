<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/common/sorting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1988871035610e3a928cd373-22102201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02bcbda992d4eb85b7eeb460d56ca378c5afe162' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/common/sorting.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1988871035610e3a928cd373-22102201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'sorting' => 0,
    'option' => 0,
    'value' => 0,
    'sorting_orders' => 0,
    'sort_order' => 0,
    'class_pref' => 0,
    'avail_sorting' => 0,
    'sort_key' => 0,
    'sort_class' => 0,
    'ajax_class' => 0,
    'pagination_id' => 0,
    'curl' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a928fab36_02657149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a928fab36_02657149')) {function content_610e3a928fab36_02657149($_smarty_tpl) {?><?php if (!is_callable('smarty_block_ab__hide_content')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.ab__hide_content.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.sort_by_','abt__ut2.sort_by_','abt__ut2.sort_by_','abt__ut2.sort_by_'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->__('sort_by');?>
:</div>
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==$_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['default_order'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable("asc", null, 0);?>
                <?php }?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sort_order"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sorting_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sort_order"]->key => $_smarty_tpl->tpl_vars["sort_order"]->value) {
$_smarty_tpl->tpl_vars["sort_order"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']!=$_smarty_tpl->tpl_vars['option']->value||$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']==$_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_class"] = new Smarty_variable("sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["sort_key"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value||$_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value]=='Y') {?>
                    <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                        <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');
if (trim(Smarty::$_smarty_vars['capture']['abt__selected_filters'])) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                    </li>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->__('sort_by');?>
:</div>
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==$_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['default_order'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable("asc", null, 0);?>
                <?php }?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sort_order"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sorting_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sort_order"]->key => $_smarty_tpl->tpl_vars["sort_order"]->value) {
$_smarty_tpl->tpl_vars["sort_order"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']!=$_smarty_tpl->tpl_vars['option']->value||$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']==$_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_class"] = new Smarty_variable("sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["sort_key"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value||$_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value]=='Y') {?>
                    <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                        <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');
if (trim(Smarty::$_smarty_vars['capture']['abt__selected_filters'])) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                    </li>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
