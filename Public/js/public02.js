
function jianxian(){
	    function ScollPostion() {
	        var t, l, w, h;
	        if (document.documentElement && document.documentElement.scrollTop) {
	            t = document.documentElement.scrollTop;
	            l = document.documentElement.scrollLeft;
	            w = document.documentElement.scrollWidth;
	            h = document.documentElement.scrollHeight;
	        } else if (document.body) {
	            t = document.body.scrollTop;
	            l = document.body.scrollLeft;
	            w = document.body.scrollWidth;
	            h = document.body.scrollHeight;
	        }
	        return { top: t, left: l, width: w, height: h };
	    }
	    var arr = ScollPostion();
		// var arr = ScollPostion();
		// var t = arr['top'];
		// var l = arr['left'];
		// var w = arr['width'];
		// var h = arr['height'];
		// console.log(t,l,w,h);
		var aWrap = document.getElementsByClassName('fade-in');
			var aP= arr.top;
			var oaa= arr.top+document.documentElement.clientHeight;
				for (var i = 0; i < aWrap.length; i++) {
					if(aWrap[i].offsetTop<=oaa){
						aWrap[i].style.opacity='1';	
						aWrap[i].style.marginTop=0+'px';
					}
				}
		window.onscroll =function(){
			var arr = ScollPostion();
			var aP= arr.top;
			var oaa= arr.top+document.documentElement.clientHeight;
			console.log(arr.top);				for (var i = 0; i < aWrap.length; i++) {
					if(aWrap[i].offsetTop<=oaa){
						aWrap[i].style.opacity='1';
						aWrap[i].style.marginTop=0+'px';
				}
			}
		}

	
}
