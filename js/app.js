// Iniciate App
angular.module('anglo', [])

// Troca formatação de moedas para padrão brasileiro
.config(['$provide', function($provide) {
    $provide.decorator('$locale', ['$delegate', function($delegate) {
        $delegate.NUMBER_FORMATS.DECIMAL_SEP = ',';
        $delegate.NUMBER_FORMATS.GROUP_SEP = '.';
        return $delegate;
    }]);
}])

/*
	Directives
*/

// Cadastre Seu Imóvel
// .directive('cadastre', function() {
//   return {
//       restrict: 'E',
//       templateUrl: 'directives/cadastre.html'
//   };
// })
// Enviar para amigo
.directive('enviarAmigo', function() {
  return {
      restrict: 'E',
      templateUrl: 'directives/enviaramigo.html'
  };
})
// Enviamos um email para você
.directive('enviamosEmail', function() {
  return {
      restrict: 'E',
      templateUrl: 'directives/enviamosemail.html'
  };
})
// Ligamos para você
.directive('ligamos', function() {
  return {
      restrict: 'E',
      templateUrl: 'directives/ligamos.html'
  };
})

.directive('format', function ($filter) {
'use strict';

return {
    require: '?ngModel',
    link: function (scope, elem, attrs, ctrl) {
        if (!ctrl) {
            return;
        }

        ctrl.$formatters.unshift(function () {
            return $filter('number')(ctrl.$modelValue);
        });

        ctrl.$parsers.unshift(function (viewValue) {
            var plainNumber = viewValue.replace(/[\,\.]/g, ''),
                b = $filter('number')(plainNumber);

            elem.val(b);

            return plainNumber;
        });
    }
};
})

/*
	Controllers
*/

