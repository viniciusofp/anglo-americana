<!-- 	<div id="footer-toprow" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p>Conecte-se</p>
				</div>
			</div>
		</div>
	</div> -->
	<div id="footer-container" class="container-fluid ">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">
				<img src="img/logoSiteFooter.png" alt="" class="img-responsive">
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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/pathformer.js"></script>
	<script src="js/vivus.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/sss.min.js"></script>
    <script src="https://use.fontawesome.com/4ef912055f.js"></script>
	<script>
		// Iniciate Slider
		jQuery(function($) {$('.slider').sss({
			slideShow : false
		});});

		// Iniciate Tooltip
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})

		// Javascript to enable link to tab
		var url = document.location.toString();
		if (url.match('#')) {
		    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
		} 

		// Change hash for page-reload
		$('.nav-tabs a').on('shown.bs.tab', function (e) {
		    window.location.hash = e.target.hash;
		})

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

	</script>

	</body>
</html>