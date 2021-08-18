<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:30:05
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:484963246114ea1d15d816-34870601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de88bea475009afb5d562cb3572e90437bf321c0' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '484963246114ea1d15d816-34870601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114ea1d161d84_35543745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114ea1d161d84_35543745')) {function content_6114ea1d161d84_35543745($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text"/>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

    </form>
</div><?php }} ?>
