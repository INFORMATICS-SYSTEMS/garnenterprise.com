<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/views/categories/components/subcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136015212610e3a925d3fa9-27112967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec014c5d120e0ee8ca5f89952667965b62e7354' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/views/categories/components/subcategories.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2136015212610e3a925d3fa9-27112967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'subcategories' => 0,
    'settings' => 0,
    'columns' => 0,
    'rows' => 0,
    'splitted_subcategories' => 0,
    'ssubcateg' => 0,
    'category' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a92600466_13673823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a92600466_13673823')) {function content_610e3a92600466_13673823($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_split')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['subcategories']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['show_subcategories']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp)),$_smarty_tpl);?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>

    <ul class="subcategories clearfix">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view_subcategories")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php  $_smarty_tpl->tpl_vars["ssubcateg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ssubcateg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ssubcateg"]->key => $_smarty_tpl->tpl_vars["ssubcateg"]->value) {
$_smarty_tpl->tpl_vars["ssubcateg"]->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ssubcateg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'lazy_load'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']==smarty_modifier_enum("YesNo::YES"),'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0);?>

                            <?php }?>
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view_subcategories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/components/subcategories.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/components/subcategories.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['subcategories']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['show_subcategories']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp)),$_smarty_tpl);?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>

    <ul class="subcategories clearfix">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view_subcategories")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php  $_smarty_tpl->tpl_vars["ssubcateg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ssubcateg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ssubcateg"]->key => $_smarty_tpl->tpl_vars["ssubcateg"]->value) {
$_smarty_tpl->tpl_vars["ssubcateg"]->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ssubcateg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'lazy_load'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']==smarty_modifier_enum("YesNo::YES"),'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0);?>

                            <?php }?>
                            <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view_subcategories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php }
}?><?php }} ?>
