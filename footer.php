	<div id="footer-container" class="container-fluid ">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">
				<img src="images/logoSiteFooter.png" alt="" class="img-responsive">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-3 col-lg-offset-1">
				<p>
				<strong>Tel: (11) 3887-4555</strong><br>
				Av. República do Líbano, nº 1190<br>
				Vila Nova Conceição - São Paulo<br>
				fale@angloamericana.com.br<br>
				CRECI 6975J
				</p>
			</div>
		</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/pathformer.js"></script>
	<script src="js/vivus.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/sss.min.js"></script>
    <script src="https://use.fontawesome.com/4ef912055f.js"></script>
	<script>
// Iniciar Slider

		jQuery(function($) {$('#imoveis-wrapper .slider').sss({
			slideShow : false
		});});

		jQuery(function($) {$('#imovel-wrapper .slider').sss({
			slideShow : true
		});});

//Iniciar Lightbox

		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox({ 
		    });
		});

// Iniciar Tooltip

		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})

// Contato - Habilitar/Desabilibar clique em mapa

		$(function(){
			$('.map').on('click', function(){
				$(this).addClass('interact');
			});
		});
		$(document).click(function(event) { 
		    if(!$(event.target).closest('.map').length) {
		        if($('.map').is(":visible")) {
		            $('.map').removeClass('interact');
		        }
		    }        
		})
		$('#enviamosemail-trigger').click(function(event) {      
			$('#emailModal').modal('show');
		})
		$('#ligamos-trigger').click(function(event) {      
			$('#ligamosModal').modal('show');
		})

// Smooth Scroll - Suavizar transições de altura na página via ancoras (#)

		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 200, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });

// Serviços - Relocation - Logo Animation Background

		if (showlogo) {
			var logoLine = new Vivus('svglogo', {
				file: 'images/logoline.svg',
				duration: 80,
				onReady: function (myVivus) {
					
				}
			});
		}

// Waypoints Serviços e Relocation

		$('#way-1, #way-2, #way-3').waypoint(function(direction) {
			if (direction == 'up') {};
		    $(this).removeClass('off')
		    $(this).siblings('.section-div').addClass('off')
		}, {
		  offset: 15
		})
		$('#way-1').waypoint(function(direction) {
			if (direction == 'up') {};
		    $('#title-1').addClass('on')
		    $('#title-1').siblings('h2').removeClass('on')
		    $('#servicos-wrapper').removeClass('bgblue')
		}, {
		  offset: 15
		})
		$('#way-2').waypoint(function(direction) {
			if (direction == 'up') {};
		    $('#title-2').addClass('on');
		    $('#title-2').siblings('h2').removeClass('on');
		    $('#servicos-wrapper').addClass('bgblue');
		}, {
		  offset: 15
		})
		$('#way-3').waypoint(function(direction) {
			if (direction == 'up') {};
		    $('#title-3').addClass('on');
		    $('#title-3').siblings('h2').removeClass('on');
		    $('#servicos-wrapper').removeClass('bgblue');

		}, {
		  offset: 15
		})
		$('#way-1, #way-2, #way-3').waypoint(function(direction) {
			if (direction == 'down') {};
		    $(this).removeClass('off');
		    $(this).siblings('.section-div').addClass('off');
		}, {
		  offset: '40%'
		})
		$('#way-1').waypoint(function(direction) {
			if (direction == 'down') {};
		    $('#title-1').addClass('on');
		    $('#title-1').siblings('h2').removeClass('on');
		    $('#servicos-wrapper').removeClass('bgblue');
		}, {
		  offset: '40%'
		})
		$('#way-2').waypoint(function(direction) {
			if (direction == 'down') {};
		    $('#title-2').addClass('on');
		    $('#title-2').siblings('h2').removeClass('on');
		    $('#servicos-wrapper').addClass('bgblue');
		    logoLine.play();
		}, {
		  offset: '40%'
		})
		$('#way-3').waypoint(function(direction) {
			if (direction == 'down') {};
		    $('#title-3').addClass('on');
		    $('#title-3').siblings('h2').removeClass('on');
		    $('#servicos-wrapper').removeClass('bgblue');
		}, {
		  offset: '40%'
		})

// Serviços - Relocation - Toggle botão scrollTop quando chegar no fim da página

		$('#footer-container').waypoint(function(direction) {
			$('#scrollTop').toggleClass('fade')
		}, {
		  offset: '100%'
		})

// Relocation - Toogle tooltip #gotoenglish quando está na página de Relocation em Português
$(function(){
	if (isrelocation_br) {
		setTimeout(function(){ 
			$('#gotoenglish').tooltip('show')
		}, 1000);
		setTimeout(function(){ 
			$('#gotoenglish').tooltip('hide')
		}, 6000);
		
	};
});

	</script>
	</body>
</html>