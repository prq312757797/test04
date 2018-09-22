<!-- 导航 -->
function daohan(){
	Vue.component("theArticle",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
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
							<img src="Public/img/logo.png" style="width: 50px; height:50px; float: left;">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="example-navbar-collapse">
						<ul class=" nav navbar-nav navbar-right daohan" id="aa">
							<li><a href="index.html">首页</a></li>
							<li><a href="applet.html">小程序</a></li>
							<li><a href="case.html">案列展示</a></li>
							<li><a href="Merchants.html">招商加盟</a></li>
							<li><a href="about.html">关于我们</a></li>
							<li><a href="https://sz800800.cn/index.php/Login/index.html">服务商登录</a></li>
							<li ><a href="https://sz800800.cn/adp.php/Login/index.html" class="bb">用户登录</a></li>
						</ul>
					</div>
				</div>
			</nav>
		`
	})
	new Vue({
		el:".daohan"
	});
			
}
<!-- 图标 -->
function icon(){
	Vue.component("icon",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
			<div class="container containerr">
				<div class="row">
					<div class="col-md-12 ">
						<div class="row tubiao fade-in">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<a href="applet.html">
											<i><img src="Public/img/xiaochengxu1.png"></i>
											<h3>小程序</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="case.html">
											<i><img src="Public/img/xiaochengxu2.png"></i>
											<h3>案列展示</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="Merchants.html">
											<i><img src="Public/img/xiaochengxu3.png"></i>
											<h3>招商加盟</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="about.html">
											<i><img src="Public/img/xiaochengxu4.png"></i>
											<h3>关于我们</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/adp.php/Login/index.html">
											<i><img src="Public/img/xiaochengxu5.png"></i>
											<h3>用户登陆</h3>
											<p>快速加入我们</p>
										</a>
									</li>
									<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<a href="https://sz800800.cn/index.php/Login/index.html">
											<i><img src="Public/img/xiaochengxu6.png"></i>
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
		`
	})
	new Vue({
		el:".tubiaoA"
	});
			
}
<!-- 开发流程 -->
function Development(){
	Vue.component("DevelopmentProcess",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
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
											<i style="background-color: #fbc517;"><img src="Public/img/liuchen-2.png"></i>
											<h4>小程序</h4>
											<span>快速加入我们</span>
										</li>
										<li>
											<i class="tuk"><img src="Public/img/jiantou.png" style="width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #28be61;"><img src="Public/img/liucheng-3.png"></i>
											<h4>招商加盟</h4>
											<span>快速加入我们</span>
										</li>
										<li>
											<i class="tuk"><img src="Public/img/jiantou.png" style=" width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #f9464c;"><img src="Public/img/liucheng-4.png"></i>
											<h4>联系我们</h4>
											<span>快速加入我们</span>
										</li>
									</ul>
									<ul class="box-center center">
										<li>
											<i style="background-color: #fa8a3f;"><img src="Public/img/liucheng-5.png"></i>
											<h4>小程序</h4>
											<span>快速加入我们</span>
										</li>
										<li >
											<i class="tuk"><img src="Public/img/jiantou.png" style="width: 100%;height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #fa8083;"><img src="Public/img/liucheng-6.png"></i>
											<h4>招商加盟</h4>
											<span>快速加入我们</span>
										</li >
										<li>
											<i class="tuk"><img src="Public/img/jiantou.png" style="height:56px;margin-top: 56px;"></i>
										</li>
										<li>
											<i style="background-color: #8c50cb;"><img src="Public/img/liucheng-7.png"></i>
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
		`
	})
	new Vue({
		el:".Development"
	});
			
}
<!-- 运营保障-->
function yunyinBaozhang(){
	Vue.component("yunyinBaozhang",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
			<div class="container fade-in">
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
												<i><img src="Public/img/14.png"></i>
												<strong>培训保障</strong>
												<p>产品培训，运营培训，销售培训，推广培训</p>
											</li>
											<li>
												<i><img src="Public/img/15.png"></i>
												<strong>运营保障</strong>
												<p>运营指导，案列分享，行业方案提供</p>
											</li>
											<li>
												<i><img src="Public/img/16.png"></i>
												<strong>产品保障</strong>
												<p>紧跟腾讯步伐，产品定期更新，不定期发布新品</p>
											</li>
										</ul>
										<ul class="box-center center" style="width: 90%;margin-bottom: 20px;">
											<li>
												<i><img src="Public/img/17.png"></i>
												<strong>营销保障</strong>
												<p>网页源码，营销物料，推广计划，推广运营</p>
											</li>
											<li>
												<i><img src="Public/img/18.png"></i>
												<strong>区域保障</strong>
												<p>客户保护，区域保护，切实保障代理商利益</p>
											</li>
											<li>
												<i><img src="Public/img/19.png"></i>
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
		`
	})
	new Vue({
		el:".yunyin"
	});
			
}
<!-- 小程序多流量入口 -->
function ruKou(){
	Vue.component("ruKou",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
			<div class="wxchenxun text-center fade-in">
				<h2>小程序多流量入口</h2>
				<hr>
				<p>众多的流量入口增加了客户与品牌的粘性</p>
				<div class="liucheng rukou">
					<ul class="box-center center" style="width: 1100px;">
						<li>
							<i><img src="Public/img/4.png"></i>
							<p>二维码</p>
						</li>
						<li>
							<i><img src="Public/img/5.png"></i>
							<p>附近的店</p>
						</li>
						<li>
							<i><img src="Public/img/6.png"></i>
							<p>微信搜索</p>
						</li>
						<li>
							<i><img src="Public/img/7.png"></i>
							<p>历史记录</p>
						</li>
						<li>
							<i><img src="Public/img/8.png"></i>
							<p>好友推荐</p>
						</li>
					</ul>
					<ul class="box-center center" style="width: 1100px;">
						<li>
							<i><img src="Public/img/9.png"></i>
							<p>置顶小程序</p>
						</li>
						<li>
							<i><img src="Public/img/10.png"></i>
							<p>消息通知</p>
						</li>
						<li>
							<i><img src="Public/img/11.png"></i>
							<p>应用推广</p>
						</li>
						<li>
							<i><img src="Public/img/12.png"></i>
							<p>活跃用户</p>
						</li>
						<li>
							<i><img src="Public/img/13.png"></i>
							<p>还有更多</p>
						</li>
					</ul>
				</div>
			</div>
		`
	})
	new Vue({
		el:".ruKou"
	});
			
}

<!-- 底部 -->
function bottom(){
	Vue.component("dibu",{
		data:function(){
			return{
				selectShow:false
			}
		},
		props:[],
		template:`
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
		`
	})
	new Vue({
		el:".dibuu"
	});
			
}











