<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/common/context_menu_wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1285828529610e31c4b839e4-17007270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc732c58158db332d618cd2963163fde4e64f72' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/common/context_menu_wrapper.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1285828529610e31c4b839e4-17007270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'class' => 0,
    'attributes' => 0,
    'hook' => 0,
    'object' => 0,
    'has_permission' => 0,
    'context_menu_class' => 0,
    'form' => 0,
    'is_check_all_shown' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c4b97bc7_98140657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c4b97bc7_98140657')) {function content_610e31c4b97bc7_98140657($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_component')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.component.php';
?>
<?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? $_tmp1 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('attributes', null, 0);
$_smarty_tpl->tpl_vars['attributes']->value["data-ca-longtap"] = true;?>
<?php $_smarty_tpl->tpl_vars['hook'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['hook']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['object']->value).":context_menu" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['has_permission']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['context_menu_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['context_menu_class']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars(smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['attributes']->value), ENT_QUOTES, 'UTF-8');?>
>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>$_smarty_tpl->tpl_vars['hook']->value)); $_block_repeat=true; echo smarty_block_hook(array('name'=>$_smarty_tpl->tpl_vars['hook']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>$_smarty_tpl->tpl_vars['hook']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['items']->value;?>

</div>
<?php }} ?>
