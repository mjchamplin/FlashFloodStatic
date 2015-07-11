  var nav = responsiveNav(".nav-collapse",{ label:"<i class='fa fa-bars'></i>"});


//jQuery(".big").fitText(0.8, { minFontSize: '80px' });

	function doFit(){
        //textFit(document.getElementById('big'), {alignVert: true, multiLine: true});
		textFit($('.billboard'),{alignVert: true});

	}

    $( document ).ready(function() {		
		console.log( "document loaded" );		
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