<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:21
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/common/scroller_init_with_quantity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1416620610610e2f0d597240-71767119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d71eda9891ba5f13aefcca7a9e738fb87fd8d1' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/common/scroller_init_with_quantity.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1416620610610e2f0d597240-71767119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'language_direction' => 0,
    'prev_selector' => 0,
    'next_selector' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0d5b9550_91087775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0d5b9550_91087775')) {function content_610e2f0d5b9550_91087775($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page']==smarty_modifier_enum("YesNo::YES")) {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically']==smarty_modifier_enum("YesNo::YES")) {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = @1000)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="N") {?>
                navigation: true,
                navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],
                <?php }?>
                pagination: false,
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init_with_quantity.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scroller_init_with_quantity.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page']==smarty_modifier_enum("YesNo::YES")) {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically']==smarty_modifier_enum("YesNo::YES")) {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = @1000)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="N") {?>
                navigation: true,
                navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],
                <?php }?>
                pagination: false,
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']==smarty_modifier_enum("YesNo::YES")) {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php }?><?php }} ?>