// Main Controller
.controller('main', ['$scope', function($scope) {

// DATA - Imóveis em Destaque
	$scope.destaqueLocacao = [{
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
	},
	{
		referencia: '347875',
		finalidade: 'Locação',
		tipo: 'Casa',
		condominio: 3600,
		bairro: 'Vila Nova Conceição',
		preco_venda: 0,
		preco_locacao: 25000,
		fotos: [
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_1.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_0.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_2.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_3.jpg'
		],
		suites: 4,
		dormitorios: 4,
		vagas: 4,
		area: 350,
		descricao: 'Apartamento MOEMA com: 200.00 m² de área útil, 2 dormitórios ( sendo 2 suítes ), banheiro sr. e sra., varanda, mobília, hidro-massagem, escritório, suíte master, churrasqueira privativa. Condomínio com: aquecimento, forno, ar condicionado, piscina, quadra poli-esportiva, sauna, salão de festas, sala ginastica, churrasqueira, espaço gourmet, 4 vagas de garagem.',
		detalhes: ['Mobília']
	},
	{
		referencia: '347875',
		finalidade: 'Locação',
		tipo: 'Apartamento',
		condominio: 3600,
		bairro: 'Itaim Paulista',
		preco_venda: 0,
		preco_locacao: 25000,
		fotos: [
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_2.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_1.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_0.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/347875_3.jpg'
		],
		suites: 4,
		dormitorios: 4,
		vagas: 4,
		area: 350,
		descricao: 'Apartamento MOEMA com: 200.00 m² de área útil, 2 dormitórios ( sendo 2 suítes ), banheiro sr. e sra., varanda, mobília, hidro-massagem, escritório, suíte master, churrasqueira privativa. Condomínio com: aquecimento, forno, ar condicionado, piscina, quadra poli-esportiva, sauna, salão de festas, sala ginastica, churrasqueira, espaço gourmet, 4 vagas de garagem.',
		detalhes: ['Mobília']
	}
	]
	$scope.destaqueVenda = [{
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
		referencia: '350680',
		finalidade: 'Venda',
		tipo: 'Apartamento',
		condominio: 3800,
		bairro: 'Campo Belo',
		preco_venda: 3800000,
		preco_locacao: 12500,
		fotos: [
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_2.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_0.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_1.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_3.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_4.jpg'
		],
		suites: 3,
		dormitorios: 3,
		vagas: 3,
		area: 275,
		descricao: 'Cobertura decorada com muito bom gosto , pode ser locada também sem os móveis, no Paraíso, piscina e academia privativas , pronta para morar com muito conforto e lazer , ar condicionado em 285.00 m com 4 dts sendo 3 suítes, 4 vagas.',
		detalhes: []
	},
	{
		referencia: '350680',
		finalidade: 'Venda',
		tipo: 'Casa',
		condominio: 3800,
		bairro: 'Brooklin',
		preco_venda: 3800000,
		preco_locacao: 12500,
		fotos: [
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_3.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_0.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_1.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_2.jpg',
			'http://www.angloamericana.com.br/img/arquivoanexo/350680_4.jpg'
		],
		suites: 5,
		dormitorios: 3,
		vagas: 4,
		area: 325,
		descricao: 'Cobertura decorada com muito bom gosto , pode ser locada também sem os móveis, no Paraíso, piscina e academia privativas , pronta para morar com muito conforto e lazer , ar condicionado em 285.00 m com 4 dts sendo 3 suítes, 4 vagas.',
		detalhes: []
	}
	]

// DATA - Resultados da Busca
	$scope.imoveisBusca = [
		{
			referencia: '350680',
			finalidade: 'Venda',
			tipo: 'Cobertura',
			condominio: 3800,
			iptu: 2000,
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
			referencia: '347875',
			finalidade: 'Locação',
			tipo: 'Apartamento',
			condominio: 3600,
			iptu: 2000,
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
		},
		{
			referencia: '181170',
			finalidade: 'Venda',
			tipo: 'Apartamento',
			condominio: 1270,
			iptu: 2000,
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
			iptu: 2000,
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
			referencia: '349841',
			finalidade: 'Venda',
			tipo: 'Casa',
			condominio: 3600,
			iptu: 2000,
			bairro: 'Alto de Pinheiros',
			preco_venda: 5900000,
			preco_locacao: 25000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/349841_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/349841_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/349841_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/349841_3.jpg'
			],
			suites: 4,
			dormitorios: 4,
			vagas: 6,
			area: 580,
			descricao: 'Casa ALTO DE PINHEIROS 580 m² de área construída, 4 dormitórios ( sendo 4 suítes ), 750 metros de terreno, 6 vagas de garagem.',
			detalhes: []
		},
		{
			referencia: '261893',
			finalidade: 'Venda',
			tipo: 'Casa Cond. Fechado',
			condominio: 3600,
			iptu: 2000,
			bairro: 'Morumbi',
			preco_venda: 12000000,
			preco_locacao: 38000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/261893_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/261893_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/261893_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/261893_3.jpg'
			],
			suites: 5,
			dormitorios: 5,
			vagas: 9,
			area: 2000,
			descricao: 'Casa Cond. Fech. MORUMBI 1000.00 m² de área construída, 5 dormitórios ( sendo 5 suítes ), 2000.00 metros de terreno, wc empregados, copa, adega, living, sala de jantar, lareira, sala de almoço, piscina, play ground, sauna, quadra de tênis, churrasqueira, 9 vagas de garagem.',
			detalhes: ['Adega', 'Copa', 'Lareira', 'Sala de Almoço', 'Sala de Jantar', 'Sala de Estar', 'WC Empregados', 'Churrasqueira', 'Piscina', 'Playground', 'Sauna', 'Quadra de Tênis']
		},
		{
			referencia: '290591',
			finalidade: 'Venda',
			tipo: 'Casa Cond. Fechado',
			condominio: 5300,
			iptu: 2000,
			bairro: 'Alto da Boa Vista',
			preco_venda: 2400000,
			preco_locacao: 0,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/290591_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/290591_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/290591_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/290591_3.jpg'
			],
			suites: 4,
			dormitorios: 4,
			vagas: 0,
			area: 727,
			descricao: 'Casa Cond. Fech. ALTO DA BOA VISTA 727.00 m² de área construída, 4 dormitórios ( sendo 4 suítes ).',
			detalhes: ['Adega', 'Copa', 'Lareira', 'Sala de Almoço', 'Sala de Jantar', 'Sala de Estar', 'WC Empregados', 'Churrasqueira', 'Piscina', 'Playground', 'Sauna', 'Quadra de Tênis']
		},
		{
			referencia: '343279',
			finalidade: 'Venda',
			tipo: 'Cobertura',
			condominio: 2912,
			iptu: 2000,
			bairro: 'Moema',
			preco_venda: 2180000,
			preco_locacao: 0,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/343279_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/343279_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/343279_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/343279_3.jpg'
			],
			suites: 1,
			dormitorios: 3,
			vagas: 3,
			area: 2000,
			descricao: 'Cobertura Duplex MOEMA com: 197.00 m² de área útil, 3 dormitórios ( sendo 1 suíte ), armário embutido, terraço, varanda, lareira. Condomínio com: jardim, piscina, play ground, salão de festas, sala ginastica, 3 vagas de garagem.',
			detalhes: ['Armário Embutido', 'Duplex', 'Lareira', 'Terraço', 'Varanda', 'Jardim', 'Piscina', 'Playground', 'Sala de Ginástica', 'Salão de Festas']
		},
		{
			referencia: '342588',
			finalidade: 'Venda',
			tipo: 'Apartamento',
			condominio: 950,
			iptu: 2000,
			bairro: 'Jardins',
			preco_venda: 1400000,
			preco_locacao: 0,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/342588_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/342588_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/342588_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/342588_3.jpg'
			],
			suites: 0,
			dormitorios: 3,
			vagas: 1,
			area: 120,
			descricao: 'Apartamento JARDINS com: 120.00 m² de área útil, 3 dormitórios, mobília, 1 vaga de garagem.',
			detalhes: ['Mobília']
		},
		{
			referencia: '334562',
			finalidade: 'Venda',
			tipo: 'Apartamento',
			condominio: 3010,
			iptu: 2000,
			bairro: 'Jardim Paulista',
			preco_venda: 4500000,
			preco_locacao: 0,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/334562_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/334562_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/334562_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/334562_3.jpg'
			],
			suites: 1,
			dormitorios: 3,
			vagas: 5,
			area: 345,
			descricao: 'Apartamento JARDIM PAULISTA com: 345.00 m² de área útil, 3 dormitórios ( sendo 1 suíte ), wc empregados, copa, armário embutido, despensa, sala de jantar, sala intima, closet. Condomínio com: recuo, 5 vagas de garagem.',
			detalhes: ['Armário Embutido', 'Closet', 'Copa', 'Despensa', 'Sala de Jantar', 'Sala Íntima', 'WC Empregados', 'Recuo']
		}
	]

