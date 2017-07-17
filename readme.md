# Anglo Americana Imóveis

## Estrutura

Mantive os mesmos nomes dos arquivos e pastas do site atual. Busquei deixar o código o mais enxuto possível e coloquei comentários em todos arquivos para facilitar a identificação de cada elemento das páginas.

Para deixar mais organizado, separei o código dos popups **Cadastre seu imóvel**, **Enviamos um email**, **Ligamos para você** e **Envie para um amigo** em directives do Angular. Os arquivos estão na pasta **directives/**.

### Bibliotecas e Frameworks

- [**Bootstrap**](http://getbootstrap.com/): Front-End
- [**Angular JS**](https://docs.angularjs.org/api): UI e Data Binding
- [**Vivus JS e Pathformer**](https://maxwellito.github.io/vivus/): Animação SVG nas páginas Serviços e Relocation
- [**Waypoints**](http://imakewebthings.com/waypoints/): Animação CSS com Scroll nas páginas Serviços e Relocation
- [**Super Simple Slider**](http://supersimpleslider.com/): Slider fotos de Imóveis

## Angular JS

Usei a framework **Angular JS** para fazer a Interface de Usuário e para mimetizar o banco de dados, evitando a repetição de HTML em loops e facilitando a reprodução de páginas de diferentes imóveis.

O código em Angular está no arquivo **js/app.js**.

### Loops e variáveis

Criei arranjos em JSON para mimetizar o banco de dados, eles estão no início do Controller em js/app.js.

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

O código acima, praticamente igual ao das páginas favoritos.php e index.php, contém dois loops: um externo que lista os imóveis e um interno que lista as fotos do imóvel.

As informações de imóvel provenientes do bando de dados estão no formato **{{imovel.area}}**.