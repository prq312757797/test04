function swiper(){
	var mySwiper = new Swiper ('.banner', {
		// direction: 'vertical',
		// effect : 'coverflow',
		loop: true,
		autoplay : 3000,
		speed:1000,
		autoplayDisableOnInteraction : false,
		pagination : '.swiper-pagination',
		prevButton:'.swiper-button-prev',
		nextButton:'.swiper-button-next',
		preventClicks : false,//默认true

	})
	var mySwiper = new Swiper('.anliee',{
		slidesPerView : 4,
		slidesPerGroup : 3,
		loop: true,
		autoplay : 8000,
		speed:5000,
		autoplayDisableOnInteraction : false,
		prevButton:'.swiper-button-prev',
		nextButton:'.swiper-button-next',
	})
}