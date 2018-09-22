<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<title>互联网生态圈营销中心</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Public/swiper/swiper-3.4.2.min (2).css">

	<link rel="stylesheet" type="text/css" href="/Public/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/publicc.css">
	
		<link rel="stylesheet" type="text/css" href="/Public/css/index.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/applet.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/anlie.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/Merchants.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/about.css">
		
	<script src="/Public/swiper/jquery-1.10.1.min.js"></script>
	<script src="/Public/js/bootstrap.js"></script>
	<script src="/Public/swiper/swiper-3.4.2.jquery.min (1).js"></script>
	<script src="/Public/js/swiper.js"></script>
	<script src="/Public/js/vue.js"></script>
	<script src="/Public/js/vuezu.js"></script>
	<script src="/Public/js/public02.js"></script>
	<script src="/Public/js/about.js"></script>
	<script src="/Public/jjs/public.js"></script>
		<script src="http://api.map.baidu.com/api?v=2.0&ak=A1LU7iHS0avqQwPLAxbhKn0UYSQCuRVH"></script>
		<script src="/Public/js/jquery.baiduMap.min.js"></script>

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
							<img src="/Public/img/logo.png" style="width: 50px; height:50px; float: left;">
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
	        <div class="swiper-slide"><img src="/Public/img/banner-1.jpg"></div>
	        <div class="swiper-slide"><img src="/Public/img/banner-10.jpg"></div>
	        <div class="swiper-slide"><img src="/Public/img/banner-2.jpg"></div>
	        <div class="swiper-slide"><img src="/Public/img/banner-6.jpg"></div>
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
										<a href="<?php echo U('Program/index');?>">
											<i><img src="/Public/img/xiaochengxu1.png"></i>
											<h3>小程序</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="<?php echo U('Case/index');?>">
											<i><img src="/Public/img/xiaochengxu2.png"></i>
											<h3>案列展示</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="<?php echo U('Merchants/index');?>">
											<i><img src="/Public/img/xiaochengxu3.png"></i>
											<h3>招商加盟</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="<?php echo U('Contact/index');?>">
											<i><img src="/Public/img/xiaochengxu4.png"></i>
											<h3>关于我们</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/adp.php/Login/index.html">
											<i><img src="/Public/img/xiaochengxu5.png"></i>
											<h3>用户登陆</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/index.php/Login/index.html">
											<i><img src="/Public/img/xiaochengxu6.png"></i>
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
	
<!-- 为什么要做微信小程序 -->
	<div class="wxchenxun text-center funfact fade-in">
		<h2>为什么要做微信小程序</h2>
		<hr>
		<p>微信小程序式腾讯推出战略级企业生态底层框架，每次新型企业生态底层框架的推出都将引起用户使用场景的变化，用户场景的变化必将引起互联<br>
			网行业重新洗牌，微信小程序将充分利用微信9个多亿的用户群体，为企业带来新型营销方式和巨大流量红利</p>
		<div class="funfact">
			<ul class="box-center center">
				<li>
					<div style="border:13px solid #5fa0fe; color:#5fa0fe;">8.89</div>
					<strong>8.89亿月活用户</strong>
					<p>超大的流量入口，有了小程<br>序用户找到你！</p>
				</li>
				<li>
					<div style="border:13px solid #32c5d2; color:#32c5d2;">5000</div>
					<strong>5000万个商家企业</strong>
					<p>每一个企业或商家都有小程序的需求</p>
				</li>
				<li>
					<div style="border:13px solid #3498db; color:#3498db;">4</div>
					<strong>8.89亿月活用户</strong>
					<p>支付用户可以通过小程序完成购买支付流程。</p>
				</li>
			</ul>
		</div>
	</div>
	</div>
<!-- 案列 -->
	<div>
		<div class="row fade-in">
			<div class="col-md-12 ">
				<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wxchenxun text-center funfact fade-in">
						<h2>案 列 展 示</h2>
						<hr>
						<div class="anlie">
							<div class="swiper-container swiper-container-horizontal anliee" id="swiper-container1" style="width: 1290px;">
								<div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-800px, 0px, 0px);">
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima01.png">
										</p>
										<img src="/Public/img/anlie01.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima2.jpg">
										</p>
										<img src="/Public/img/anlie2.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima3.jpg">
										</p>
										<img src="/Public/img/anlie3.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima4.jpg">
										</p>
										<img src="/Public/img/anlie4.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima5.jpg">
										</p>
										<img src="/Public/img/anlie5.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima6.jpg">
										</p>
										<img src="/Public/img/anlie6.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima7.jpg">
										</p>
										<img src="/Public/img/anlie7.jpg">
									</div>
									<div class="swiper-slide blue-slide">
										<p class="anlie-hover">
											<img src="/Public/img/erweima8.jpg">
										</p>
										<img src="/Public/img/anlie8.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	        </div>
	    </div>
	</div>
