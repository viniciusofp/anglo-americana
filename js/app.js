angular.module('anglo', [])

/*
	Directives
*/

// Header
.directive('angloHeader', function() {
  
  return {
      restrict: 'E',
      templateUrl: 'directives/header.html'
  };

})
// Footer
.directive('angloFooter', function() {
  
  return {
      restrict: 'E',
      templateUrl: 'directives/footer.html'
  };

})
// Cadastre Seu Imóvel
.directive('cadastre', function() {
  
  return {
      restrict: 'E',
      templateUrl: 'directives/cadastre.html'
  };

})


/*
	Controllers
*/

// Main Controller

.controller('main', ['$scope', function($scope) {
	$scope.imoveisDestaque = [
		{
			referencia: '350680',
			finalidade: 'Venda',
			tipo: 'Cobertura',
			condominio: 3800,
			bairro: 'Paraíso',
			preco_venda: 3800000,
			preco_locacao: 22000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/350680_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/350680_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/350680_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/350680_3.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/350680_4.jpg'
			],
			suites: 3,
			dormitorios: 4,
			vagas: 4,
			area: 285,
			descricao: 'Cobertura decorada com muito bom gosto , pode ser locada também sem os móveis, no Paraíso, piscina e academia privativas , pronta para morar com muito conforto e lazer , ar condicionado em 285.00 m com 4 dts sendo 3 suítes, 4 vagas.',
			detalhes: []
		},
		{
			referencia: '181170',
			finalidade: 'Venda',
			tipo: 'Apartamento',
			condominio: 1270,
			bairro: 'Vila Nova Conceição',
			preco_venda: 920000,
			preco_locacao: 5600,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_3.jpg',
			],
			suites: 1,
			dormitorios: 1,
			vagas: 1,
			area: 48,
			descricao: 'Apartamento VILA NOVA CONCEIÇÃO com: 48.00 m² de área útil, 1 dormitório ( sendo 1 suíte ), mobília, 1 vaga de garagem.',
			detalhes: ['Mobília']
		},
		{
			referencia: '340672',
			finalidade: 'Venda',
			tipo: 'Casa',
			condominio: 0,
			bairro: 'Jardim Europa',
			preco_venda: 15000000,
			preco_locacao: 60000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/340672_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/340672_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/340672_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/340672_3.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/340672_4.jpg',
			],
			suites: 4,
			dormitorios: 4,
			vagas: 4,
			area: 528,
			descricao: 'Linda casa no JARDIM EUROPA 528.00 m² de área construída, 4 dormitórios ( sendo 4 suítes ), 922.00 metros de terreno, banheiro sr. e sra., closet, ar condicionado, piscina, 4 vagas de garagem.',
			detalhes: ['Ar Condicionado', 'Banheiro Sr. e Sra.', 'Closet', 'Piscina']
		},
		{
			referencia: '347875',
			finalidade: 'Locação',
			tipo: 'Apartamento',
			condominio: 3600,
			bairro: 'Moema',
			preco_venda: 0,
			preco_locacao: 15000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_3.jpg'
			],
			suites: 2,
			dormitorios: 2,
			vagas: 4,
			area: 200,
			descricao: 'Apartamento MOEMA com: 200.00 m² de área útil, 2 dormitórios ( sendo 2 suítes ), banheiro sr. e sra., varanda, mobília, hidro-massagem, escritório, suíte master, churrasqueira privativa. Condomínio com: aquecimento, forno, ar condicionado, piscina, quadra poli-esportiva, sauna, salão de festas, sala ginastica, churrasqueira, espaço gourmet, 4 vagas de garagem.',
			detalhes: ['Mobília']
		}
	]
	$scope.bairros = [
		'Vila Nova Conceição',
		'Moema',
		'Itaim',
		'Jardins',
		'Jardim América',
		'Jardim Paulista',
		'Jardim Europa',
		'Jardim Luzitânia',
		'Jardim Paulistano',
		'Paraíso',
		'Vila Olímpia',
		'Ibirapuera',
		'Brooklin',
		'Campo Belo',
		'Vila Mariana',
		'Cidade Jardim',
		'Pinheiros',
		'Alto de Pinheiros',
		'Alto da Boa Vista',
		'Chácara Flora',
		'Chácara Santo Antônio',
		'Morumbi',
		'Panamby',
		'Vila Madalena',
		'Outros'
	];
	$scope.toggleEncontreBtn = function() {
		$('#home-banner-buttons, #busca-imovel').toggleClass('on');
	}
	$scope.changePrecoMin = function() {
		if ($scope.precoMax <= $scope.precoMin && $scope.precoMax != undefined) {
			$scope.precoMax = $scope.precoMin + 500;
		}
	}
	$scope.changePrecoMax = function() {
		if ($scope.precoMax <= $scope.precoMin && $scope.precoMin != undefined && $scope.precoMax != undefined) {
			$scope.precoMax = $scope.precoMin + 500;
		};
		
	}

	$( ".btn-group .btn-default " ).click(function() {
		$(this).siblings().removeClass('selected')
	  	$(this).toggleClass('selected');
	});

	$( "label.busca-check-label" ).click(function() {
	  	$(this).addClass('selected');
	});

	$scope.cadastreToggle = function() {
	  	$('#cadastre-wrapper').toggleClass('on');
	}


}])

