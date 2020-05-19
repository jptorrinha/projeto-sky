$(function(){
	app.init();
});

var app = {
	init: function(){
		this.highlights();
		this.portrait();
	},

	highlights: function(){
		var htmlHighlights = "";
		$.ajax({
			url: 'https://sky-frontend.herokuapp.com/movies',
			type: 'GET',
			dataType: 'json',
			success: function(xhr){
				var high = xhr[0].items;

				for (var i = 0; i < high.length; i++) {
					var titulo = high[i].title;
					var cover = high[i].images[0].url;

					htmlHighlights += '<div class="swiper-slide">';
          htmlHighlights += '  <div class="img-slide">';
          htmlHighlights += '    <a href="#">';
          htmlHighlights += '      <img src="'+cover+'" alt="'+titulo+'">';
          htmlHighlights += '    </a>';
          htmlHighlights += '  </div>';
          htmlHighlights += '</div>';
				}

				$("#highlight").html(htmlHighlights)
			}
		})
		.always(function() {
			var swiperHighlight = new Swiper('.highlight', {
	      slidesPerView: 1,
	      spaceBetween: 30,
	      centeredSlides: true,
	      slidesPerGroup: 1,
	      loop: true,
	      loopedSlides: 15,
	      loopFillGroupWithBlank: true,
	      pagination: {
	        el: '.swiper-pagination',
	        type: 'bullets',
	        clickable: false,
	      },
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
		});
	},

	portrait: function(){
		var htmlPortrait = "";
		$.ajax({
			url: 'https://sky-frontend.herokuapp.com/movies',
			type: 'GET',
			dataType: 'json',
			success: function(xhr){
				var port = xhr[2];
				var movies = port.movies;

				$("#title-portrait").html(port.title);

				for (var j = 0; j < movies.length; j++) {
					var titulo = movies[j].title;
					var cover = movies[j].images[0].url;

					htmlPortrait += '<div class="swiper-slide">';
					htmlPortrait += '  <div class="caption">';
					htmlPortrait += '    <svg viewBox="10 10 232 348">';
					htmlPortrait += '      <rect x="10" y="10" rx="10" ry="10" width="100%" height="100%" class="bgLazyLoad" stroke="none"></rect>';
					htmlPortrait += '    </svg>';
					htmlPortrait += '    <svg class="icon-elegibility" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><circle cx="12" cy="12" r="10" fill="#000" fill-opacity=".6"></circle><path fill="#FFF" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path><path fill="#FFF" fill-rule="nonzero" d="M12 5.167c1.678 0 2.917 1.22 2.917 2.916v1.75h.583c.671 0 1.167.489 1.167 1.167v4.667c0 .678-.496 1.166-1.167 1.166H8.549c-.672 0-1.216-.55-1.216-1.228V11c0-.678.496-1.167 1.167-1.167h.583v-1.75c0-1.695 1.24-2.916 2.917-2.916zm.583 7h-1.166V14.5h1.166v-2.333zM12 6.333c-1.007 0-1.75.733-1.75 1.75v1.75h3.5v-1.75c0-1.017-.743-1.75-1.75-1.75z"></path></g></svg>';
					htmlPortrait += '   <a href="#" class="link-portrait">';
					htmlPortrait += '      <div class="img-portrait">';
					htmlPortrait += '        <img src="'+cover+'" alt="'+titulo+'">';
					htmlPortrait += '      </div>';
					htmlPortrait += '    </a>';
					htmlPortrait += '  </div>';
					htmlPortrait += '</div>';
				}

				$("#portrait").html(htmlPortrait)
			}
		})
		.always(function() {
			var swiperPortrait = new Swiper('.portrait', {
	      loop: false,
	      navigation: {
	        nextEl: '.swiper-button-next-portrait',
	        prevEl: '.swiper-button-prev-portrait',
	      },
	      breakpoints: {
	      	375: {
	          slidesPerView: 3,
	          spaceBetween: 10,
	          slidesPerGroup: 2,
	        },
	      	480: {
	          slidesPerView: 3,
	          spaceBetween: 10,
	          slidesPerGroup: 2,
	        },
	        640: {
	          slidesPerView: 5,
	          spaceBetween: 10,
	          slidesPerGroup: 2,
	        },
	        768: {
	          slidesPerView: 5,
	          spaceBetween: 10,
	          slidesPerGroup: 3,
	        },
	        1024: {
	          slidesPerView: 7,
	          spaceBetween: 10,
	          slidesPerGroup: 5,
	        }
	      }
	    });
		});
	}
}