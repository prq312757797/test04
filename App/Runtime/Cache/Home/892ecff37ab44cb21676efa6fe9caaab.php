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

<<!-- banner -->
	<div class="swiper-container banner">
	    <div class="swiper-wrapper">
	       <!--  <div class="swiper-slide"><img src="/jtct02/Public/img/banner5.png"></div> -->
	        <div class="swiper-slide"><img src="/jtct02/Public/img/banner-6.jpg"></div>
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
<!-- 吉泰 -->
	<div class="box-center center jitai fade-in">
		<div class="jitai-tu">
			<img src="/jtct02/Public/img/jitai.jpg">
		</div>
		<div class="jianjie text-center">
			<h3>深恒利信息技术有限公司</h3>
			<p>深圳市深恒利信息技术有限公司是以小程序开发为核心，
兼具官网、微商城、APP专业开发的移动营销方案解决商，实现了从研发、制作、设计、完善、上线及运营为一体的一站式服务。
深恒利秉承和延续了公司十年的互联网从业经验和专业精神，不断开拓进取。
基于深厚的终端解决方案基础，成立了“微开天下”小程序推广招商品牌，并建立了更深远的合作。微开天下品牌依托于“互联网生态圈营销中心”、“互联网生态圈服务中心”，
建立战略合作的单位有：腾讯众创空间、深圳黔坤实业、橙色中国品牌、深圳特交所、共享资源会等。</p>
		</div>
	</div>
	<p class="jies center box-center">“深圳市吉泰创投有限公司是以小程序、微信公众号、公司”，其有一个具备
			背景及丰富工作经验的专业团队。我们整合商业思考、美学价值及技术实现用
			设计驱动创新、技术驱动品质、客户共同实现商业价值。在数字技术不断重塑
			业务边界及企业运营环境的今天，吉泰立足商业与技术的前沿，助力客户成为
			“移动互联网+”时代的行业领跑者。
	</p>
	<div class="gaoxin">
		<h3>高薪诚聘—</h3>
		<span>我们需要这样的您加入我们</span>
	</div>
<!-- 高薪诚聘 -->
	<div class="rencai">
		<div class="center">
			<h4 class="fade-in">高级Java工程师</h4>
			<ul class="fade-in">
				<li>1.有较好的理论知识基础，具有4年以上实际项目开发经验</li>
				<li>2.熟悉springMVC等主流开源框架并且能够对不同框架进行整合</li>
				<li>3.熟练应用html,css等技术开发Web界面</li>
				<li>4.熟悉Javascript，有jquery等js框架使用经验更佳</li>
				<li>5.具备MySQL开发经验技术</li>
				<li>6.有较强的系统与模块设计能力，能够独立完成系统（模块）设计分析工作</li>
				<li>7.有大型的分布式系统，商用的高负载系统开发经验优先</li>
			</ul>
			<h4>高级前端开发工程师</h4>
			<ul class="fade-in">
				<li>1.三年以上的Web应用开发经验，具备程序设计能力</li>
				<li>2.熟悉HTML5标准，精通Javascript前端开发，能快速高效实现各种交互效果；代码合理、清晰、规范</li>
				<li>3.精通XHTML/XML/CSS、JavaScript、AJAX等，精通W3C标准，熟悉对象化Javascript编程</li>
				<li>4.熟悉Javascript，有jquery等js框架使用经验更佳</li>
				<li>5.熟悉掌握AngularJs或NodeJs，并有实际开发经验的优先</li>
			</ul>
			<h4>设计师</h4>
			<ul class="fade-in">
				<li>1.2-3年以上的网站界面设计行业相关工作经验，设计、美术或相关专业，大专或以上学历，有较厚美术功底，追求精致。</li>
				<li>2.精通photoshop，coreldraw或Adobe Illustrator等基本的网页设计软件，对视觉效果有深厚认识。</li>
				<li>3.工作态度好，效率高，工作不讨价还价，能虚心听取领导或同事关于界面的改动建议并能主动提出自己的***方案。</li>
				<li>4.精通dreamweaver、html、CSS、flash，能够对设计图进行切片，制作网页者优先。</li>
			</ul class="fade-in">
		</div>
	</div>
<!-- 地图 -->
	<div class="box-center center fade-in ditu-u" style="width:84%;">
		<div id="container1" class="kuang"></div>
		<div class="des">
			<h3>联系我们</h3>
			<p>深圳市吉泰创投有限公司</p>
			<ul>
				<li>联系电话：0755-66607572</li>
				<li>公司官网：http://jt.sz800800.cn/</li>
				<li>公司地址：深圳市龙华新区忠信路9号汇亿财富中心1104</li>
			</ul>
		</div>
	</div>
<!--底部开始-->
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
<script>
	new BaiduMap({
		id: "container1",
		title: {
			text: "汇亿财富中心",
			className: "title"
		},
		content: {
			className: "content",
			text: ["地址：深圳市龙华新区忠信路9号汇亿财富中心1104", "电话：0755-66607572"]
		},
		point: {
			lng: 114.000200,
			lat: 22.659410,
		}
	});
</script>
</body>
</html>