// DATA - Lançamentos
	$scope.imoveisLancamentos = [
		{
			referencia: '350680',
			finalidade: 'Venda',
			estadodaobra: 'Em construção',
			tipo: 'Cobertura',
			empreendimento: 'Authentic',
			condominio: 3800,
			iptu: 2000,
			cidade: 'São Paulo',
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
			blocos: [
				{
					nome: 'Bloco Um',
					suites: 3,
					dormitorios: 4,
					vagas: 4,
					area: 285,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/6/Planta/Art_Cube_planta145m%C2%B2_4dorms.jpg'
				},
				{
					nome: 'Bloco Dois',
					suites: 2,
					dormitorios: 3,
					vagas: 2,
					area: 230,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/6/Planta/Art_Cube_planta263m%C2%B2_cobertura_inf_4dorms.jpg'
				},
				{
					nome: 'Bloco Três',
					suites: 4,
					dormitorios: 5,
					vagas: 4,
					area: 330,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/6/Planta/Art_Cube_planta145m%C2%B2_4dorms.jpg'
				}
			],
			descricao: 'Cobertura decorada com muito bom gosto , pode ser locada também sem os móveis, no Paraíso, piscina e academia privativas , pronta para morar com muito conforto e lazer , ar condicionado em 285.00 m com 4 dts sendo 3 suítes, 4 vagas.',
			resumo: 'Cobertura decorada com muito bom gosto , pode ser locada também sem os móveis, no Paraíso..',
			detalhes: ['Espaço Gourmet', 'Salão de Festas', 'Solarium', 'Piscina', 'Sala Fitness']
		},
		{
			referencia: '347875',
			finalidade: 'Locação',
			estadodaobra: 'Na Planta',
			tipo: 'Apartamento',
			empreendimento: 'Nomad',
			condominio: 3600,
			iptu: 2000,
			cidade: 'São Paulo',
			bairro: 'Moema',
			preco_venda: 0,
			preco_locacao: 15000,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/347875_3.jpg'
			],
			blocos: [
				{
					nome: 'Bloco Um',
					suites: 3,
					dormitorios: 4,
					vagas: 4,
					area: 285,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Tipo%201%C2%BA%20pav%20-%20146%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Dois',
					suites: 2,
					dormitorios: 3,
					vagas: 2,
					area: 230,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20T%202%20Cobertura%20Inferior%20-%20157%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Três',
					suites: 4,
					dormitorios: 5,
					vagas: 4,
					area: 330,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Cobertura%20Superior%20-%20276%20m%C2%B2.jpg'
				}
			],
			descricao: 'Apartamento MOEMA com: 200.00 m² de área útil, 2 dormitórios ( sendo 2 suítes ), banheiro sr. e sra., varanda, mobília, hidro-massagem, escritório, suíte master, churrasqueira privativa. Condomínio com: aquecimento, forno, ar condicionado, piscina, quadra poli-esportiva, sauna, salão de festas, sala ginastica, churrasqueira, espaço gourmet, 4 vagas de garagem.',
			resumo: 'Apartamento MOEMA com: 200.00 m² de área útil, 2 dormitórios ( sendo 2 suítes ).',
			detalhes: ['Mobília']
		},
		{
			referencia: '181170',
			finalidade: 'Venda',
			estadodaobra: 'Pronto',
			tipo: 'Apartamento',
			empreendimento: 'Medley',
			condominio: 1270,
			iptu: 2000,
			cidade: 'São Paulo',
			bairro: 'Vila Nova Conceição',
			preco_venda: 920000,
			preco_locacao: 5600,
			fotos: [
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_0.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_1.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_2.jpg',
				'http://www.angloamericana.com.br/img/arquivoanexo/181170_3.jpg',
			],
			blocos: [
				{
					nome: 'Bloco Um',
					suites: 3,
					dormitorios: 4,
					vagas: 4,
					area: 285,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Tipo%201%C2%BA%20pav%20-%20146%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Dois',
					suites: 2,
					dormitorios: 3,
					vagas: 2,
					area: 230,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20T%202%20Cobertura%20Inferior%20-%20157%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Três',
					suites: 4,
					dormitorios: 5,
					vagas: 4,
					area: 330,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Cobertura%20Superior%20-%20276%20m%C2%B2.jpg'
				}
			],
			descricao: 'Apartamento VILA NOVA CONCEIÇÃO com: 48.00 m² de área útil, 1 dormitório ( sendo 1 suíte ), mobília, 1 vaga de garagem.',
			resumo: 'Apartamento VILA NOVA CONCEIÇÃO com: 48.00 m² de área útil, 1 dormitório ( sendo 1 suíte ).',
			detalhes: ['Mobília']
		},
		{
			referencia: '340672',
			finalidade: 'Venda',
			estadodaobra: 'Em construção',
			tipo: 'Casa',
			empreendimento: 'Studio',
			condominio: 0,
			iptu: 2000,
			cidade: 'São Paulo',
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
			blocos: [
				{
					nome: 'Bloco Um',
					suites: 3,
					dormitorios: 4,
					vagas: 4,
					area: 285,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Tipo%201%C2%BA%20pav%20-%20146%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Dois',
					suites: 2,
					dormitorios: 3,
					vagas: 2,
					area: 230,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20T%202%20Cobertura%20Inferior%20-%20157%20m%C2%B2.jpg'
				},
				{
					nome: 'Bloco Três',
					suites: 4,
					dormitorios: 5,
					vagas: 4,
					area: 330,
					planta: 'http://bossanova.sigavi360.com.br/Arquivo/Empreendimento/114/Planta/Planta%20Cobertura%20Superior%20-%20276%20m%C2%B2.jpg'
				}
			],
			descricao: 'Linda casa no JARDIM EUROPA 528.00 m² de área construída, 4 dormitórios ( sendo 4 suítes ), 922.00 metros de terreno, banheiro sr. e sra., closet, ar condicionado, piscina, 4 vagas de garagem.',
			resumo: 'Linda casa no JARDIM EUROPA 528.00 m² de área construída, 4 dormitórios ( sendo 4 suítes ).',
			detalhes: ['Ar Condicionado', 'Banheiro Sr. e Sra.', 'Closet', 'Piscina']
		}
	]

