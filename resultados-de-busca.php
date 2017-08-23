		<?php include 'header.php' ?>


<!-- 	Busca Imoveis -->

<div class="container busca">
	<div class="row">
<!-- Sidebar - Busca de Imóveis -->
		<div class="col-sm-4 col-md-3">
			<div id="sidebar-busca-imovel" class="row">
				<div class="col-sm-12">
					<div class="btn-group">
					  <div class="input-group-btn tipo">
					    <button class="btn btn-default">COMPRAR</button>
					    <button class="btn btn-default">ALUGAR</button>
					  </div>
					</div>
				</div>
				<div class="col-sm-12">
					<h5 class="blue">TIPO DE IMÓVEL</h5>
					<ul>
						<li><label><input type="checkbox" class="busca-check"><span>Apartamento</span></label></li>
						<li><label><input type="checkbox" class="busca-check"><span>Casa Residencial</span></label></li>
						<li><label><input type="checkbox" class="busca-check"><span>Casa Comercial</span></label></li>
						<li><label><input type="checkbox" class="busca-check"><span>Conjunto Comercial</span></label></li>
					</ul>
				</div>
				<div style="clear: both; width
				100%; height: 1px;"></div>
				<div class="col-sm-12">
					<h5 class="blue">BUSCA POR BAIRRO</h5>
					<ul id="bairro-box">
						<li ng-repeat='bairro in bairros' class="col-xs-12"><label><input type="checkbox" class="busca-check"><span>{{bairro}}</span></label></li>
					</ul>
				</div>
				<div class="clearfix visible-xs visible-sm"></div>
				<div class="col-sm-12">
					<h5 class="blue">PREÇO MÍNIMO</h5>
					<div class="row">
						<div class="preco-input input-group col-xs-12">
						  <input ng-model="precoMin" onchange="angular.element(this).scope().changePrecoMin()" type="text" pattern="[0-9]+([\.,][0-9]+)*" class="form-control" aria-describedby="preco-max" min="0" format>
						  <span class="input-group-addon" id="preco-max">mín.</span>
						</div>
					</div>
					<h5 class="blue">PREÇO MÁXIMO</h5>
					<div class="row">
						<div class="preco-input input-group col-xs-12">
						  <input ng-model="precoMax" onchange="angular.element(this).scope().changePrecoMax()" type="text" pattern="[0-9]+([\.,][0-9]+)*" class="form-control" aria-describedby="preco-min" min="0" format>
						  <span class="input-group-addon" id="preco-min">máx.</span>
						</div>
					</div>
					<h5 class="blue">ÁREA MÍNIMA</h5>
					<div class="row">
						<div class="input-group col-xs-12">
						  <input type="number" step="10" class="form-control" aria-describedby="area-min" min="0">
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
				</div> <!-- col end -->

				<div class="col-sm-12">
					
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-warning" style="width: 100%">EXIBIR RESULTADOS</button>
						</div>
						<div class="spacer" style="height: 15px;"></div>
						<div class="col-xs-12">
							<div class="input-group">
							  <input type="text" class="form-control" aria-describedby="area-min" placeholder="Buscar por referência">
							  <span class="input-group-addon" id="area-min"><a href="">IR</a></span>
							</div>
						</div>
							
					</div>
				</div> <!-- col end -->
			</div> <!-- row end -->
		</div> <!-- col end -->

<!-- Resultados da Busca -->

		<div id="imoveis-wrapper" class="col-sm-8 col-md-9 busca">
			<h3 class="blue">RESULTADOS DA BUSCA</h3>
			<p id="order-by" class="pull-left"><small><strong>Ordenar por: </strong> <a href="">menor valor</a> | <a href="">maior valor</a> | <a href="">mais procurados</a> | <a href="">por bairro</a> | <a href="">por tipo</a></small></p>
			<a href="favoritos.php" class="pull-right blue"><p><small><i class="fa fa-star" aria-hidden="true"></i> Meus Favoritos</small></p></a>
			<div class="clearfix"></div>
			<div class="row">
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
							<li ng-if="imovel.preco_venda > 0"><h5><strong>Venda: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_venda | currency:"R$ "}}</span></h5></li>
							<li ng-if="imovel.preco_locacao > 0"><h5><strong>Locação: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_locacao | currency:"R$ "}}</span></h5></li>				
							<li><button class="btn btn-warning">Veja os detalhes</button></li>
						</ul>
					</a>
				</div>
				<div ng-repeat-end ng-if="($index + 1) % 2 == 0" class="clearfix"></div>
			</div>
		</div><!-- col end -->

		<div class="col-sm-12 text-center">
			<nav aria-label="Page navigation">
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li class="active"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div> <!-- col end -->
			
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include 'footer.php' ?>