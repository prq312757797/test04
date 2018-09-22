<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<title>互联网生态圈营销中心</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/jtct02/Public/swiper/swiper-3.4.2.min (2).css">

	<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/public.css">
	<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/publicc.css">
	
		<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/index.css">
		<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/applet.css">
		<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/anlie.css">
		<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/Merchants.css">
		<link rel="stylesheet" type="text/css" href="/jtct02/Public/css/about.css">
		
	<script src="/jtct02/Public/swiper/jquery-1.10.1.min.js"></script>
	<script src="/jtct02/Public/js/bootstrap.js"></script>
	<script src="/jtct02/Public/swiper/swiper-3.4.2.jquery.min (1).js"></script>
	<script src="/jtct02/Public/js/swiper.js"></script>
	<script src="/jtct02/Public/js/vue.js"></script>
	<script src="/jtct02/Public/js/vuezu.js"></script>
	<script src="/jtct02/Public/js/public02.js"></script>
	<script src="/jtct02/Public/js/about.js"></script>
</head>
<body>
<!-- 导航 -->
<!--	<the-article class="daohan" ></the-article>
-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container navigation_back" > 
					<div class="navbar-header bule">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#example-navbar-collapse ">
							<span class="sr-only">切换导航</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbara" href="#">互联网生态圈营销中心 
							<img src="/jtct02/Public/img/logo.png" style="width: 50px; height:50px; float: left;">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="example-navbar-collapse">
						<ul class=" nav navbar-nav navbar-right daohan" id="aa">
							<li><a href="<?php echo U('Index/index');?>">首页</a></li>
							<li><a href="<?php echo U('Program/index');?>">小程序</a></li>
							<li><a href="<?php echo U('Case/index');?>">案列展示</a></li>
							<li><a href="<?php echo U('Merchants/index');?>">招商加盟</a></li>
							<li><a href="<?php echo U('Contact/index');?>">关于我们</a></li>
							<li><a href="https://sz800800.cn/index.php/Login/index.html">服务商登录</a></li>
							<li ><a href="https://sz800800.cn/adp.php/Login/index.html" class="bb">用户登录</a></li>
						</ul>
					</div>
				</div>
			</nav>

<!-- banner -->
	<div class="swiper-container banner">
	    <div class="swiper-wrapper">
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner-9.jpg"></div>
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner-10.jpg"></div>
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner-12.jpg"></div>
	    </div>
	    <!-- 如果需要分页器 -->
	    <div class="swiper-pagination"></div>
	    
	    <!-- 如果需要导航按钮 -->
	    <div class="swiper-button-prev Button"></div>
	    <div class="swiper-button-next Button"></div>
	</div>
<!-- 图标 -->
		<!--<icon class="tubiaoA"></icon>-->
	<div class="container containerr">
				<div class="row">
					<div class="col-md-12 ">
						<div class="row tubiao fade-in">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<a href="applet.html">
											<i><img src="/jtct02//jtct02/Public/img/xiaochengxu1.png"></i>
											<h3>小程序</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="case.html">
											<i><img src="/jtct02/Public/img/xiaochengxu2.png"></i>
											<h3>案列展示</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="Merchants.html">
											<i><img src="/jtct02/Public/img/xiaochengxu3.png"></i>
											<h3>招商加盟</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="about.html">
											<i><img src="/jtct02/Public/img/xiaochengxu4.png"></i>
											<h3>关于我们</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/adp.php/Login/index.html">
											<i><img src="/jtct02/Public/img/xiaochengxu5.png"></i>
											<h3>用户登陆</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/index.php/Login/index.html">
											<i><img src="/jtct02/Public/img/xiaochengxu6.png"></i>
											<h3>商家登陆</h3>
											<p>快速加入我们</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- 案列 -->
	<div class="text-center an-lie">
		<h2>小程序多流量入口</h2>
		<hr style="width: 100px">
		<div>
			<ul class="box-center anlie1 center fade-in">
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima01.png">
					</div>
				<img src="/jtct02/Public/img/anlie01.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima2.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie2.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima3.jpg">
					</div>
				<img src="/jtct02/Public/img/anlie3.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima4.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie4.jpg"> 
				</li>
			</ul>
			<ul class="box-center anlie1 center fade-in">
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima5.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie5.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima6.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie6.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima7.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie7.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima8.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie8.jpg"> 
				</li>
			</ul>
			<ul class="box-center anlie1 center fade-in">
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima9.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie9.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima10.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie10.jpg"> 
				</li>
				<li>
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima11.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie11.jpg"> 
				</li>
				<li class="sekuai">
					<div class="hover1">
						<img src="/jtct02/Public/img/erweima12.jpg">
					</div>
					<img src="/jtct02/Public/img/anlie12.jpg"> 
				</li>
			</ul>
		</div>
	</div>
<script type="text/javascript">
		window.onload=function(){ 
			var widtch = $(".sekuai").css("width")
			var height = $(".sekuai").css("height")
			$(".hover1").width(widtch).height(height)
		//	console.log(widtch)
		//	swiper();
		//icon();
		//	bottom();
		//	daohan();
			jianxian();
			var oDiv = document.getElementById('aa');
			var aLi = oDiv.getElementsByTagName('li');
			aLi[2].style.backgroundColor="#000";			
		}

	</script>
</body>
</html>