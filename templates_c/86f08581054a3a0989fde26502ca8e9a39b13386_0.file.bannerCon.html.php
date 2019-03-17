<?php
/* Smarty version 3.1.30, created on 2018-12-28 10:32:56
  from "D:\test\happygo\templates\bannerCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c258b5816f8a0_76741149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f08581054a3a0989fde26502ca8e9a39b13386' => 
    array (
      0 => 'D:\\test\\happygo\\templates\\bannerCon.html',
      1 => 1545963625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c258b5816f8a0_76741149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bannerCon.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/jquery.idcode.css">
    <title>Document</title>
</head>

<body>

    <!-- 头部开始 -->
    <div class="header">
        <div class="header_top">
            <div class=" wr clearfix">
                <div class="header_top_left fl">
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
                <div class="header_top_right fr">
                    <ul>
                        <li><a href="csmIndex.html">合作招商</a><span class="line">|</span></li>
                        <li><a href="logon.html">订单查询</a><span class="line">|</span></li>
                        <li><a href="#">我的快乐购</a><span class="line">|</span></li>
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
                            <a href="#">客服中心<b class="arrow_down"></b></a>

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
                <li class="home"><a href="">首页</a></li>
                <li><a href="">TV直播</a></li>
                <li><a href="">网易严选</a></li>
                <li><a href="">一县一品</a></li>
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
                        <div class="rnuc_info_box">
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
                <div class="f_c_t_list">
                    <a href="logon.html">
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

    <!-- banner商品列表详情开始 -->
    <div class="zt_img">
        <img src="imgs/csj_banner2.jpg" alt="">
    </div>
    <div class="wr">
        <ul class="mryh_goods lazyload clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freshFoods']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
            <li>
                <a href="javascript:;">
                    <p class="p_img">
                        <img src="imgs/nn4.png" alt="" load-url="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
">
                    </p>
                    <p class="p_title">
                        <?php echo $_smarty_tpl->tpl_vars['val']->value["goodsdesc"];?>

                    </p>
                    <div class="p_p">
                        <div class="pp_delPrice">
                            <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value["goodsoldprice"];?>
</del>
                        </div>
                        <span class="price1">快乐价
                            <span class="money_icon">￥</span>
                            
                            <span class="now_price"><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsnewsprice"];?>
</span>
                        </span>
                    </div>
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
        </ul>
    </div>
    <!-- banner商品列表详情结束 -->

    <!-- footer开始 -->
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
                        <dd><a href="">税费收取规则</a></dd>
                        <dd><a href="">新手指南</a></dd>
                        <dd><a href="">用户协议</a></dd>
                        <dd><a href="">常见问题</a></dd>
                    </dl>
                    <dl>
                        <dt>会员服务</dt>
                        <dd><a href="">快乐币政策</a></dd>
                        <dd><a href="">会员等级</a></dd>
                        <dd><a href="">会员权益</a></dd>
                    </dl>
                    <dl>
                        <dt>支付方式</dt>
                        <dd><a href="">快乐币支付</a></dd>
                        <dd><a href="">在线支付</a></dd>
                        <dd><a href="">货到付款</a></dd>
                        <dd><a href="">优惠券支付</a></dd>
                    </dl>
                    <dl>
                        <dt>配送方式</dt>
                        <dd><a href="">配送说明</a></dd>
                        <dd><a href="">包邮政策</a></dd>
                        <dd><a href="">费用说明</a></dd>
                    </dl>
                    <dl>
                        <dt>售后服务</dt>
                        <dd><a href="">电子发票</a></dd>
                        <dd><a href="">退货政策</a></dd>
                        <dd><a href="">售后咨询</a></dd>
                        <dd><a href="">退货办理</a></dd>

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
                <li><a href="">关于芒果超媒</a><span class="line"></span></li>
                <li><a href="">投资者关系</a><span class="line"></span></li>
                <li><a href="">自营品牌招商</a><span class="line"></span></li>
                <li><a href="">联系我们</a><span class="line"></span></li>
                <li><a href="">营业证照</a></li>
            </ul>
        </div>
        <div class="footer_copy">
            <div class="wr">
                <p class="copyright_des1">Copyright© 2006-2018 happigo. All Rights Reserved 免费服务热线: 400-705-1111 |
                    固话也可拨打: 400-705-8800
                </p>
                <p>湘ICP备17009657号 信息网络传播视听节目许可证号：1810530 <img src="imgs/jh.png" alt="">湘公网安备 43010502000556号</p>
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
    <!-- footer结束 -->


</body>
<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bannerCon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/header.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.idcode.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>


<?php echo '</script'; ?>
>

</html><?php }
}
