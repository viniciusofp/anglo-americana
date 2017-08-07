		<?php include 'header.php' ?>


<div id="lancamentos-header" class="container-fluid bgred">
	<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h1>Lançamentos</h1>
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
			<h4 id="order-by" class="pull-left"><span class="red">Cidade:</span>
			<select name="Cidade" id="">
				<option value="São Paulo">São Paulo</option>
			</select>
			</h4>
			<a href="favoritos.php" class="pull-right blue"><p><small><i class="fa fa-star" aria-hidden="true"></i> Meus Favoritos</small></p></a>
			<div class="clearfix"></div>
			<div class="row">
				<div ng-repeat-start="imovel in imoveisLancamentos track by $index" class="slider-container col-sm-12 col-sm-6">  
					<div class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><i class="fa fa-star-o" aria-hidden="true"></i></div>
					<h3 class="finalidade">{{imovel.estadodaobra}}</h3> 
					<div class="slider">
					    <div ng-repeat="foto in imovel.fotos" style="background-image: url({{foto}}); height: 380px">
					    	<a href="detalhes-lancamento.php#{{$parent.$index}}"><div class="foto-trigger"></div></a>
					    </div>
					</div>
					<a href="detalhes-lancamento.php#{{$index}}">
						<ul class="list-inline">
							<li><h4>{{imovel.bairro}} - {{imovel.empreendimento}}</h4></li>
							<div class="clearfix"></div>
							<li><p>{{imovel.resumo}}</p></li>		
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