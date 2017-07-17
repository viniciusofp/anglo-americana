		<?php include 'header.php' ?>


<!-- 	Busca Imoveis -->

		<div class="container busca">
			<div class="row">
<!-- Sidebar -->
				<div id="fav-sidebar" class="col-sm-4 col-md-3">
					<h4 class="red">ENVIE SUA MENSAGEM</h4>
					<form>
					  <div class="form-group">
					    <h5 for="exampleInputEmail1" class="blue">NOME COMPLETO</h5>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
					  </div>
					  <div class="form-group">
					    <h5 for="exampleInputEmail1" class="blue">EMAIL</h5>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <h5 for="exampleInputEmail1" class="blue">TELEFONE</h5>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
					  </div>
					  <div class="form-group">
					    <h5 for="exampleInputEmail1" class="blue">COMENTÁRIO</h5>
					    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Escreva aqui sua mensagem"></textarea>
					  </div>
					  <p class="red"><small>* Campos obrigatórios</small></p>
					  <button type="submit" class="btn btn-warning">ENVIAR MENSAGEM</button>
					</form>
				</div>
				<div id="imoveis-wrapper" class="col-sm-8 col-md-9 busca fav">
					<h3 class="blue">MEUS FAVORITOS</h3>
					<a class="red" href="" ng-click="lastLink()"><h5><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</h5></a>
					<div class="row">
						<div ng-repeat-start="imovel in imoveisDestaque track by $index" class="slider-container col-sm-12 col-md-6">  
							<div class="fav" ng-click="removeFav($event)" data-toggle="tooltip" data-placement="bottom" title="Remover dos favoritos"><i class="fa fa-star" aria-hidden="true"></i></div>
							
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
						<div ng-repeat-end ng-if="($index + 1) % 2 == 0" class=""></div>
					</div>
				</div>
			</div>
		</div>

<?php include 'footer.php' ?>