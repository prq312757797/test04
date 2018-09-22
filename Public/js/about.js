function ditu(){
	$(function(){
			swiper();
		})
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
}