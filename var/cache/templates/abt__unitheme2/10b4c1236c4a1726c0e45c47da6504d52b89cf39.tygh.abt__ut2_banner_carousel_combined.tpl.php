<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl" */ ?>
<?php /*%%SmartyHeaderCode:862046960610e2f08cfc117-81168036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10b4c1236c4a1726c0e45c47da6504d52b89cf39' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '862046960610e2f08cfc117-81168036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'b' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f08d29e79_71705329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f08d29e79_71705329')) {function content_610e2f08d29e79_71705329($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['b']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->iteration++;
?>
            <?php $_smarty_tpl->tpl_vars['b_iteration'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->iteration, null, 0);?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__ut2_banner:banners")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['b']->value['type']=='abt__ut2') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['type']=="G") {?>
                <div class="ut2-banner">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['b']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?>
                </div>
            <?php } else { ?>
                <div class="ut2-banner ty-wysiwyg-content">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>

                </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem: true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']*(($tmp = @1000)===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                afterMove: function(){
                    slider.find('.ut2-a-video iframe').each(function(){
                        $(this).get(0).contentWindow.postMessage('{ "event":"command","func":"' + 'pauseVideo' + '","args":"" }', '*');
                    });
                },
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['b']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->iteration++;
?>
            <?php $_smarty_tpl->tpl_vars['b_iteration'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->iteration, null, 0);?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__ut2_banner:banners")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['b']->value['type']=='abt__ut2') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['type']=="G") {?>
                <div class="ut2-banner">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['b']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?>
                </div>
            <?php } else { ?>
                <div class="ut2-banner ty-wysiwyg-content">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>

                </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem: true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']*(($tmp = @1000)===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                afterMove: function(){
                    slider.find('.ut2-a-video iframe').each(function(){
                        $(this).get(0).contentWindow.postMessage('{ "event":"command","func":"' + 'pauseVideo' + '","args":"" }', '*');
                    });
                },
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
