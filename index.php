<?php include 'header.php' ?>

<!-- Home Banner Container -->

<div class="container-fluid" id="home-banner">
	<div id="home-banner-buttons">
		<button ng-click="toggleEncontreBtn()" class="btn btn-warning"><h4>ENCONTRAR IMÓVEL</h4></button>
		<button class="btn btn-info" ng-click="cadastreToggle()"><h4>CADASTRAR IMÓVEL</h4></button>
		<a href="#destaque"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
	</div>

<!-- Popup Busca de Imóveis -->

	<div id="busca-imovel" class="row">
		<div class="col-sm-12">
			<div id="encontre-close" ng-click="toggleEncontreBtn()">
				<i class="fa fa-close" aria-hidden="true"></i>
			</div>
			<div class="inline-col">
				<div class="btn-group">
				  <div class="input-group-btn">
				    <button class="btn btn-default">COMPRAR</button>
				    <button class="btn btn-default">ALUGAR</button>
				  </div>
				</div>
			</div>
			<div class="inline-col">
				<h5 class="blue">TIPO DE IMÓVEL</h5>
				<ul>
					<li><label><input type="checkbox" class="busca-check"><span>Apartamento</span></label></li>
					<li><label><input type="checkbox" class="busca-check"><span>Casa Residencial</span></label></li>
					<li><label><input type="checkbox" class="busca-check"><span>Casa Comercial</span></label></li>
					<li><label><input type="checkbox" class="busca-check"><span>Conjunto Comercial</span></label></li>
				</ul>
			</div>
		</div>
		<div style="clear: both; width
		100%; height: 1px;"></div>
		<div class="col-sm-12 col-md-6">
			<h5 class="blue">BUSCA POR BAIRRO</h5>
			<ul>
				<li ng-repeat='bairro in bairros' class="col-xs-6 col-sm-4 col-md-6"><label><input type="checkbox" class="busca-check"><span>{{bairro}}</span></label></li>
			</ul>
		</div>
		<div class="clearfix visible-xs visible-sm"></div>
		<div class="col-sm-12 col-md-6">
			<h5 class="blue">PREÇO MÍNIMO</h5>
			<div class="row">
				<div class="preco-input input-group col-xs-12">
				  <input ng-model="precoMax" ng-change="changePrecoMax()" type="number" step="500" class="form-control" aria-describedby="preco-max" min="0">
				  <span class="input-group-addon" id="preco-max">máx.</span>
				</div>
			</div>
			<h5 class="blue">PREÇO MÁXIMO</h5>
			<div class="row">
				<div class="preco-input input-group col-xs-12">
				  <input ng-model="precoMin" ng-change="changePrecoMin()" type="number" step="500" class="form-control" aria-describedby="preco-min" min="0">
				  <span class="input-group-addon" id="preco-min">min.</span>
				</div>
			</div>
			<h5 class="blue">ÁREA MÍNIMA</h5>
			<div class="row">
				<div class="input-group col-xs-12">
				  <input type="number" step="10" class="form-control" aria-describedby="area-min">
				  <span class="input-group-addon" id="area-min">m<sup>2</sup></span>
				</div>
			</div>
			<h5 class="blue">QUARTOS</h5>
			<div class="btn-toolbar" role="toolbar">
			  <div class="btn-group" role="group">
				<button type="button" class="btn btn-default">1+</button>
				<button type="button" class="btn btn-default">2+</button>
				<button type="button" class="btn btn-default">3+</button>
				<button type="button" class="btn btn-default">4+</button>
				<button type="button" class="btn btn-default">5+</button>
			  </div>
			</div>
			<h5 class="blue">VAGAS</h5>
			<div class="btn-toolbar" role="toolbar">
			  <div class="btn-group" role="group">
				<button type="button" class="btn btn-default">1+</button>
				<button type="button" class="btn btn-default">2+</button>
				<button type="button" class="btn btn-default">3+</button>
				<button type="button" class="btn btn-default">4+</button>
				<button type="button" class="btn btn-default">5+</button>
			  </div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
					<a href="resultados-de-busca.php"><button class="btn btn-warning" style="width: 100%">EXIBIR RESULTADOS</button></a>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-4  col-lg-4">
					<div class="input-group">
					  <input type="text" class="form-control" aria-describedby="area-min" placeholder="Buscar por referência">
					  <span class="input-group-addon" id="area-min"><a href="">IR</a></span>
					</div>
				</div>
			</div>
		</div>

	</div> <!-- end row	 -->
