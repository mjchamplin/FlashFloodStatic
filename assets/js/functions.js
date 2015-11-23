var nav = responsiveNav(".nav-collapse",{ label:"<i class='fa fa-bars'></i>"});

$( document ).ready(function() {		
	console.log( "document loaded" );
	$(function() {
		$.ajax({
			type: 'GET',
			dataType: 'jsonp',
			cache: false,
			//url: 'https://api.instagram.com/v1/tags/nyc/media/recent?client_id=ea126bd8795744b2a86ec4e775f6454c',
			url: 'https://api.instagram.com/v1/users/332005021/media/recent/?client_id=baa34547ccfd4773b94e38535d62699d',
			//url: 'https://api.instagram.com/v1/users/6897839/media/recent/?client_id=baa34547ccfd4773b94e38535d62699d',			
			success: function(data) {
				for(var i = 0; i < 4; i++) {
					$('#ig-container').append('<div class="ig-pic" style=" background-image: url(' + data.data[i].images.standard_resolution.url +');"></div>');
				}
			}
		});
	});
});

$(window).load(function() {

	var container = document.querySelector('.portfolio-holder');
	var msnry = new Masonry( container, {
	  // options
		//columnWidth: 100,
		itemSelector: '.portfolio-thumb',
		gutter: 10,
		isFitWidth: true

	});

});