// DATA - Internacional
	$scope.imoveisInternacional = [
		{
			referencia: '350680',
			finalidade: 'Venda',
			tipo: 'Cobertura',
			condominio: 3800,
			iptu: 2000,
			bairro: 'Midtown',
			cidade: 'Miami (EUA)',
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
			referencia: '347875',
			finalidade: 'Locação',
			tipo: 'Apartamento',
			condominio: 3600,
			iptu: 2000,
			bairro: 'Miami Beach',
			cidade: 'Miami (EUA)',
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
		},
		{
			referencia: '181170',
			finalidade: 'Venda',
			tipo: 'Apartamento',
			condominio: 1270,
			iptu: 2000,
			bairro: 'Little Havana',
			cidade: 'Miami (EUA)',
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
			iptu: 2000,
			bairro: 'Key Biscayne',
			cidade: 'Miami (EUA)',
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
		}
	]

// DATA - Single Lançamento
	$scope.imovel = $scope.imoveisBusca[window.location.hash.substr(1)];

// DATA - Single Lançamento
	$scope.lancamento = $scope.imoveisLancamentos[window.location.hash.substr(1)];

// DATA - Single Internacional
	$scope.internacional = $scope.imoveisInternacional[window.location.hash.substr(1)];


// DATA - Bairros
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
		'Chácara Santo Antônio',
		'Morumbi',
		'Panamby',
		'Vila Madalena',
		'Outros'
	];