// Smooth Scroll

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
        }, 1000, function() {
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


$('#way-1, #way-2, #way-3').waypoint(function(direction) {
	if (direction == 'up') {};
    $(this).removeClass('off')
    $(this).siblings('.section-div').addClass('off')
}, {
  offset: 0
})
$('#way-1').waypoint(function(direction) {
	if (direction == 'up') {};
    $('#title-1').addClass('on')
    $('#title-1').siblings('h2').removeClass('on')
    $('#servicos-wrapper').removeClass('bgwhite')
    $('#servicos-wrapper').removeClass('bgblue')


}, {
  offset: 0
})
$('#way-2').waypoint(function(direction) {
	if (direction == 'up') {};
    $('#title-2').addClass('on')
    $('#title-2').siblings('h2').removeClass('on')
    $('#servicos-wrapper').addClass('bgblue')
    $('#servicos-wrapper').removeClass('bgwhite')
}, {
  offset: 0
})
$('#way-3').waypoint(function(direction) {
	if (direction == 'up') {};
    $('#title-3').addClass('on')
    $('#title-3').siblings('h2').removeClass('on')
    $('#servicos-wrapper').addClass('bgwhite')
    $('#servicos-wrapper').removeClass('bgblue')

}, {
  offset: 0
})

$('#way-1, #way-2, #way-3').waypoint(function(direction) {
	if (direction == 'down') {};
    $(this).removeClass('off')
    $(this).siblings('.section-div').addClass('off')
}, {
  offset: '50%'
})
$('#way-1').waypoint(function(direction) {
	if (direction == 'down') {};
    $('#title-1').addClass('on')
    $('#title-1').siblings('h2').removeClass('on')
    $('#servicos-wrapper').removeClass('bgwhite')
    $('#servicos-wrapper').removeClass('bgblue')
}, {
  offset: '50%'
})
$('#way-2').waypoint(function(direction) {
	if (direction == 'down') {};
    $('#title-2').addClass('on')
    $('#title-2').siblings('h2').removeClass('on')
    $('#servicos-wrapper').addClass('bgblue')
    $('#servicos-wrapper').removeClass('bgwhite')
}, {
  offset: '50%'
})
$('#way-3').waypoint(function(direction) {
	if (direction == 'down') {};
    $('#title-3').addClass('on')
    $('#title-3').siblings('h2').removeClass('on')
    $('#servicos-wrapper').addClass('bgwhite')
    $('#servicos-wrapper').removeClass('bgblue')
}, {
  offset: '50%'
})