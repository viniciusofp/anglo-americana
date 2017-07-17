# Anglo Americana Imóveis

Documentação do desenvolvimento de template para novo site da Anglo Americana Imóveis.

## Estrutura

Mantive os mesmos nomes dos arquivos e pastas do site atual. Busquei deixar o código o mais enxuto possível e coloquei comentários em todos arquivos para facilitar a identificação de cada elemento das páginas.

Para deixar mais organizado, separei o código dos popups **Cadastre seu imóvel**, **Enviamos um email**, **Ligamos para você** e **Envie para um amigo** em directives do Angular. Os arquivos estão na pasta **directives/**.

### Bibliotecas e Frameworks

- [**Bootstrap**](http://getbootstrap.com/): Front-End
- [**SASS**](http://sass-lang.com/): Compilador de CSS
- [**Angular JS**](https://docs.angularjs.org/api): UI e Data Binding
- [**Vivus JS e Pathformer**](https://maxwellito.github.io/vivus/): Animação SVG nas páginas Serviços e Relocation
- [**Waypoints**](http://imakewebthings.com/waypoints/): Animação CSS com Scroll nas páginas Serviços e Relocation
- [**Super Simple Slider**](http://supersimpleslider.com/): Slider fotos de Imóveis

## Angular JS

Usei a framework **Angular JS** para fazer a Interface de Usuário e para mimetizar o banco de dados, evitando a repetição de HTML em loops e facilitando a reprodução de páginas de diferentes imóveis.

O código em Angular está no arquivo **js/app.js**.

### "Back-End"

Para desenvolver rapidamente o template e não fazer muito trabalho que precisaria ser refeito, usei algumas funcões do Angular, **$scope**, **ng-repeat** e **ng-if**. Esse código deverá ser substituído por PHP. **No app.js, deve-se preservar o que está marcado como UI e excluir o que está marcado como DATA.**

Criei arranjos em JSON para servir como banco de dados, eles estão no início do Controller.

#### Loops e variáveis


Os loops usam a diretiva do Angular **ng-repeat**, como no exemplo (resultados-de-busca.php):

```
<div ng-repeat-start="imovel in imoveisBusca track by $index" class="slider-container col-sm-12 col-md-6">  
	<div class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><i class="fa fa-star-o" aria-hidden="true"></i></div>
	
	<div class="slider">
	    <div ng-repeat="foto in imovel.fotos" style="background-image: url({{foto}});">
	    	<a href="detalhes.php#{{$parent.$index}}"><div class="foto-trigger"></div></a>
	    </div>
	</div>
	<a href="detalhes.php#{{$index}}">
		<ul class="list-inline">
			<li><h4>{{imovel.tipo}} - {{imovel.bairro}}</h4></li>
			<div class="clearfix"></div>
			<li><h5><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{imovel.dormitorios}}</h5></li>
			<li><h5><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{imovel.vagas}}</h5></li>
			<li><h5><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{imovel.area}} m<sup>2</sup></h5></li>	
			<div class="clearfix"></div>	
			<li ng-if="imovel.finalidade == 'Venda'"><h5><strong>{{imovel.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_venda | currency:"R$ "}}</span></h5></li>
			<li ng-if="imovel.finalidade != 'Venda'"><h5><strong>{{imovel.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_locacao | currency:"R$ "}}</span></h5></li>				
			<li><button class="btn btn-warning">Veja os detalhes</button></li>
		</ul>
	</a>
</div>
<div ng-repeat-end ng-if="($index + 1) % 2 == 0" class="clearfix"></div>
```

O código acima, praticamente igual ao das páginas **favoritos.php** e **index.php**, contém dois loops: um externo que lista os imóveis e um interno que lista as fotos do imóvel.

As informações de imóvel provenientes do bando de dados estão entre duas chaves, como **{{imovel.area}}**.

#### Condicionais

Inseri algumas condicionais com a diretiva **ng-if**, como nesse trecho do exemplo acima:

```
<div ng-repeat-end ng-if="($index + 1) % 2 == 0" class="clearfix"></div>
```

Ele adiciona um div com a tag clearfix a cada dois posts, para manter a grid alinhada.

Também usei a **ng-if** para evitar mostrar dados que possam não estar preenchidos no DB, como nos Detalhes de Imóvel (detalhes.php):

```
<h5 class="blue">DETALHES DO IMÓVEL</h5>
<dl class="dl-horizontal">
  <dt>Referência</dt>
  <dd>{{imovel.referencia}}</dd>
  <dt>Finalidade</dt>
  <dd>{{imovel.finalidade}}</dd>
  <dt>Bairro</dt>
  <dd>{{imovel.bairro}}</dd>
  <dt>Tipo de Imóvel</dt>
  <dd>{{imovel.tipo}}</dd>
  <dt ng-if="imovel.preco_venda != 0">Preço Venda</dt>
  <dd ng-if="imovel.preco_venda != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{imovel.preco_venda | currency:"R$ "}}</span></dd>
  <dt ng-if="imovel.preco_locacao != 0">Preço Locação</dt>
  <dd ng-if="imovel.preco_locacao != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{imovel.preco_locacao | currency:"R$ "}}</span></dd>
  <dt ng-if="imovel.condominio != 0">Condomínio</dt>
  <dd ng-if="imovel.condominio != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{imovel.condominio | currency:"R$ "}}</span></dd>
  <dt>Quartos</dt>
  <dd>{{imovel.dormitorios}}</dd>
  <dt ng-if="imovel.suites != 0">Suítes</dt>
  <dd ng-if="imovel.suites != 0">{{imovel.suites}}</dd>
  <dt ng-if="imovel.preco_vagas != 0">Vagas</dt>
  <dd ng-if="imovel.preco_vagas != 0">{{imovel.vagas}}</dd>
  <dt>Área</dt>
  <dd>{{imovel.area}} m<sup>2</sup></dd>
</dl>
```

#### URLs

Usei um truque pra simular as páginas de diferentes imóveis, colocando o index de cada item do loop na location hash da URL (index.php, favoritos.php, resultados-de-busca.php):

```
<a  href="detalhes.php#{{$index}}"> . . . </a>
```

E definindo o imóvel a partir desse index no arranjo de imóveis (app.js):

```
$scope.imovel = $scope.imoveisBusca[window.location.hash.substr(1)];
```

Assim evitei que todos links levassem pro mesmo imóvel ou criar várias páginas estáticas.

