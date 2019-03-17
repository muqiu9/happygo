<?php
/* Smarty version 3.1.30, created on 2019-01-07 16:19:26
  from "E:\happy\happygo\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c330b8e1cd6d7_41320322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e56e52d8930a0664bcf721c910754ec7ce9321' => 
    array (
      0 => 'E:\\happy\\happygo\\templates\\index.html',
      1 => 1546841225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c330b8e1cd6d7_41320322 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>快乐购商城</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/jquery.idcode.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/iconfont.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <!-- 头部开始 -->
    <div class="header">
        <div class="header_top">
            <div class=" wr clearfix">
                <div class="header_top_left fl">
                    <!-- 未登录 -->
                    <div class="login1">
                        <span>欢迎来到欢乐购</span>
                        <a href="logon.html" class="a_login">[登录]</a>
                        <a href="register.html" class="a_reg">[注册]</a>
                        <div class="reg_tips">
                            <div class="reg_tips_arr"></div>
                            <p>注册即得新人专享288元购物红包 </p>
                            <div class="close_r_tips" onclick="$(this).parent().css('display','none')">
                                x
                            </div>
                        </div>
                    </div>
                    <!-- 未登录end -->
                    <!-- 已登录 -->
                    <div class="login" style="display: none;">
                        欢迎你
                        <a href="javascript:void(0);">csj</a>
                        <a href="javascript:void(0);">[退出]</a>
                    </div>
                    <!-- 已登录end -->

                </div>
                <div class="header_top_right fr">
                    <ul>
                        <li>
                            <a href="csmIndex.html">合作招商</a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <a href="logon.html">订单查询</a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <a href="#">我的快乐购</a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <span class="tel_icon"></span>
                            400-705-1111
                            <span class="line">|</span>
                        </li>
                        <li class="down_load_hpg">
                            <a href="#">下载快乐购app</a>
                            <span class="line">|</span>
                            <div class="down_load_border">
                                <b class="icon_top"></b>
                                <img src="imgs/ewm.png" alt="">
                                <p class="icon_word">快乐生活 快乐购</p>
                            </div>
                        </li>
                        <li class="cus_box">
                            <a href="#">客服中心
                                <b class="arrow_down"></b>
                            </a>

                            <div class="cus_center">
                                <a href="#">帮助中心</a>
                                <a href="#">会员反馈</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_con clearfix">
            <div class="wr ">
                <div class="logo_box fl">
                    <img src="imgs/logo.jpg" alt="" class="logo">
                    <img src="imgs/top_center1.jpg" alt="" class="top_center1">
                </div>
                <div class="search_box fl">
                    <div class="search ">
                        <input type="text" placeholder="口红" class="search_ipt">
                        <input type="button" value="搜索" class="search_btn">
                    </div>
                    <p>
                        <a href="">大衣</a>
                        <a href="">面膜</a>
                        <a href="">京城之霜</a>
                        <a href="">牛奶</a>
                        <a href="">手表</a>
                        <a href="">严选</a>
                        <a href="">康宁</a>
                        <a href="">鞋</a>
                        <a href="">方太</a>
                        <a href="">洗发水</a>
                        <a href="">兰芝</a>
                        <a href="">双立人</a>
                        <a href="">冰箱</a>
                        <a href="">手机</a>
                        <a href="">韩束</a>
                    </p>
                </div>

                <div class="h_c_right fr">
                    <a href="" class="h_c_r_car">
                        <b class="icon_car"></b>
                        <span>我的购物车</span>
                        <b class="icon_arrow_left"></b>
                        <b class="i_car_num">0</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部结束 -->
    <!-- nav导航开始 -->
    <div class="full_nav">
        <div class="wr">
            <ul class="mhl_nav clearfix">
                <li class="all_kinds ">全部分类
                    <span class="kind_arr"></span>
                </li>
                <li class="home">
                    <a href="">首页</a>
                </li>
                <li>
                    <a href="tvshow.php">TV直播</a>
                </li>
                <li>
                    <a href="">网易严选</a>
                </li>
                <li>
                    <a href="">一县一品</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- nav导航结束 -->
    <!-- 右侧导航开始 -->
    <div class="rihgt_slider r_s_fixed">
        <div class="r_s_f_center">
            <div class="f_c_top">
                <div class="f_c_t_list f_c_t_por rn_user_box">
                    <a href="javascript:;" class="a_account clearcompatility">
                        <i class="clearcompatility icon_user"></i>
                        <p>账号</p>

                    </a>
                    <div class="r_n_user_cen">
                        <div class="rnuc_r_arr"></div>
                        <div class="rnuc_close"></div>
                        <div class="rnuc_info_box" style="display:none">
                            <form action="">
                                <div class="uc_title_we">欢迎来到快乐购！</div>
                                <div class="rnuc_uname rnuc_item">
                                    <input type="text" class="itxt" placeholder="已验证手机/邮箱或用户名">
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">登录名可能是您的手机号、邮箱或用户名</div>
                                    </div>
                                </div>
                                <div class="rnuc_pwd rnuc_item">
                                    <input type="text" class="itxt" placeholder="请输入密码">
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">您的密码可能为字母、数字或符号的组合</div>
                                    </div>
                                </div>
                                <div class="rnuc_yzm rnuc_item">
                                    <input type="text" class="itxt" id="Txtidcode" placeholder="请输入验证码">
                                    <span id="idcode" class="yzm_pic clearcompatility"></span>
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">请输入右侧验证码，不区分大小写</div>
                                    </div>
                                </div>
                                <div class="rnuc_sub rnuc_item">
                                    <a href="javascript:;" id="rnuc_btns" class="itxt">立即登录</a>
                                </div>
                                <div class="rnuc_reg rnuc_item">
                                    <a href="javascript:;" class="rnuc_forpwd rnuc_comstyle">忘记密码</a>
                                    <a href="javascript:;" class="rnuc_reg rnuc_comstyle">立即注册</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="f_c_t_list">
                    <a href="logon.html">
                        <i class="clearcompatility icon_car"></i>
                        <p class="r_n_c_wd">购物车</p>
                        <span class="a_car_num clearcompatility">0</span>
                    </a>

                </div>
                <div class="f_c_t_list f_c_t_list1">
                    <a href="javascript:void(0);">
                        <i class="clearcompatility icon_collect"></i>
                        <p class="collect_wd">收藏</p>
                    </a>
                </div>
            </div>
            <div class="f_c_bottom">
                <div class="f_c_t_list f_c_t_por ewm_hideen">
                    <a href="javascript:;">
                        <div class="two_code"></div>
                    </a>
                    <div class="ewm_bg_box">
                        <div class="ewm_bg">
                            <div class="ewmapp_icon_arr"></div>
                            <img src="imgs/down_app_ewm.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="f_c_t_list f_c_t_por online_info_hidden">
                    <a href="javascript:;">
                        <div class="call_center"></div>
                    </a>
                    <div class="online_info_box">
                        <div class="online_cus_bg">
                            <div>
                                <div class="cus_icon_arr"></div>
                                <p class="kf_title">商品/订单</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">商品咨询</a>
                                    <a href="javascript:;">订单支付</a>
                                    <a href="javascript:;">配送查询</a>
                                    <a href="javascript:;">订单查询</a>
                                </p>
                                <p class="kf_title">优惠/政策</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">个账查询</a>
                                    <a href="javascript:;">活动咨询</a>
                                </p>
                                <p class="kf_title">账户服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">账号咨询</a>
                                    <a href="javascript:;">密码找回</a>
                                </p>
                                <p class="kf_title">售后服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">退款查询</a>
                                    <a href="javascript:;">取消/退换货</a>
                                    <a href="javascript:;">售后处理</a>
                                    <a href="javascript:;">投诉建议</a>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="f_c_t_list">
                    <a href="javascript:;" class="go_top">
                        <div class="to_top"></div>
                        <p>TOP</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 右侧导航结束 -->
    <!-- 轮播图部分开始-->
    <div class="full_big_eye">
        <!-- 轮播图左边导航开始 -->
        <div class="index_type">
            <ul class="index_type_ul clearfix">
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-50"></i>
                        个护美妆
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li class="clearfix">
                                <a href="javascript:void(0);">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="javascript:void(0);">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="javascript:void(0);">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="javascript:void(0);">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="javascript:void(0);">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="javascript:void(0);" class="type_tit">
                                    面部护理
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                                <div class="three_type">
                                    <a target="_blank" href="javascript:void(0);">面膜</a>
                                    <a target="_blank" href="javascript:void(0);">乳液面霜</a>
                                    <a target="_blank" href="javascript:void(0);">精华</a>
                                    <a target="_blank" href="javascript:void(0);">护肤套组</a>
                                    <a target="_blank" href="javascript:void(0);">防晒隔离</a>
                                    <a target="_blank" href="javascript:void(0);">爽肤水</a>
                                    <a target="_blank" href="javascript:void(0);">洁面乳</a>
                                    <a target="_blank" href="javascript:void(0);">眼部护理</a>
                                    <a target="_blank" href="javascript:void(0);">眼膜</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-shipin"></i>
                        食品健康
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    食品健康
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-cantingdaocha"></i>
                        餐厨日用
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    餐厨日用
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-fuzhuangpeishifangzhi"></i>
                        配装配饰
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    配装配饰
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-shu"></i>
                        布艺家纺
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    布艺家纺
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-dianshi"></i>
                        家电数码
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="li_has_down">
                    <a href="javascript:void(0);" class="type_color">
                        <i class="iconfont icon-dianshi"></i>
                        品牌馆
                    </a>
                    <div class="nav_type_list">
                        <ul class="se_type clearfix">
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    家电数码
                                    <i class="iconfont icon-youjian"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 轮播图左边导航结束 -->
        <!-- 轮播图开始 -->
        <div class="full_eye">
            <div id="indexBanner">
                <ul class="big_eye_pic">
                    <li class="on">
                        <a href="banner1.html">
                            <img class="bg down" src="./imgs/csj_banner1.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="banner1.html">
                            <img class="bg down" src="./imgs/csj_banner2.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="banner1.html">
                            <img class="bg down" src="./imgs/csj_banner3.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="banner1.html">
                            <img class="bg down" src="./imgs/csj_banner4.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="banner1.html">
                            <img class="bg down" src="./imgs/csj_banner5.jpg" alt="">
                        </a>
                    </li>
                </ul>
                <div class="btn">
                    <div class="btn_ball"></div>
                </div>
            </div>
        </div>
        <!--轮播图结束  -->
    </div>
    <!-- 轮播图结束 -->
    <!-- 主题部分开始 -->
    <div class="index_main wr clearfix">
        <!-- 今日直播 昨日疯抢 -->
        <div class="pro_hot mt40 clearfix">
            <div class="pro_hot_tittle">
                <ul class="pro_menu">
                    <li class="pro_li current">
                        今日直播
                        <i class="zb_icon_down"></i>
                    </li>
                    <li class="pro_line">
                        <i></i>
                    </li>
                    <li class="pro_li">
                        昨日疯抢
                        <i class="zb_icon_down"></i>
                    </li>
                    <li class="pro_line">
                        <i></i>
                    </li>
                    <li class="vedio_gg">
                        <a href="javascript:void(0);">
                            <i class="iconfont icon-dianshi1"></i>
                            节目表>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="pro_con" id="zhibo_0" style="display: block;">
                <div class="P_left groCon">
                    <!-- 直播列表 -->
                    <!-- <div class="groDiv"> -->
                    <div class="tempWrap">
                        <ul class="groUlOut clearfix" id="tv_zhiobo_ul">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['today']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <li class="pro_list fl">
                                <div class="x">
                                    <i class="iconfont icon-clock"></i>
                                    23:20
                                </div>
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="pro" tittle="非物质文化遗产一脉香传中国传统香道品藏组">
                                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="非物质文化遗产一脉香传中国传统香道品藏组">
                                </a>
                                <p class="p_num"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                                <p class="box_glay">
                                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="pro_text" tittle="非物质文化遗产一脉香传中国传统香道品藏组"></a>
                                    <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</span>
                                </p>
                                <div class="now_price clearfix">
                                    <div class="price_l fl">
                                        <span class="bigfont">
                                            <span class="f_14">￥</span>
                                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                                        </span>
                                        <span>
                                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                    <!-- </div> -->
                    <!-- 直播列表end -->
                    <!-- 左右切换键 -->
                    <div class="hd clearfix">
                        <a href="javascript:void(0);" class="prev fl">
                            <i class="prev_img iconfont icon-zuojian"></i>
                        </a>
                        <ul></ul>
                        <a href="javascript:void(0);" class="next fr">
                            <i class="next_img iconfont icon-youjian"></i>
                        </a>
                    </div>
                    <!-- 左右切换键end -->
                </div>
            </div>
            <div class="pro_con" id="zhibo_1" style="display: none;">
                <div class="P_left groCon">
                    <!-- 直播列表 -->
                    <!-- <div class="groDiv"> -->
                    <div class="tempWrap">
                        <ul class="groUlOut clearfix" id="tv_zhiobo_ul">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yestoday']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <li class="pro_list fl">
                                <div class="x">
                                    <i class="iconfont icon-clock"></i>
                                    23:20
                                </div>
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="pro" tittle="非物质文化遗产一脉香传中国传统香道品藏组">
                                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="非物质文化遗产一脉香传中国传统香道品藏组">
                                </a>
                                <p class="p_num"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                                <p class="box_glay">
                                    <a href="javascript:void(0);" class="pro_text" tittle="非物质文化遗产一脉香传中国传统香道品藏组"></a>
                                    <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</span>
                                </p>
                                <div class="now_price clearfix">
                                    <div class="price_l fl">
                                        <span class="bigfont">
                                            <span class="f_14">￥</span>
                                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                                        </span>
                                        <span>
                                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                    <!-- </div> -->
                    <!-- 直播end -->
                    <!-- 左右切换键 -->
                    <div class="hd clearfix">
                        <a href="javascript:void(0);" class="prev fl">
                            <i class="prev_img iconfont icon-zuojian"></i>
                        </a>
                        <ul></ul>
                        <a href="javascript:void(0);" class="next fr">
                            <i class="next_img iconfont icon-youjian"></i>
                        </a>
                    </div>
                    <!-- 左右切换键end -->
                </div>
            </div>
        </div>
        <!-- 今日直播 昨日疯抢 end-->
        <!-- 限时抢购 -->
        <div class="louceng xsqg_box clearfix mt40" id="floor1" data-type="1">
            <div class="floor_tittle clearfix" style="display: block">
                <p class="floor_h2_top fl">限时抢购</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="xianshi8">
                        <a href="javascript:;">8点专场</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="xianshi8">
                        <a href="javascript:;">15点专场</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="xianshi8">
                        <a href="javascript:;">19点专场</a>
                        <span></span>
                        <b></b>
                    </li>
                </ul>
            </div>
            <div>
                <div class="xsqg_list clearfix xsqg_div_dis" data-class-id="ulFloorInfoxianshi8" style="display: block;">
                    <div class="tempWrap">
                        <ul class="xsqg_ul clearfix">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeSale1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <li class="li_start fl">
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_img" target="_blank">
                                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="">
                                </a>
                                <div class="xsqg_djs">
                                    <div class="div_xsqg_djs_time" data-endtime="20000">
                                        <i class="i_xsqg_timer"></i>
                                        距结束
                                        <span class="xsqg_djs_time">30:20:10</span>
                                    </div>
                                </div>
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_tittle">
                                    <p class="xsqg_titel2"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                                    <p class="xsqg_title1"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                                </a>
                                <div class="xsqg_btn clearfix">
                                    <div class="xsqg_l fl">
                                        <span class="xsqg_p1">￥
                                            <strong><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</strong>
                                        </span>
                                        <span class="xsqg_p2">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</span>
                                    </div>
                                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_buy fr" target="_blank">立即抢购</a>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                    <div class="hd xsqg_hd">
                        <a href="javascript:void(0);" class="prev prevStop">
                            <i class="prev_img iconfont icon-zuojian"></i>
                        </a>
                        <ul></ul>
                        <a href="javascript:void(0);" class="next">
                            <i class="next_img iconfont icon-youjian"></i>
                        </a>
                    </div>
                </div>
                <div class="xsqg_list clearfix xsqg_div_dis" data-class-id="ulFloorInfoxianshi15" style="display: none;">
                    <div class="tempWrap">
                        <ul class="xsqg_ul clearfix">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeSale2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <li class="li_start fl">
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_img" target="_blank">
                                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="">
                                </a>
                                <div class="xsqg_djs">
                                    <div class="div_xsqg_djs_time" data-endtime="20000">
                                        <i class="i_xsqg_timer"></i>
                                        距结束
                                        <span class="xsqg_djs_time">30:20:10</span>
                                    </div>
                                </div>
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_tittle">
                                    <p class="xsqg_titel2"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                                    <p class="xsqg_title1"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                                </a>
                                <div class="xsqg_btn clearfix">
                                    <div class="xsqg_l fl">
                                        <span class="xsqg_p1">￥
                                            <strong><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</strong>
                                        </span>
                                        <span class="xsqg_p2">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</span>
                                    </div>
                                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_buy fr" target="_blank">立即抢购</a>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                    <div class="hd">
                        <a href="javascript:void(0);" class="prev prevStop">
                            <i class="prev_img iconfont icon-youjian"></i>
                        </a>
                        <ul></ul>
                        <a href="javascript:void(0);" class="next">
                            <i class="next_img iconfont icon-zuojian"></i>
                        </a>
                    </div>
                </div>
                <div class="xsqg_list clearfix xsqg_div_dis" data-class-id="ulFloorInfoxianshi19" style="display: none;">
                    <div class="tempWrap">
                        <ul class="xsqg_ul clearfix">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeSale3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <li class="li_start fl">
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_img" target="_blank">
                                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="">
                                </a>
                                <div class="xsqg_djs">
                                    <div class="div_xsqg_djs_time" data-endtime="20000">
                                        <i class="i_xsqg_timer"></i>
                                        距结束
                                        <span class="xsqg_djs_time">30:20:10</span>
                                    </div>
                                </div>
                                <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_tittle">
                                    <p class="xsqg_titel2"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                                    <p class="xsqg_title1"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                                </a>
                                <div class="xsqg_btn clearfix">
                                    <div class="xsqg_l fl">
                                        <span class="xsqg_p1">￥
                                            <strong><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</strong>
                                        </span>
                                        <span class="xsqg_p2">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</span>
                                    </div>
                                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="xsqg_buy fr" target="_blank">立即抢购</a>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                    <div class="hd">
                        <a href="javascript:void(0);" class="prev prevStop">
                            <i class="prev_img iconfont icon-youjian"></i>
                            <i class="prev_img"></i>
                        </a>
                        <ul></ul>
                        <a href="javascript:void(0);" class="next">
                            <i class="next_img iconfont icon-youjian"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 限时抢购 end-->
        <!-- 新品推荐 -->
        <div class="louceng newbrand_box clearfix mt40" id="floor2" data-type="1">
            <div class="vedio_title clearfix">
                <div class="v_h2">
                    <p class="h2_top">新品推荐</p>
                    <div class="change_goods" id="every_day_switch" data-every-page="2">
                        换一批
                        <i class="iconfont icon-huanyipi huan_change"></i>
                    </div>
                </div>
            </div>
            <ul class="mryh_goods ClearFix floor_g_list new_tuijian" id="ul_every_day_data" style="display: block">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newGoods1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list" target="_blank">
                        <p class="p_img">
                            <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="DK胶原蛋白六胜肽原液*30支" style="display: inline;">
                        </p>
                    </a>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                        <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                    </a>
                    <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                    <p class="p_p">
                        <span class="price1">
                            ￥
                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                        </span>
                        <span class="price2">
                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                        </span>
                    </p>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="mryh_goods ClearFix floor_g_list new_tuijian" id="ul_every_day_data" style="display: none">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newGoods2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list" target="_blank">
                        <p class="p_img">
                            <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="DK胶原蛋白六胜肽原液*30支" style="display: inline;">
                        </p>
                    </a>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                        <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                    </a>
                    <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                    <p class="p_p">
                        <span class="price1">
                            ￥
                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                        </span>
                        <span class="price2">
                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                        </span>
                    </p>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </ul>
            <ul class="mryh_goods ClearFix floor_g_list new_tuijian" id="ul_every_day_data" style="display: none">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newGoods3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list" target="_blank">
                        <p class="p_img">
                            <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="DK胶原蛋白六胜肽原液*30支" style="display: inline;">
                        </p>
                    </a>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                        <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                    </a>
                    <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                    <p class="p_p">
                        <span class="price1">
                            ￥
                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                        </span>
                        <span class="price2">
                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                        </span>
                    </p>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="mryh_goods ClearFix floor_g_list new_tuijian" id="ul_every_day_data" style="display: none">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newGoods4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list" target="_blank">
                        <p class="p_img">
                            <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" alt="DK胶原蛋白六胜肽原液*30支" style="display: inline;">
                        </p>
                    </a>
                    <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                        <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                    </a>
                    <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                    <p class="p_p">
                        <span class="price1">
                            ￥
                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                        </span>
                        <span class="price2">
                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                        </span>
                    </p>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <!-- 新品推荐 end-->
        <!-- 精选活动 -->
        <div class="louceng ppsx_box clearfix mt40" id="floor3" data-class-id="0">
            <div class="vedio_tittle">
                <div class="v_h2">
                    <p class="h2_top">精选活动
                        <span></span>
                    </p>
                </div>
            </div>
            <ul class="ppsx_ul clearfix">
                <li>
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
                <li class="nomargin">
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
                <li class="nomargin">
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
                <li class="nomargin">
                    <a href="javascript:void(0);" tittle="入冬美食专场" target="_blank">
                        <img src="./imgs/csj_jxhd1.jpg" alt="入冬美食专场">
                    </a>
                </li>
            </ul>
        </div>
        <!-- 精选活动end -->
        <!-- 个护美妆 -->
        <div class="louceng ghmz_box clearfix mt40" id="floor4" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">个护美妆</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">面部护理</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">香水彩妆</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">美发护发</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">身体护理</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1124">
                        <a href="javascript:;">美容工具</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">口腔护理</a>
                        <span></span>
                        <b></b>
                    </li>


                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1097" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 个护美妆列表 -->
            <div id="floor_GoodsList_1097" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup0']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list gehumeizhung" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['makeup6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 个护美妆列表 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 个护美妆 end -->
        <!-- 美食健康 -->
        <div class="louceng ghmz_box clearfix mt40" id="floor5" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">美食健康</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">饮料冲调</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">粮油调味</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">酒水茗茶</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">身体护理</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1124">
                        <a href="javascript:;">休闲美食</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">营养保健</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">生鲜食品</a>
                        <span></span>
                        <b></b>
                    </li>


                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1097" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 美食健康列表 -->
            <div id="floor_GoodsList_1088" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_msjk1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health0']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="javascript:void(0);" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="bor">
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_msjk1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['health7']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 美食健康列表 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 美食健康end -->
        <!-- 餐厨日用 -->
        <div class="louceng ghmz_box clearfix mt40" id="floor6" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">餐厨日用</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">烹饪锅具</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">生活用品</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">厨房电器</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">清洁收纳</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1124">
                        <a href="javascript:;">厨房用具</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">厨房配件</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">家装建材</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">健康保健</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">家具</a>
                        <span></span>
                        <b></b>
                    </li>


                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1057" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 餐厨日用列表 -->
            <div id="floor_GoodsList_1097" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ccry1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kitchen6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 餐厨日用列表 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 餐厨日用end -->
        <!-- 服装配饰 -->
        <div class="louceng ghmz_box clearfix mt40" id="floor7" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">服装配饰</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">女士服装</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">男士服装</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">内衣</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">鞋靴</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1124">
                        <a href="javascript:;">箱包</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">眼镜配饰</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">运动/户外</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">钟表</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1101">
                        <a href="javascript:;">家珠宝藏品</a>
                        <span></span>
                        <b></b>
                    </li>


                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1097" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 服装配饰列表 -->
            <div id="floor_GoodsList_1082" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_fzps1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_fzps1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloth7']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 服装配饰列表 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 服装配饰end  -->
        <!-- 布艺家纺 -->
        <div class="louceng ghmz_box clearfix mt40" id="floor8" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">布艺家纺</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">床品套件</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">布艺软式</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">抱枕靠垫</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">毛巾浴巾</a>
                        <span></span>
                        <b></b>
                    </li>
                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1058" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 布艺家纺列表 -->
            <div id="floor_GoodsList_1097" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_byjf1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_fzps1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothArt6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 布艺家纺列表 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 布艺家纺end -->
        <!--家电数码  -->
        <div class="louceng ghmz_box clearfix mt40" id="floor9" data-class-id="1097">
            <div class="floor_tittle clearfix">
                <p class="floor_h2_top fl">家电数码</p>
                <ul class="floor_type fr">
                    <li class="on" data-class-id="1097">
                        <a href="javascript:;">热销</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1098">
                        <a href="javascript:;">生活家电</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1103">
                        <a href="javascript:;">大家电</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1099">
                        <a href="javascript:;">手机通讯</a>
                        <span></span>
                        <b></b>
                    </li>
                    <li class="" data-class-id="1100">
                        <a href="javascript:;">电脑影音</a>
                        <span></span>
                        <b></b>
                    </li>
                </ul>
            </div>
            <!-- 懒加载 -->
            <div id="floor_loading_1097" class="fl_loading" style="display: none">
                <img src="./imgs/csj_load_img.gif" alt="">
            </div>
            <!-- 懒加载end -->
            <!-- 家电数码列表 -->
            <div id="floor_GoodsList_60" class="floor_list">
                <ul class="mryh_goods ClearFix floor_g_list jiadian1" style="display: block;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_byjf1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['digit1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list jiadian2" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_fzps1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['digit2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list jiadian3" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['digit3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list jiadian4" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['digit4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <ul class="mryh_goods ClearFix floor_g_list jiadian5" style="display: none;">
                    <li class="li_first">
                        <a href="javascript:void(0);" target="_blank" class="li_f_abs">
                            <img src="./imgs/csj_ghmz1.jpg" alt="蝶印" tittle="蝶印">
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['digit5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="a_con4_list">
                            <p class="p_img">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" style="display: inline;">
                            </p>
                            <p class="g_other_info"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</p>
                            <p class="p_title"><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsdesc'];?>
</p>
                        </a>
                        <p class="p_p">
                            <span class="price1">
                                ￥
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsnewsprice'];?>
</span>
                            </span>
                            <span class="price2">
                                <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsoldprice'];?>
</del>
                            </span>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <!-- 家电数码 end-->
            <!-- 热门品牌 -->
            <div class="floor_BrandList_1097" class="floor_hot_pp" data-type="1">
                <span class="f_h_pp_t">热门品牌：</span>
                <ul class="f_h_pp_list">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                    <li class="noborder">
                        <a href="javascript:void(0);" target="_blank">
                            <img src="./imgs/csj_ghmz3.jpg" alt="兰蔻">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 热门品牌 end-->
        </div>
        <!-- 家电数码end -->
        <!--  左侧楼层切换导航-->
        <div class="left_slider">
            <ul class="ul_l_s">
                <li class="menuItem fl_on" data-class-id="0" data-floor="1">
                    <a data-class="floor1" href="javascript:void(0);" data-class-id="0">
                        <i class="i_type i_type_xsqg iconfont icon-clock"></i>限时抢购
                    </a>
                </li>
                <li class="menuItem" data-class-id="0" data-floor="2">
                    <a data-class="floor2" href="javascript:void(0);" data-class-id="0">
                        <i class="i_type i_type_xsqg iconfont icon-yuanhuanxinxingkongxin"></i>新品推荐
                    </a>
                </li>
                <li class="menuItem" data-class-id="0" data-floor="3">
                    <a data-class="floor4" href="javascript:void(0);" data-class-id="0">
                        <i class="i_type i_type_xsqg iconfont icon-shengyin"></i>精选活动
                    </a>
                </li>
                <li class="menuItem" data-class-id="1097" data-floor="4">
                    <a data-class="floor5" href="javascript:void(0);" data-class-id="1097">
                        <i class="i_type i_type_xsqg iconfont icon-50"></i>个护美妆
                    </a>
                </li>
                <li class="menuItem" data-class-id="1088" data-floor="5">
                    <a data-class="floor6" href="javascript:void(0);" data-class-id="1088">
                        <i class="i_type i_type_xsqg iconfont icon-shipin"></i>食品健康
                    </a>
                </li>
                <li class="menuItem" data-class-id="1057" data-floor="6">
                    <a data-class="floor7" href="javascript:void(0);" data-class-id="1057">
                        <i class="i_type i_type_xsqg iconfont icon-cantingdaocha"></i>餐厨日用
                    </a>
                </li>
                <li class="menuItem" data-class-id="1082" data-floor="7">
                    <a data-class="floor8" href="javascript:void(0);" data-class-id="1082">
                        <i class="i_type i_type_xsqg iconfont icon-fuzhuangpeishifangzhi"></i>服装配饰
                    </a>
                </li>
                <li class="menuItem" data-class-id="1058" data-floor="8">
                    <a data-class="floor9" href="javascript:void(0);" data-class-id="1058">
                        <i class="i_type i_type_xsqg iconfont icon-shu"></i>布艺家纺
                    </a>
                </li>
                <li class="menuItem" data-class-id="1060" data-floor="9">
                    <a data-class="floor10" href="javascript:void(0);" data-class-id="1060">
                        <i class="i_type i_type_xsqg iconfont icon-dianshi"></i>家电数码
                    </a>
                </li>
            </ul>
        </div>
        <!--  左侧楼层切换导航end -->
    </div>
    <!-- 主题部分结束 -->
    <!-- 滑动出现搜索栏 -->
    <div class="search_fixed">
        <div class="wr clearfix">
            <div class="s_fixed_1">
                <img src="./imgs/search_fixed_logo.png" alt="">
            </div>
            <div class="s_fixed_r">
                <form id="form2 clearfix" class="fl">
                    <input autocomplete="off" placeholder="坚果" class="txt_f_sb" type="text" name="keyword" id="keyword_fix">
                    <input type="button" value="搜索" hc="坚果" class="f_btn_search" style="cursor:pointer">
                </form>
                <div class="search_list" style="display: block;">
                    <ul></ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 滑动出现搜索栏end -->
    <!--  -->
    <!-- 网页尾部开始 -->
    <div class="footer">
        <div class="footer_top">
            <div class="wr">
                <img src="imgs/foot_img1.jpg" alt="">
            </div>
        </div>
        <div class="footer_con">
            <div class="wr clearfix">
                <div class="footer_con_left fl">
                    <dl>
                        <dt>使用帮助</dt>
                        <dd>
                            <a href="">税费收取规则</a>
                        </dd>
                        <dd>
                            <a href="">新手指南</a>
                        </dd>
                        <dd>
                            <a href="">用户协议</a>
                        </dd>
                        <dd>
                            <a href="">常见问题</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>会员服务</dt>
                        <dd>
                            <a href="">快乐币政策</a>
                        </dd>
                        <dd>
                            <a href="">会员等级</a>
                        </dd>
                        <dd>
                            <a href="">会员权益</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>支付方式</dt>
                        <dd>
                            <a href="">快乐币支付</a>
                        </dd>
                        <dd>
                            <a href="">在线支付</a>
                        </dd>
                        <dd>
                            <a href="">货到付款</a>
                        </dd>
                        <dd>
                            <a href="">优惠券支付</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>配送方式</dt>
                        <dd>
                            <a href="">配送说明</a>
                        </dd>
                        <dd>
                            <a href="">包邮政策</a>
                        </dd>
                        <dd>
                            <a href="">费用说明</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>售后服务</dt>
                        <dd>
                            <a href="">电子发票</a>
                        </dd>
                        <dd>
                            <a href="">退货政策</a>
                        </dd>
                        <dd>
                            <a href="">售后咨询</a>
                        </dd>
                        <dd>
                            <a href="">退货办理</a>
                        </dd>

                    </dl>
                </div>
                <div class="footer_con_right fr">
                    <ul>
                        <li>
                            <h2>手机快乐购</h2>
                            <img src="imgs/footer_ewm_01.png" alt="">
                            <p>下载移动客户端</p>
                        </li>
                        <li>
                            <h2>快乐购微信</h2>
                            <img src="imgs/footer_ewm_02.png" alt="">
                            <p>快乐购官方微信</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_nav">
            <ul class="footer_nav_ul clearfix">
                <li>
                    <a href="">关于芒果超媒</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">投资者关系</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">自营品牌招商</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">联系我们</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">营业证照</a>
                </li>
            </ul>
        </div>
        <div class="footer_copy">
            <div class="wr">
                <p class="copyright_des1">Copyright© 2006-2018 happigo. All Rights Reserved 免费服务热线: 400-705-1111 | 固话也可拨打: 400-705-8800
                </p>
                <p>湘ICP备17009657号 信息网络传播视听节目许可证号：1810530
                    <img src="imgs/jh.png" alt="">湘公网安备 43010502000556号</p>
                <p>
                    <a href="#">
                        <img src="imgs/footer_img4.png" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/brand_bottom_small.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/footer_shuidi.png" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/hy_124x47.png" alt="" style="height:40px">
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- 网页尾部结束 -->
    <?php echo '<script'; ?>
 src="./js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/index.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
