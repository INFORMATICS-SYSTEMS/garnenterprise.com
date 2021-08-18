<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:15
         compiled from "ca7635a06d4983f82c04b455929234aff4f7e7b5" */ ?>
<?php /*%%SmartyHeaderCode:1319991880610e2f07881067-39996872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7635a06d4983f82c04b455929234aff4f7e7b5' => 
    array (
      0 => 'ca7635a06d4983f82c04b455929234aff4f7e7b5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1319991880610e2f07881067-39996872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f07884b12_69274098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f07884b12_69274098')) {function content_610e2f07884b12_69274098($_smarty_tpl) {?><div class="ut2-pn">
    <div class="ty-dropdown-box">
        <div class="ut2-btn-contacts" onclick="$(this).toggleClass('open');">
            <i class="ut2-icon-baseline-phone"></i>
            <div class="ut2-pn__items-full ty-dropdown-box__content hidden">
                <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close hidden" onclick="$(this).parent().prev().removeClass('open');"><i class="ut2-icon-baseline-close"></i></a>
                <div class="ut2-pn__items">

                    
                    <a href="tel:+88005550000"><span>+8(800)</span> 555-00-00</a>
                    <a href="tel:+88005550001"><span>+8(800)</span> 555-00-01</a>
                    <a href="tel:+88005550002"><span>+8(800)</span> 555-00-02</a>
                    </div>
                <div class="ut2-pn__link  hidden-desktop">
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {
echo $_smarty_tpl->getSubTemplate ("addons/call_requests/blocks/abt__ut2_call_request.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
                </div>
            </div>
        </div>
        <div class="ut2-pn__wrap ">
            <div class="ut2-pn__items">
            
                
                <a href="tel:+88005559595"><span>+8(800)</span> 555-95-95</a>
            </div>
    
            <div class="ut2-pn__link">
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {
echo $_smarty_tpl->getSubTemplate ("addons/call_requests/blocks/abt__ut2_call_request.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
            </div>
        </div>
    </div>
</div><?php }} ?>