</div> <!-- container-fluid end -->

<div style="clear: both; width: 100%; height: 1px;"></div>

<!-- Imoveis em Destaque -->

<div id="imoveis-wrapper" class="container home">
	<div class="row">
		<div class="col-sm-12">
			<a name="destaque"></a>
			<h3 class="blue section-title">IMÓVEIS EM DESTAQUE</h3>
		</div>
<!-- 		DESTAQUE VENDA -->
		<div class="slider-container col-sm-6">  
			<h3 class="finalidade">Venda</h3> 
			<div class="slider">
			    <div ng-repeat="foto in destaqueVenda.fotos" style="background-image: url({{foto}});">
			    	<a href="detalhes.php#0"><div class="foto-trigger"></div></a>
			    </div>
			</div>
			<a  href="detalhes.php#0">
				<ul class="list-inline">
					<li><h3>{{destaqueVenda.tipo}} - {{destaqueVenda.bairro}}</h3></li>
					<div class="clearfix"></div>
					<li><h5><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{destaqueVenda.dormitorios}}</h5></li>
					<li><h5><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{destaqueVenda.vagas}}</h5></li>
					<li><h5><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{destaqueVenda.area}} m<sup>2</sup></h5></li>	
					<div class="clearfix"></div>	
					<li ng-if="destaqueVenda.finalidade == 'Venda'"><h5><strong>{{destaqueVenda.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{destaqueVenda.preco_venda | currency:"R$ "}}</span></h5></li>
					<li ng-if="destaqueVenda.finalidade != 'Venda'"><h5><strong>{{destaqueVenda.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{destaqueVenda.preco_locacao | currency:"R$ "}}</span></h5></li>				
					<li><button class="btn btn-warning">Veja os detalhes</button></li>
				</ul>
			</a>
		</div>
<!-- 		DESTAQUE LOCAÇÃO -->
		<div class="slider-container col-sm-6">  
			<h3 class="finalidade">Locação</h3>
			<div class="slider">
			    <div ng-repeat="foto in destaqueLocacao.fotos" style="background-image: url({{foto}});">
			    	<a href="detalhes.php#1"><div class="foto-trigger"></div></a>
			    </div>
			</div>
			<a  href="detalhes.php#1">
				<ul class="list-inline">
					<li><h3>{{destaqueLocacao.tipo}} - {{destaqueLocacao.bairro}}</h3></li>
					<div class="clearfix"></div>
					<li><h5><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{destaqueLocacao.dormitorios}}</h5></li>
					<li><h5><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{destaqueLocacao.vagas}}</h5></li>
					<li><h5><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{destaqueLocacao.area}} m<sup>2</sup></h5></li>	
					<div class="clearfix"></div>	
					<li ng-if="destaqueLocacao.finalidade == 'Venda'"><h5><strong>{{destaqueLocacao.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{destaqueLocacao.preco_venda | currency:"R$ "}}</span></h5></li>
					<li ng-if="destaqueLocacao.finalidade != 'Venda'"><h5><strong>{{destaqueLocacao.finalidade}}: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{destaqueLocacao.preco_locacao | currency:"R$ "}}</span></h5></li>				
					<li><button class="btn btn-warning">Veja os detalhes</button></li>
				</ul>
			</a>
		</div>
	</div>
</div>

<!-- Seção A Empresa -->

<div id="home-empresa" class="container-fluid bgred">
	<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h1>Desde 1941 fazendo história <br class="hidden-xs">no mercado imobilliário.</h1>
				<p class="lead">A Anglo Americana atua no mercado imobiliário de São Paulo <br class="visible-lg">fornecendo aos clientes um atendimento exclusivo e personalizado. </p>
				<a href="empresa.php"><button class="btn btn-default">SAIBA MAIS</button></a>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
</div>
	
<?php include 'footer.php' ?>