const mySwiper = new Swiper('.swiper', {
	// Optional parameters
	loop: true,
	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true, //クリックに反応させる
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
	breakpoints: {
		768: {
			loop: true,
			speed: 1000,
			slidesPerView: 3,
			centeredSlides: true,
			spaceBetween: 20,
			initialSlide: 1,
			autoplay: {
				delay: 3000,
			},

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
				clickable: true, //クリックに反応させる
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.swiper-scrollbar',
			},
		},
	}
});