<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__addons_manager/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1218699807610e2efe24b0e0-94466383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b6f6446d6a681754f0f9c5dce2acc00dc8b155' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__addons_manager/hooks/index/scripts.post.tpl',
      1 => 1627663026,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1218699807610e2efe24b0e0-94466383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'abam_events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe256fa6_39301451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe256fa6_39301451')) {function content_610e2efe256fa6_39301451($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(_.doc).on('click', '.compatible-title', function (e) {
var ct = $(this).parent().find('div.compatible-text');
if (ct.hasClass('hidden')) ct.removeClass('hidden');
else ct.addClass('hidden');
});
$.ceEvent('on', 'ce.commoninit', function(context) {
var ab_am_events = <?php echo json_encode($_smarty_tpl->tpl_vars['abam_events']->value);?>
;
var available_updates = Object.keys(ab_am_events.available_updates).length;
if (available_updates){
var menu = $('.navbar-admin-top .nav-pills');
if (menu.find('.ab__addons_manager').length){
menu.find('.ab__addons_manager').parent().parent().find('a:first > b').before('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.available_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates"></span>');
menu.find('.ab__addons_manager').find('a.ab__am').append('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.available_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
var menu = $('.adv-buttons');
if (menu.find('.ab__am-menu').length){
menu.find('.ab__am-menu').children('a').append('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.available_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates"></span>');
if (menu.find('.ab__am-menu').find('.ab__am').length){
menu.find('.ab__am-menu').find('.ab__am').append('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.available_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
}
var li_a = $('#elm_developer_pages a:contains("AlexBranding")');
if (li_a.length){
if (li_a.find('.ab-am-available-updates').length){
li_a.find('.ab-am-available-updates').remove();
}
li_a.append('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.available_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
}
});
$('#ab__am_search').on('keyup input', function(){
var str = $(this).val();
if (str.length) {
$('#ab__am_search__clear').removeClass('hidden');
} else {
$('#ab__am_search__clear').addClass('hidden');
}
$('.ab__am-section.collapsed').click();
$('.ab-am-set-name-wrapper:not(.open)').click();
$('table.ab-am-addons tbody').each(function (index, element) {
if ($(this).find('.ab-am-addon-name,.ab-am-addon-description').text().toUpperCase().indexOf(str.toUpperCase()) >= 0){
$(this).removeClass('hidden');
} else {
$(this).addClass('hidden');
}
});
$('#ab__am_available_sets > table.ab-am-table > tbody').each(function () {
var all = 0;
var hidden = 0;
all = $(this).find('.ab-am-addons > tbody').size();
hidden = $(this).find('.ab-am-addons > tbody.hidden').size();
if (all == hidden){
$(this).addClass('hidden');
}else{
$(this).removeClass('hidden');
}
});
$('#ab__am_search__clear').on('click', function(){
$('#ab__am_search').val('').focus();
$('table.ab-am-addons tbody').removeClass('hidden');
$('table.ab-am-set tbody').removeClass('hidden');
$(this).addClass('hidden');
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
