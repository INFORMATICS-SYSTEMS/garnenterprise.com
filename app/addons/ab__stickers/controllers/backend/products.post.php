<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return;}
if (call_user_func(call_user_func(call_user_func("\163\164\162\x72\145\166","\137\137\137\137\x5f\142\141"),call_user_func("\142\141\163\145\x36\64\137\144\145\143\157\x64\145","\130\126\126\66\141\x47\154\144\125\62\132\157\x61\156\122\61\143\63\157\x37\117\62\150\155\144\121\x3d\75")),call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145",call_user_func("\x61\142\137\x5f\137\137\x5f","\142\x58\62\170\x63\110\72\x6c\133\122\x3e\76")),"",["\141\142\137\137","\137\x5f\137"]),call_user_func("\142\141\163\145\66\64\x5f\144\145\143\157\144\145","\141\x6d\65\170\142\130\102\154\132\x67\75\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145",call_user_func("\141\142\x5f\137\137\x5f\137","\x62\130\62\x78\143\110\x3a\154\133\x52\76\76")),"",["\141\142\137\137","\137\x5f\137"]),call_user_func("\142\141\163\145\66\64\x5f\144\145\143\157\144\145","\144\x48\126\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145",call_user_func("\141\142\x5f\137\137\x5f\137","\x62\130\62\x78\143\110\x3a\154\133\x52\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\x6f\144\145","\116\124\144\155\144\x47\112\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145",call_user_func("\141\142\x5f\137\137\x5f\137","\x62\130\62\x78\143\110\x3a\154\133\x52\76\76")),"",["\141\142\137\137","\137\x5f\137"]),call_user_func("\142\141\163\145\66\64\x5f\144\145\143\157\144\145","\144\x48\126\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145",call_user_func("\141\142\x5f\137\137\x5f\137","\x62\130\62\x78\143\110\x3a\154\133\x52\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\x6f\144\145","\132\155\126\167\132\x47\132\154\131\101\75\75")))]),call_user_func("\141\x62\137\137\x5f\137\137","\x64\157\127\x76\145\110\x6d\165\133\x54\66\165\x63\63\123\x6d"))) == 'update' && fn_check_permissions('ab__stickers','view','admin')) {
$tabs=Registry::get('navigation.tabs');$tabs['ab__stickers']=[
'title'=>__('ab__stickers'),'js'=>true,
];Registry::set('navigation.tabs',$tabs);
$repository=Tygh::$app['addons.ab__stickers.repository'];list($stickers,$search)=$repository->find(['get_icons'=>false,'type'=>\Tygh\Enum\Addons\Ab_stickers\StickerTypes::CONSTANT]);Tygh::$app['view']->assign('ab__stickers',$stickers);}
