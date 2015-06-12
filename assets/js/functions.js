  var nav = responsiveNav(".nav-collapse",{ label:"<i class='fa fa-bars'></i>"});


  jQuery(".big").fitText(0.8, { minFontSize: '80px' });



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