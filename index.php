		<?php include 'header.php' ?>

		<!-- Home Banner Container -->
		
		<div class="container-fluid" id="home-banner">
			<div id="home-banner-buttons">
				<button ng-click="toggleEncontreBtn()" class="btn btn-warning"><h4>ENCONTRE SEU IMÓVEL</h4></button>
				<button class="btn btn-info" ng-click="cadastreToggle()"><h4>CADASTRE SEU IMÓVEL</h4></button>
				<a href="#destaque"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
			</div>
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
					<h5 class="blue">FAIXA DE PREÇO</h5>
					<div class="row">
						<div class="preco-input input-group col-xs-6">
						  <input ng-model="precoMin" ng-change="changePrecoMin()" type="number" step="500" class="form-control" aria-describedby="preco-min" min="0">
						  <span class="input-group-addon" id="preco-min">min.</span>
						</div>
						<div class="preco-input input-group col-xs-6">
						  <input ng-model="precoMax" ng-change="changePrecoMax()" type="number" step="500" class="form-control" aria-describedby="preco-max" min="0">
						  <span class="input-group-addon" id="preco-max">máx.</span>
						</div>
					</div>
					<h5 class="blue">ÁREA MÍNIMA</h5>
					<div class="row">
						<div class="input-group col-xs-12">
						  <input type="number" step="10" class="form-control" aria-describedby="area-min">
						  <span class="input-group-addon" id="area-min">m<sup>2</sup></span>
						</div>
						
					</div>

					<h5 class="blue">DORMITÓRIOS</h5>
					
					<div class="btn-toolbar" role="toolbar">
					  <div class="btn-group" role="group">
						<button type="button" class="btn btn-default">1+</button>

						<button type="button" class="btn btn-default">2+</button>

						<button type="button" class="btn btn-default">3+</button>

						<button type="button" class="btn btn-default">4+</button>

						<button type="button" class="btn btn-default">5+</button>
					  </div>
					</div>
					<h5 class="blue">SUÍTES</h5>
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
							<button class="btn btn-warning" style="width: 100%">EXIBIR RESULTADOS</button>
						</div>

						<div class="col-xs-12 col-sm-5 col-md-4  col-lg-4">
							<div class="input-group">
							  <input type="text" class="form-control" aria-describedby="area-min" placeholder="Buscar por referência">
							  <span class="input-group-addon" id="area-min"><a href="">IR</a></span>
							</div>
						</div>
							
					</div>
				</div>
			</div>		
		</div>
		<div style="clear: both; width: 100%; height: 1px;"></div>

		<!-- 	Home Imoveis Container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a name="destaque"></a>
					<h3 class="blue section-title">IMÓVEIS EM DESTAQUE</h3>
				</div>
				<div ng-repeat="imovel in imoveisDestaque track by $index" class="slider-container col-sm-6">
					<div class="slider">
					    <div ng-repeat="foto in imovel.fotos" style="background-image: url({{foto}});"></div>
					</div>  
					<h3>
						<small>{{imovel.tipo}}</small>
						<br>
						{{imovel.bairro}}
					</h3>
					<label for="">{{imovel.finalidade}}</label>
					<p ng-if="imovel.finalidade == 'Venda'" style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_venda | currency:"R$ "}}</p>
					<p ng-if="imovel.finalidade != 'Venda'" style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_locacao | currency:"R$ "}}</p>
				</div>
			</div>
		</div>

<?php include 'footer.php' ?>