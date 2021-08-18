<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:33
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/detailed_page/tabs/addon_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9838833686113fc91706120-12411082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f509e78adcefeaab822b8ac2f21d207a267d7294' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/detailed_page/tabs/addon_reviews.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9838833686113fc91706120-12411082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
    'addon' => 0,
    'personal_review' => 0,
    'addon_reviews_rating_stats' => 0,
    'total_reviews' => 0,
    'average_rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc9170e5a8_27558617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc9170e5a8_27558617')) {function content_6113fc9170e5a8_27558617($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addon_reviews'));
?>

<?php $_smarty_tpl->tpl_vars['total_reviews'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['total_reviews'] = clone $_smarty_tpl->tpl_vars['total_reviews'];?>

<div class="hidden cm-hide-save-button" id="content_reviews">
    <div class="form-horizontal form-edit">

        
        <?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
            <div class="alert alert-block alert-info">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_full'=>true,'id'=>"addons_write_review_notification"), 0);?>

            </div>
        <?php }?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addon_reviews"),'target'=>"#addon_reviews"), 0);?>

        <div id="addon_reviews" class="collapse in collapse-visible">

            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/addon_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['addon_reviews_rating_stats']->value,'total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_reviews']->value,'average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reviews'=>$_smarty_tpl->tpl_vars['reviews']->value,'total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_reviews']->value), 0);?>


        </div>

    </div>
<!--content_reviews--></div>
<?php }} ?>
