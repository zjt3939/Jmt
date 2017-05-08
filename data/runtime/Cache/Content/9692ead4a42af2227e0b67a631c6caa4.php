<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0039)http://www.xiaxiangke.com/strategy.html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>下乡客·湖南乡村旅游推广平台 - 旅行游记</title>

    <meta name="keywords" content="下乡客,乡村旅游,湖南旅游,湖南亲子旅游,旅游定制,长沙周边游,湖南自驾游,湘西旅游攻略">
    <meta name="description" content="下乡客是国内首款“互联网+乡村资源”O2O互动新媒体服务平台，致力于湖南地区乡村旅游资源开发，拥有最完善的旅游攻略，提供旅游定制服务，支持周边游、自驾游、亲子游等多种旅游方式。">
    <link href="/Jmt/tpl/simplebootx/Public/css/contain.css" rel="stylesheet">
    <link href="/Jmt/tpl/simplebootx/Public/css/banner.css" rel="stylesheet">
    <!-- <link href="/Jmt/tpl/simplebootx/Public/css/pagination.css" rel="stylesheet"> -->
    <!-- <link href="/Jmt/tpl/simplebootx/Public/css/public.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/Jmt/tpl/simplebootx/Public/css/nav.css">
    <script src="/Jmt/tpl/simplebootx/Public/js/hm.js"></script>
    <script src="/Jmt/tpl/simplebootx/Public/js/jquery-1.7.1.min.js"></script>
</head>

<body>
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	　<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <link rel="stylesheet" href="css/xnav.css"> -->
</head>
<body>

	<div class="Jnav">
		<div class="nav_logo">
			<div class="range">
				<div class="logo_box clearfix">
					<div class="logo_img"><a href="#"><img src="/Jmt/tpl/simplebootx//Public/images/Jlogo.jpg" alt="" width="70%;"></a></div>
					<div class="toolbox">
						<div class="search_box">
						<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
							<input type="text" name="keyword" id="search_key"  value="<?php echo I('get.keyword');?>" onfocus="javascript:if(this.value=='请输入内容')this.value='';" placeholder="Search" style="padding:8px 10px">
							<input type="submit" value="搜索" class="search_button" style="margin-left: 0px;">
						</form>
					</div>
					<?php $login_status =sp_is_user_login() ?>
				<!--  -->
					<?php if($login_status == true): ?><div class="user_logined userinfobox">
							<img src="<?php $userData = sp_get_current_user(); echo sp_get_user_avatar_url($userData['avatar']); ?>" width="30px" height="30px" alt="">
							<span class="user_nicename name_box user_login" id="nicename"><?php $userData = sp_get_current_user(); echo $userData['user_nicename']; ?></span>
							<ul class="user_action">
								<li><a href="<?php echo u('user/center/index');?>">个人中心</a></li>
								<li><a href="<?php echo u('user/index/logout');?>">退出</a></li>
							</ul>
						</div><?php endif; ?>

					<?php if($login_status == false): ?><div class="user_unlogined userinfobox">
							<img src="/Jmt/tpl/simplebootx//Public/images/headicon.png" width="30px" height="30px" alt="">
							<span class="user_login name_box">登录</span>
							<ul class="user_action">
								<li><a href="<?php echo u('user/login/index');?>">登录</a></li>
								<li><a href="<?php echo u('user/register/index');?>">注册</a></li>
							</ul>
					</div><?php endif; ?>
					<script>
						$(function(){
							$('.userinfobox').mouseenter(function(){
								$(".user_action").slideDown();
							}).mouseleave(function(){
									$('.user_action').slideUp();
								});
						});
					</script>
					</div>
				</div>
			</div>
		</div>
		<div class="nav_box">
			<div class="range">
				<ul>
					<!-- <li><a href="">首页</a></li>
					<li><a href="">扶贫路线</a></li>
					<li><a href="">精品路线</a></li>
					<li><a href="">乡村美图</a></li>
					<li><a href="">活动直播</a></li>
					<li><a href="">旅游日记</a></li>
					<li><a href="">新闻资讯</a></li> -->
					<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
			
				</ul>
			</div>
		</div>
	</div>
	<script>
	/*	$(){}*/


	</script>
</body>
</html>
    <div id="container">
        <div id="container1">

            <div class="divisiondivc">
                <div style="font-size:28px;color:#333333; font-weight:bold; width:1000px !important; float:left;">风景介绍</div>
                <div style="margin-top:16px; color:#666666; font-size:16px; width:1000px !important; float:left;">带你发现、体验不一样的乡村！</div>
                <div style="clear:both;"></div>
            </div>

            <div class="strategylist" id="Result">
                <?php if(is_array($ImageData)): foreach($ImageData as $key=>$Io): ?><div class="margin_bottom_20" style="float:left; display:block; width:25%;">
                        <div class="list1">
                            <a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($Io['id']); ?>" target="_blank">
                                <img src="<?php echo ($Io['smeta']); ?>">
                                <div class="strategylistdetail"style="text-align:left"><?php echo ($Io['post_title']); ?></div>
                                <div class="strategylistinfo">
                                   <!--  <img src="/Jmt/tpl/simplebootx/Public/image/headicon.png"> -->
                                    作者：
                                    <span><?php echo ($Io['post_author']); ?></span>
                                    <span class="spanrt16"><?php echo ($Io['post_modified']); ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                     <!-- <div style="clear:both;"></div> --><?php endforeach; endif; ?>
    <div style="clear:both;"></div>
    </div>
    </div>

    <div style="clear:both; margin-bottom:24px;"></div>
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/Jmt/tpl/simplebootx//Public/css/nav.css">
</head>
<body>
	<footer>
		<div class="parting_line"></div>
		<div class="footer_box">
			<div class="range">
				<ul class="footer_contant clearfix">
					<li>
						<div class="erwei"><img src="/Jmt/tpl/simplebootx//Public/images/erwei.jpg" width="100" height="100" alt="">
						</div>
						<ul>
							<li>本站微信</li>
							<li>微信二维码扫描</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>友情链接</li>
							<li><a href="">江门旅游局</a></li>
							<li><a href="">腾讯大粤网</a></li>
							<li><a href="">今日头条</a></li>
						</ul>
						<ul>
							<li>关于我们</li>
							<li><a href="">了解我们</a></li>
							<li><a href="">联系我们</a></li>
						</ul>
					</li>
					<li>
						<ul>
							<li>联系方式</li>
							<li class="phone_number">18814182521</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>
</body>

</html>