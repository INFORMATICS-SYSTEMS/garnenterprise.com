<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:25:41
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86019769610e3575909556-11559625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10b13139f79023505542312a0e80a4887e10a6f' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/view.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86019769610e3575909556-11559625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'discussion' => 0,
    'container_id' => 0,
    'wrap' => 0,
    'title' => 0,
    'subheader' => 0,
    'addons' => 0,
    'average_rating' => 0,
    'settings' => 0,
    'post_qty' => 0,
    'rating' => 0,
    'post' => 0,
    'new_post_title' => 0,
    'locate_to_review_tab' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e35759edb92_75497763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e35759edb92_75497763')) {function content_610e35759edb92_75497763($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('new_post','write_review','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.star','abt__ut2.discussion.star','selected','abt__ut2.discussion.star','show_all','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','new_post','write_review','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.star','abt__ut2.discussion.star','selected','abt__ut2.discussion.star','show_all','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value==smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!=smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

                
                <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                <div class="left-col">
                <div class="abt__ut2_rb">
                    <div class="rb-ratings">
                        <div class="rb-rounded-overall">
                            <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="E") {?>
                                <?php if (in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials'],array('B','R'))) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>
                                        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['discussion']->value['average_rating'], null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
                                        <div class="rb-average-rating"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.asr_title");?>
</div><?php }?>
                                        <div class="rb-stars"><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value)), 0);?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="desktop") {?>
                                            <div class="rb-average-rating-comments mobile">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
:<br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
</span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="rb-average-rating-comments">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>
                                        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['discussion']->value['average_rating'], null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
                                        <div class="rb-average-rating"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.asr_title");?>
</div><?php }?>
                                        <div class="rb-stars"><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value)), 0);?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="desktop") {?>
                                            <div class="rb-average-rating-comments mobile">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
:<br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
</span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="rb-average-rating-comments">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>

                    <div class="rb-histogram">
                        <div class="rb-review-histogram">
                        <?php  $_smarty_tpl->tpl_vars['post_qty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post_qty']->_loop = false;
 $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['search']['posts_rating_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post_qty']->key => $_smarty_tpl->tpl_vars['post_qty']->value) {
$_smarty_tpl->tpl_vars['post_qty']->_loop = true;
 $_smarty_tpl->tpl_vars['rating']->value = $_smarty_tpl->tpl_vars['post_qty']->key;
?>
                            <div class="rb-rating-filter">
                                <?php if ($_smarty_tpl->tpl_vars['post_qty']->value) {?>
                                    <a href="javascript:void(0);" class="rb-meter-inline cm-abt-filter-post link" data-ca-rating="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['rating']->value));?>
</span></a>
                                    <div class="meter histogram"><span class="rb-meter-bar" style="width: <?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['post_qty']->value*100)/$_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
%;"></span></div>
                                <?php } else { ?>
                                    <span class="rb-meter-inline zero"><?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['rating']->value));?>
</span>
                                    <div class="meter histogram"><span class="rb-meter-bar" style="width: 0%;"></span></div>
                                <?php }?>
                                <span class="<?php if ($_smarty_tpl->tpl_vars['post_qty']->value==0) {?>zero<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_qty']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php } ?>
                        </div>
                    </div>

                    <div class="rb-selected-filter" id="abt__discussion_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating']) {?>
                            <div class="rb-stars">
                                <p><?php echo $_smarty_tpl->__("selected");?>
: <?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating']));?>
 <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating'])), 0);?>
</p>

                                <a href="javascript:void(0);" class="ty-btn cm-abt-filter-post" data-ca-rating="0" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <span><?php echo $_smarty_tpl->__("show_all");?>
</span>
                                </a>
                            </div>
                        <?php }?>
                    <!--abt__discussion_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                </div>
                <?php }?>
                
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")||$_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                    <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer");?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                <?php }?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                <span class="ut2-vr-user"><?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer_bp");?>
</span>
                                            <?php }?>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type']!=="A") {?>
                                            <div class="ty-discussion-post__rating-stars">
                                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING")||$_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                                                    <div class="clearfix ty-discussion-post__rating">
                                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="ty-discussion-post__message-text">
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message'])>530) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_more");?>
</span><span class="see-less"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_less");?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                    <?php }?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="ty-discussion-post__message">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                    <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer");?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                <?php }?>
                                                <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                <span class="ut2-vr-user"><?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer_bp");?>
