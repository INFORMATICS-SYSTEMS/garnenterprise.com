<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1891507430610e3a9338e851-78693725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a8122211a20d1b0a7b1b44a6c0d6ebab92a702' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1891507430610e3a9338e851-78693725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'abt__ut2_subcategories' => 0,
    'level' => 0,
    'category' => 0,
    '_l' => 0,
    '_REQUEST' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a933cfc51_74126790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a933cfc51_74126790')) {function content_610e3a933cfc51_74126790($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>
    <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close" onclick="$(this).parent().prev().removeClass('open');$(this).parent().addClass('hidden');"><i class="ut2-icon-baseline-close"></i></a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value) {?>
    <?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(0, null, 0);?>
    <ul class="ut2-subcategories clearfix">

        
        <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['parents']) {?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
                </li>
                <?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value+1, null, 0);?>
            <?php } ?>
        <?php }?>

        
        <?php $_smarty_tpl->_capture_stack[0][] = array("subcategories", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['subcategories']) {?>
                
                <?php if ($_smarty_tpl->tpl_vars['level']->value>0||$_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']) {?>
                    <?php $_smarty_tpl->tpl_vars['_l'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value+1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['_l'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value, null, 0);?>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_l']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php } ?>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        
        <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']) {?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_smarty_tpl->tpl_vars['_REQUEST']->value['category_id']) {?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
 ut2-current-item">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </li>

                    
                    <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

                <?php } else { ?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
        <?php } elseif ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']) {?>
            <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
 ut2-current-item">
                <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>

            
            <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

        <?php } else { ?>
            
            <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

        <?php }?>
    </ul>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>
    <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close" onclick="$(this).parent().prev().removeClass('open');$(this).parent().addClass('hidden');"><i class="ut2-icon-baseline-close"></i></a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value) {?>
    <?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(0, null, 0);?>
    <ul class="ut2-subcategories clearfix">

        
        <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['parents']) {?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
                </li>
                <?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value+1, null, 0);?>
            <?php } ?>
        <?php }?>

        
        <?php $_smarty_tpl->_capture_stack[0][] = array("subcategories", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['subcategories']) {?>
                
                <?php if ($_smarty_tpl->tpl_vars['level']->value>0||$_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']) {?>
                    <?php $_smarty_tpl->tpl_vars['_l'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value+1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['_l'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value, null, 0);?>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_l']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php } ?>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        
        <?php if ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']) {?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['siblings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_smarty_tpl->tpl_vars['_REQUEST']->value['category_id']) {?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
 ut2-current-item">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </li>

                    
                    <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

                <?php } else { ?>
                    <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
        <?php } elseif ($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']) {?>
            <li class="ut2-item level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
 ut2-current-item">
                <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt__ut2_subcategories']->value['current_category']['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>

            
            <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

        <?php } else { ?>
            
            <?php echo Smarty::$_smarty_vars['capture']['subcategories'];?>

        <?php }?>
    </ul>
<?php }
}?><?php }} ?>
