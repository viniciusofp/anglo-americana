		<?php include 'header.php' ?>


<div id="internacional-header" class="container-fluid bgred">
	<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h1>Internacional</h1>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
</div>
<!-- 	Busca Imoveis -->

<div class="container busca">
	<div class="row">

<!-- Lançamentos-->
		<div id="imoveis-wrapper" class="col-sm-12 busca">
			<h4 id="order-by" class="pull-left"><span class="blue">Cidade:</span>
			<select name="Cidade" id="">
				<option value="São Paulo">São Paulo</option>
			</select>
			</h4>
			<a href="favoritos.php" class="pull-right blue"><p><small><i class="fa fa-star" aria-hidden="true"></i> Meus Favoritos</small></p></a>
			<div class="clearfix"></div>
			<div class="row">
				<div ng-repeat-start="imovel in imoveisInternacional track by $index" class="slider-container col-sm-12 col-sm-6">  
					<div class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><i class="fa fa-star-o" aria-hidden="true"></i></div>
					<div class="slider">
					    <div ng-repeat="foto in imovel.fotos" style="background-image: url({{foto}}); height: 380px">
					    	<a href="detalhes-internacional.php#{{$parent.$index}}"><div class="foto-trigger"></div></a>
					    </div>
					</div>
					<a href="detalhes-internacional.php#{{$index}}">
						<ul class="list-inline">
							<li><h4>{{imovel.tipo}} - {{imovel.bairro}} - {{imovel.cidade}}</h4></li>
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