<!-- 开发流程 -->
	<!--<development-process class="Development"></development-process>-->
		<div class="container fade-in">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<h2>开 发 流 程</h2>
								<hr>
								<div class="liucheng">
									<ul class="box-center center">
										<li>
											<i style="background-color: #fbc517;"><img src="/Public/img/liuchen-2.png"></i>
											<h4>小程序</h4>
											<span>快速加入我们</span>
										</li>
										<li>
											<i class="tuk"><img src="/Public/img/jiantou.png" style="width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #28be61;"><img src="/Public/img/liucheng-3.png"></i>
											<h4>招商加盟</h4>
											<span>快速加入我们</span>
										</li>
										<li>
											<i class="tuk"><img src="/Public/img/jiantou.png" style=" width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #f9464c;"><img src="/Public/img/liucheng-4.png"></i>
											<h4>联系我们</h4>
											<span>快速加入我们</span>
										</li>
									</ul>
									<ul class="box-center center">
										<li>
											<i style="background-color: #fa8a3f;"><img src="/Public/img/liucheng-5.png"></i>
											<h4>小程序</h4>
											<span>快速加入我们</span>
										</li>
										<li >
											<i class="tuk"><img src="/Public/img/jiantou.png" style="width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #fa8083;"><img src="/Public/img/liucheng-6.png"></i>
											<h4>招商加盟</h4>
											<span>快速加入我们</span>
										</li >
										<li>
											<i class="tuk"><img src="/Public/img/jiantou.png" style="height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #8c50cb;"><img src="/Public/img/liucheng-7.png"></i>
											<h4>联系我们</h4>
											<span>快速加入我们</span>
										</li>
									</ul>
								</div>
							</div> 
						</div>
			        </div>
			    </div>
			</div>
<!-- 小程序多流量入口 -->
<div class="ruKou yunyin">
	<!--<ru-kou class="ruKou block"></ru-kou>-->
	<div class="wxchenxun text-center fade-in">
				<h2>小程序多流量入口</h2>
				<hr>
				<p>众多的流量入口增加了客户与品牌的粘性</p>
				<div class="liucheng rukou">
					<ul class="box-center center" style="width: 1100px;">
						<li>
							<i><img src="/Public/img/4.png"></i>
							<p>二维码</p>
						</li>
						<li>
							<i><img src="/Public/img/5.png"></i>
							<p>附近的店</p>
						</li>
						<li>
							<i><img src="/Public/img/6.png"></i>
							<p>微信搜索</p>
						</li>
						<li>
							<i><img src="/Public/img/7.png"></i>
							<p>历史记录</p>
						</li>
						<li>
							<i><img src="/Public/img/8.png"></i>
							<p>好友推荐</p>
						</li>
					</ul>
					<ul class="box-center center" style="width: 1100px;">
						<li>
							<i><img src="/Public/img/9.png"></i>
							<p>置顶小程序</p>
						</li>
						<li>
							<i><img src="/Public/img/10.png"></i>
							<p>消息通知</p>
						</li>
						<li>
							<i><img src="/Public/img/11.png"></i>
							<p>应用推广</p>
						</li>
						<li>
							<i><img src="/Public/img/12.png"></i>
							<p>活跃用户</p>
						</li>
						<li>
							<i><img src="/Public/img/13.png"></i>
							<p>还有更多</p>
						</li>
					</ul>
				</div>
			</div>
	<!--<yunyin-baozhang class="yunyin nonee"></yunyin-baozhang>-->
<!-- 更多商机img -->
	<div class="wxchenxun fade-in" style="width: 100%;">
		<a href="#">
			<img src="/Public/img/gengduo.png" style="width: 100%;">
		</a>
	</div>
<!-- 运营保障 -->
	<!--<yunyin-baozhang class="yunyin block"></yunyin-baozhang>-->
	<ru-kou class="ruKou nonee"></ru-kou>
	<div class="container fade-in nonee">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="wxchenxun text-center funfact">
								<div class="wxchenxun text-center funfact">
									<h2>六大保障，让您轻松上手，无后顾之忧！</h2>
									<hr>
									<div class="baozhang">
										<ul class="box-center center" style="width: 90%;margin-bottom: 20px;">
											<li>
												<i><img src="/Public/img/14.png"></i>
												<strong>培训保障</strong>
												<p>产品培训，运营培训，销售培训，推广培训</p>
											</li>
											<li>
												<i><img src="/Public/img/15.png"></i>
												<strong>运营保障</strong>
												<p>运营指导，案列分享，行业方案提供</p>
											</li>
											<li>
												<i><img src="/Public/img/16.png"></i>
												<strong>产品保障</strong>
												<p>紧跟腾讯步伐，产品定期更新，不定期发布新品</p>
											</li>
										</ul>
										<ul class="box-center center" style="width: 90%;margin-bottom: 20px;">
											<li>
												<i><img src="/Public/img/17.png"></i>
												<strong>营销保障</strong>
												<p>网页源码，营销物料，推广计划，推广运营</p>
											</li>
											<li>
												<i><img src="/Public/img/18.png"></i>
												<strong>区域保障</strong>
												<p>客户保护，区域保护，切实保障代理商利益</p>
											</li>
											<li>
												<i><img src="/Public/img/19.png"></i>
												<strong>服务保障</strong>
												<p>售后培训，实施培训，使用培训技术指导</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
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
									<i><img src="/Public/img/erweima.png"></i>
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
			//aLi[2].style.backgroundColor="#000";			
		}

	</script>
</body>

</html>
	
</body>  
</html>`