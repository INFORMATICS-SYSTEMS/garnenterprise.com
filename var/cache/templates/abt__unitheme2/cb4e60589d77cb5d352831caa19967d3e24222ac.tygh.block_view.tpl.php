<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/block_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360358130610e3a93307384-08112396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4e60589d77cb5d352831caa19967d3e24222ac' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/block_view.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '360358130610e3a93307384-08112396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'discussion' => 0,
    'title' => 0,
    'post' => 0,
    'settings' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a933602a6_66588938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a933602a6_66588938')) {function content_610e3a933602a6_66588938($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['discussion'] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>


    <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
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
                                <div class="ty-discussion-post__message<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b><br/>
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
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message'])>300) {?>
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
                            <?php }?>
                        </div>
                        
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
        <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0);?>

    <?php }?>

    <?php $_smarty_tpl->tpl_vars['block'] = new Smarty_variable(array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>1,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1), 0);?>


<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/block_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/block_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['discussion'] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>


    <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
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
                                <div class="ty-discussion-post__message<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator']==="Y"&&$_smarty_tpl->tpl_vars['post']->value['user_type']==="A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars(fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b><br/>
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
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message'])>300) {?>
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
                            <?php }?>
                        </div>
                        
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
        <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0);?>

    <?php }?>

    <?php $_smarty_tpl->tpl_vars['block'] = new Smarty_variable(array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>1,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1), 0);?>


<?php }
}?><?php }} ?>