// UI - Home - Abrir div Encontre seu Imóvel
	$scope.toggleEncontreBtn = function() {
		$('#home-banner-buttons, #busca-imovel').toggleClass('on');


	}
	$(document).click(function(event) { 
	    if(!$(event.target).closest('#home-banner-buttons, #busca-imovel').length) {
	        if($('#home-banner-buttons, #busca-imovel').is(":visible")) {
	            $('#home-banner-buttons, #busca-imovel').removeClass('on');
	        }
	    }        
	})

// UI - Home - Busca de Imóveis - Manter preço máximo maior que preço mínimo
	$scope.changePrecoMin = function() {
		$scope.precoMin = parseInt($scope.precoMin);
		$scope.precoMax = parseInt($scope.precoMax);
		if ($scope.precoMax <= $scope.precoMin && $scope.precoMax != undefined) {
			$scope.precoMax = undefined;
		}
	}
	$scope.changePrecoMax = function() {
		$scope.precoMax = parseInt($scope.precoMax);
		$scope.precoMin = parseInt($scope.precoMin);
		if ($scope.precoMax <= $scope.precoMin && $scope.precoMin != undefined && $scope.precoMax != undefined) {
			if ($scope.precoMax - 1000 > 0) {
				$scope.precoMin = undefined;
			} else {
				$scope.precoMin = 0;
			}
		};
	}

// UI - Home - Busca de Imóveis
	$( ".btn-group .btn-default " ).click(function() {
		$(this).siblings().removeClass('selected')
	  	$(this).toggleClass('selected');
	});
	$( "label.busca-check-label" ).click(function() {
	  	$(this).addClass('selected');
	});

// UI - Abrir Popup Cadastro de Imóveis
	$scope.cadastreToggle = function() {
	  	$('#cadastre-wrapper').toggleClass('on');
	}

// UI - Busca Imoveis - Single Imovel - Toggle Estrela de Favoritos
	$scope.addFav = function($event) {
		angular.element($event.target).toggleClass('fa-star-o').toggleClass('fa-star')
	}

// UI - Favoritos - Insere texto quando não há imóveis em Favoritos
	$scope.removeFav = function($event) {
		angular.element($event.currentTarget).parent().remove()
		if (! $(".slider-container")[0]){
		    $( "<div class='col-md-12'><div class='spacer' style='height: 15px'></div><p>Você não adicionou nenhum imóvel como favorito.<br>Clique no ícone da estrela (<i class='fa fa-star'></i>) em um imóvel para adicioná-lo aos favoritos.</p></div>" ).appendTo( "#imoveis-wrapper .row" );
		}
	}

// UI - Botão Voltar
	$scope.lastLink = function() {
		if (document.referrer.indexOf(window.location.host) !== -1) {
			history.go(-1); 
			return false; 
		} else { 
			window.location.href = '/';
		}
	} 
}])