</span>
                                            <?php }?>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                        <div class="ty-discussion-post__rating-stars">
                                            <div class="clearfix ty-discussion-post__rating">
                                                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                <?php } ?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


                </div> 
                
                <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                    <div class="right-col">
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_title");?>
</div>
                            <p><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_descr");?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                            <?php }?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                    <?php }?>              
                <?php }?>
                

                <?php } else { ?>
                <div class="rb-no-items">
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_title");?>
</div>
                            <p><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_descr");?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                            <?php }?>
                        </div>
                    <?php } else { ?>
                        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['content'];?>

        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value==smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!=smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

                
                <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                <div class="left-col">
                <div class="abt__ut2_rb">
                    <div class="rb-ratings">
                        <div class="rb-rounded-overall">
                            <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="E") {?>
                                <?php if (in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials'],array('B','R'))) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>
                                        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['discussion']->value['average_rating'], null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
                                        <div class="rb-average-rating"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.asr_title");?>
</div><?php }?>
                                        <div class="rb-stars"><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value)), 0);?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="desktop") {?>
                                            <div class="rb-average-rating-comments mobile">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
:<br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
</span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="rb-average-rating-comments">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>
                                        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['discussion']->value['average_rating'], null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
                                        <div class="rb-average-rating"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.asr_title");?>
</div><?php }?>
                                        <div class="rb-stars"><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value)), 0);?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="desktop") {?>
                                            <div class="rb-average-rating-comments mobile">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
:<br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
</span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="rb-average-rating-comments">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part1");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_rating']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("abt__ut2.discussion.avr_part2");?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>

                    <div class="rb-histogram">
                        <div class="rb-review-histogram">
                        <?php  $_smarty_tpl->tpl_vars['post_qty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post_qty']->_loop = false;
 $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['search']['posts_rating_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post_qty']->key => $_smarty_tpl->tpl_vars['post_qty']->value) {
$_smarty_tpl->tpl_vars['post_qty']->_loop = true;
 $_smarty_tpl->tpl_vars['rating']->value = $_smarty_tpl->tpl_vars['post_qty']->key;
?>
                            <div class="rb-rating-filter">
                                <?php if ($_smarty_tpl->tpl_vars['post_qty']->value) {?>
                                    <a href="javascript:void(0);" class="rb-meter-inline cm-abt-filter-post link" data-ca-rating="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['rating']->value));?>
</span></a>
                                    <div class="meter histogram"><span class="rb-meter-bar" style="width: <?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['post_qty']->value*100)/$_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
%;"></span></div>
                                <?php } else { ?>
                                    <span class="rb-meter-inline zero"><?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['rating']->value));?>
</span>
                                    <div class="meter histogram"><span class="rb-meter-bar" style="width: 0%;"></span></div>
                                <?php }?>
                                <span class="<?php if ($_smarty_tpl->tpl_vars['post_qty']->value==0) {?>zero<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_qty']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php } ?>
                        </div>
                    </div>

                    <div class="rb-selected-filter" id="abt__discussion_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating']) {?>
                            <div class="rb-stars">
                                <p><?php echo $_smarty_tpl->__("selected");?>
: <?php echo $_smarty_tpl->__("abt__ut2.discussion.star",array($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating']));?>
 <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['discussion']->value['search']['abt__rating'])), 0);?>
</p>

                                <a href="javascript:void(0);" class="ty-btn cm-abt-filter-post" data-ca-rating="0" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <span><?php echo $_smarty_tpl->__("show_all");?>
</span>
                                </a>
                            </div>
                        <?php }?>
                    <!--abt__discussion_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                </div>
                <?php }?>
                
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")||$_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                    <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer");?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                <?php }?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                <span class="ut2-vr-user"><?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer_bp");?>
</span>
                                            <?php }?>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type']!=="A") {?>
                                            <div class="ty-discussion-post__rating-stars">
                                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING")||$_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                                                    <div class="clearfix ty-discussion-post__rating">
                                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="ty-discussion-post__message-text">
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message'])>530) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_more");?>
</span><span class="see-less"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_less");?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                    <?php }?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="ty-discussion-post__message">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                    <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer");?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                <?php }?>
                                                <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['verified_buyer']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['abt__is_buyer']) {?>
                                                <span class="ut2-vr-user"><?php echo $_smarty_tpl->__("abt__ut2.discussion.verified_buyer_bp");?>
</span>
                                            <?php }?>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                        <div class="ty-discussion-post__rating-stars">
                                            <div class="clearfix ty-discussion-post__rating">
                                                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                <?php } ?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


                </div> 
                
                <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                    <div class="right-col">
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_title");?>
</div>
                            <p><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_descr");?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                            <?php }?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                    <?php }?>              
                <?php }?>
                

                <?php } else { ?>
                <div class="rb-no-items">
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
                        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_title");?>
</div>
                            <p><?php echo $_smarty_tpl->__("abt__ut2.discussion.new_post_descr");?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                            <?php }?>
                        </div>
                    <?php } else { ?>
                        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0);?>

                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['content'];?>

        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    </div>
<?php }
}?><?php }} ?>
