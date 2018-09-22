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
	<script src="/jtct02/Public/jjs/public.js"></script>
		<script src="http://api.map.baidu.com/api?v=2.0&ak=A1LU7iHS0avqQwPLAxbhKn0UYSQCuRVH"></script>
		<script src="/jtct02/Public/js/jquery.baiduMap.min.js"></script>

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
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner5.png"></div>
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner-2.jpg"></div>
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
<!-- 我们的优势 -->
	<div class="text-center Advantage public">
		<h2 class="fade-in">我们的优势</h2>
		<hr>
		<p>优质的产品,优质的客服团队,优质的开发团队,只为服务好每一位客户</p>
		<div class="Advantage-tu">
			<ul class="box-center center fade-in youshi-w">
				<li>
					<i><img src="/jtct02/Public/img/pinpai1.png"></i>
					<p>品牌优势</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai2.png"></i>
					<p>客服团队</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai3.png"></i>
					<p>品牌策划</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai4.png"></i>
					<p>一站式服务</p>
				</li>
			</ul>
			<ul class="box-center center fade-in youshi-w">
				<li>
					<i><img src="/jtct02/Public/img/pinpai5.png"></i>
					<p>精品模板任选</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai6.png"></i>
					<p>原生组件架构</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai7.png"></i>
					<p>技术开发团队</p>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai8.png"></i>
					<p>紧随市场所需</p>
				</li>
			</ul>
		</div>
	</div>
<!-- 全方面的技术支持 -->
	<div class="text-center public jisu">
		<h2 class="fade-in">全方面技术支持</h2>
		<hr>
		<p>专业的系统培训课程、专业的客服指导，专业的研发团队、为您解决一切不可能</p>
		<div class="Advantage-tu">
			<ul class="center box-center fade-in" style="width: 70%;">
				<li>
					<i><img src="/jtct02/Public/img/pinpai1.png"></i>
					<p>系统培训</p>
					<span>专业的技术后台，客服人员通过技术培训使合作商掌握整个系统的操作流程</span>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai2.png"></i>
					<p>服务支持</p>
					<span>在这里，我们提供专业的客服团队为您提供1对1在线服务，为您解决疑难</span>
				</li>
				<li>
					<i><img src="/jtct02/Public/img/pinpai3.png"></i>
					<p>研发支持</p>
					<span>合作伙伴在日常运营中如果出现技术问题，总部安排专业的技术人员解决。</span>
				</li>
			</ul>
		</div>
	</div>
<!-- 运营保障 -->
	<yunyin-baozhang class="yunyin"></yunyin-baozhang>
<!-- 合作流程 -->
	<div class="wxchenxun text-center funfact">
		<h2 class="fade-in">合 作 流 程</h2>
		<hr>
		<p style="margin-bottom:20px;">优质的产品，优质的客户团队，优质的开发团队，只为服务好每一位客户</p>
		<div>
			<ul class="box-center center hezuo fade-in">
				<li>
					<!-- <span>联系我们</span> -->
					<i><img src="/jtct02/Public/img/hezuo1.png"></i>
				</li>
				<li>
					<!-- <span>立即签约</span> -->
					<i><img src="/jtct02/Public/img/hezuo2.jpg"></i>
				</li>
				<li>
					<!-- <span>参加培训</span> -->
					<i><img src="/jtct02/Public/img/hezuo33.png"></i>
				</li>
				<li>
					<!-- <span>合作代理</span> -->
					<i><img src="/jtct02/Public/img/hezuo44.png"></i>
				</li>
			</ul>
		</div>
	</div>
<!--底部-->
<!-- 底部 -->
	<footer class="dibu-tu">
					<div class="dibu container">
						<div class="center box-center">
							<div class="erweima">
								<h3>深圳市吉泰创投信息技术有限公司</h3>
								<div class="box-center erweima2">
									<i><img src="Public/img/erweima.png"></i>
									<ul>
										<li><a href="index.html">首页</a></li>
										<li><a href="applet.html">小程序</a></li>
										<li><a href="case.html">案列展示</a></li>
										<li><a href="Merchants.html">招商加盟</a></li>
										<li><a href="about.html">关于我们</a></li>
										<li><a href="https://sz800800.cn/index.php/Login/index.html">服务商登录</a></li>
										<li ><a href="https://sz800800.cn/adp.php/Login/index.html" class="bb">用户登录</a></li>
									</ul>
									<div class="guanyu">
										<h3>联系我们</h3>
										<p>公司电话：0755-66607572</p>
										<p>公司邮件：1508282620@qq.com</p>
										<p>公司地址：深圳市龙华新区忠信路9号汇亿财富中心1104</p>
									</div>
								</div>
							</div>
						</div>
						<strong style="position: relative;z-index: 4;">备案号:粤ICP备17113431号-1   版权所有：@互联网生态圈营销中心</strong>
					</div>
	</footer>
	<script type="text/javascript">
		window.onload=function(){ 
			var widtch = $(".sekuai").css("width")
			var height = $(".sekuai").css("height")
			$(".hover1").width(widtch).height(height)
			console.log(widtch)
			swiper();
			
			icon();
			bottom();
			daohan();
			jianxian();
			var oDiv = document.getElementById('aa');
			var aLi = oDiv.getElementsByTagName('li');
			aLi[2].style.backgroundColor="#000";			
		}

	</script>
</body>

</html>
</body>
</html>