<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/Jmt/tpl/simplebootx/Public/css/Jstyle.css">
	<link rel="stylesheet" href="/Jmt/tpl/simplebootx/Public/css/nav.css">
	<script src="/Jmt/statics/js/jquery.js"></script>
	<script>
	/*控制播放条的下标数*/
	var sci= 0;
	$(function(){
		$('.scroll_content_ul>li:eq('+sci+')').animate({
			opacity:'1',
			display:'list-item'
		},1500,function(){
			$('.scroll_content_ul>li:eq('+sci+')').show(200);
			sci++;

			console.log(sci);
			if(sci>=$('.scroll_content_ul>li').length){
				sci=0;
			}

		});
	});
	</script>
	<style>
		.hidden{
			display: none;
		}
	</style>
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
<div class="tab_content">
	<img src="/Jmt/tpl/simplebootx/Public/images/jiangmen.jpg" width="100%" alt="">
	<div class="menu_list">
		<ul>
			<li>
				<img src="/Jmt/tpl/simplebootx/Public/images/ico1.png" alt="">
				<div>
					<p>下乡客</p>
					<span>江门乡村旅游推广平台</span>
				</div>
			</li>
			<li>
				<img src="/Jmt/tpl/simplebootx/Public/images/ico2.png" alt="">
				<div>
					<p>目的地</p>
					<span>一见倾心最美之地</span>
				</div>
			</li>
			<li>
				<img src="/Jmt/tpl/simplebootx/Public/images/ico3.png" alt="">
				<div>
					<p>游记</p>
					<span>旅游点滴为你而美</span>
				</div>
			</li>
			<li>
				<img src="/Jmt/tpl/simplebootx/Public/images/ico4.png" alt="">
				<div>
					<p>专题</p>
					<span>炫酷活动因你而嗨</span>
				</div>
			</li>
			<li>
				<img src="/Jmt/tpl/simplebootx/Public/images/ico5.png" alt="">
				<div>
					<p>活动报名</p>
					<span>赶紧行动吧</span>
				</div>
			</li>
		</ul>
	</div>
</div>
<section>
	<div class="scroll_new range clearfix">
		<div class="scroll_tite">最新资讯</div>
		<div class="scroll_content">
			<ul class="scroll_content_ul">
				<?php if(is_array($travelNoteData)): foreach($travelNoteData as $key=>$to): ?><li>
						<div class="new_box">
							<p class="new_title"><?php echo ($to['post_title']); ?>
							<a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($to['id']); ?>">[详细查看]</a><span>2017-02-10</span></p>
							<div class="new_content"><?php echo ($to['post_excerpt']); ?></div>
						</div>
					</li><?php endforeach; endif; ?>
				
			</ul>
		</div>
	</div>
</section>
<!-- 
新闻展示栏 -->
<div class="new_column range clearfix">
	<div class="autoplay_box">
		<p>图片新闻<a>更多>></a></p>
		<div class="autoplay_box_content"></div>
	</div>
	<div class="displaynew">
		<p>热门游记<a  href="<?php echo U('Content/Travelnote/index');?>" >更多>></a></p>
		<div class="displaynew_box">
			<ul>
				<?php if(is_array($travelNoteData)): foreach($travelNoteData as $key=>$to): ?><li class="clearfix">
					<div class="createtime"><span>2017-3</span>2</div>
					<a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($to['id']); ?>" ><?php echo ($to['post_title']); ?></a>
					<p><?php echo ($to['post_excerpt']); ?></p>
				</li><?php endforeach; endif; ?>
			</ul>	
		</div>
	</div>
</div>
<!-- 热门游记 -->
<div class="travel_report range clearfix">
	<div class="tags_report">
		<p>最新游记<a  href="<?php echo U('Content/Travelnote/index');?>">更多>></a></p>
		<div class="tags_box">
			<ul>
				<?php if(is_array($NewTravelNoteData)): foreach($NewTravelNoteData as $key=>$no): ?><li class="tags_content">
						<p><?php echo ($no['post_title']); ?><span><?php echo ($no['post_modified']); ?></span></p>
						<a  href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($no['id']); ?>"><?php echo ($no['post_excerpt']); ?>}</a>
					</li><?php endforeach; endif; ?>
				
			</ul>
		</div>
	</div>
	<div class="moudle_report">
		<div class="clearfix">
			<div class="moudle_title blue">
				<p>当地美食<span>LVYOU FOOD</span></p>
				<a  href="<?php echo U('Content/Food/index');?>">更多>></a>
			</div>
			<ul class="moudle_box cleafix">
				<?php if(is_array($foodData)): foreach($foodData as $key=>$fo): ?><li><a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($fo['id']); ?>"><?php echo ($fo['post_title']); ?></a></li><?php endforeach; endif; ?>	
			</ul>
		</div>
		<div>
			<div class="moudle_title">
				<p>推荐目的地<span>TUIJIAN MUDIDI</span></p>
				<a  href="<?php echo U('Content/Image/index');?>">更多>></a>
			</div>
			<ul class="moudle_box cleafix">

				<?php if(is_array($ImageData)): foreach($ImageData as $key=>$Io): ?><li><a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($Io['id']); ?>"><?php echo ($Io['post_title']); ?></a></li><?php endforeach; endif; ?>
				
			</ul>
		</div>
	</div>
</div>

<!-- 景区介绍 -->
<div class="scenic_introduction range clearfix">
	<p>当地美景<a  href="<?php echo U('Content/ViewIntr/index');?>">更多>></a></p>
	<div class="scenic_box">
		<ul>
		<?php if(is_array($viewIntroData)): foreach($viewIntroData as $key=>$vo): ?><li class="secnic_box">
				<div class="secnic_image_box">
					<img src="<?php echo ($vo['smeta']); ?>" alt="">
				</div>
				<p class="scenic_box_title"><?php echo ($vo['post_title']); ?></p>
				<p ><a href="<?php echo U('Portal/Article/index');?>&id=<?php echo ($vo['id']); ?>"><?php echo ($vo['post_excerpt']); ?></a></p>
			</li><?php endforeach; endif; ?>
			
		</ul>
	</div>
</div>
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