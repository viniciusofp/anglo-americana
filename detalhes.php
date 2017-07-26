<?php include 'header.php' ?>
<enviar-amigo></enviar-amigo>
<!-- Single Imovel -->

<div class="container">
	<div class="row">

<!-- Detalhes do Imovel -->

		<div id="imovel-wrapper" class="col-md-9 col-md-push-3">
			<!-- Menu Interno -->
			<ul id="imovelOptions" class="list-inline">
				<li><a class="red" href="" ng-click="lastLink()"><h5><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</h5></a></li>
				<li><a href="favoritos.php"><h5><i class="fa fa-star" aria-hidden="true"></i> Meus Favoritos</h5></a></li>
				<li><a href="#" data-toggle="modal" data-target="#recomendeModal"><h5><i class="fa fa-share" aria-hidden="true"></i> Enviar a um Amigo</h5></a></li>
				<li><a href="#"><h5><i class="fa fa-print" aria-hidden="true"></i> Imprimir</h5></a></li>
			</ul>

			<!-- Imovel Data -->
			<h3 class="blue"><span class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><i class="fa fa-star-o" aria-hidden="true"></i></span> {{imovel.tipo}} - {{imovel.bairro}}</h4></h3>
			
			<ul class="list-inline">	
				<li><h5 ng-if="imovel.preco_venda != 0"><strong>Venda: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_venda | currency:"R$ "}}</span></h5></li>
				<li ng-if="imovel.preco_venda != 0 && imovel.preco_locacao != 0">|</li>
				<li><h5 ng-if="imovel.preco_locacao != 0"><strong>Locação: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{imovel.preco_locacao | currency:"R$ "}}</span></h5></li>				
			</ul>
			<div class="row">
				<div class="slider-container col-sm-12">  
					<div class="slider">
					    <div ng-repeat="foto in imovel.fotos" style="background-image: url({{foto}});">
					    	<a href="{{foto}}" data-toggle="lightbox" data-gallery="imovel-gallery"  data-type="image"><div class="foto-trigger"></div></a>
					    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<ul class="list-inline">
						<li><h4><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{imovel.dormitorios}}</h4></li>
						<li><h4><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{imovel.vagas}}</h4></li>
						<li><h4><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{imovel.area}} m<sup>2</sup></h4></li>	
					</ul>
					<h5 class="blue">DESCRIÇÃO</h5>
					<p>{{imovel.descricao}}</p>

					<h5 class="blue" ng-if="imovel.detalhes.length != 0">DETALHES ADICIONAIS</h5>
					<ul class="list-inline detalhes">
						<li ng-repeat='item in imovel.detalhes'>{{item}}</li>
					</ul>
				</div>
				<div class="col-sm-5">
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
					  <dt ng-if="imovel.iptu != 0">IPTU</dt>
					  <dd ng-if="imovel.iptu != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{imovel.iptu | currency:"R$ "}}</span></dd>					  
					  <dt>Quartos</dt>
					  <dd>{{imovel.dormitorios}}</dd>
					  <dt ng-if="imovel.suites != 0">Suítes</dt>
					  <dd ng-if="imovel.suites != 0">{{imovel.suites}}</dd>
					  <dt ng-if="imovel.preco_vagas != 0">Vagas</dt>
					  <dd ng-if="imovel.preco_vagas != 0">{{imovel.vagas}}</dd>
					  <dt>Área</dt>
					  <dd>{{imovel.area}} m<sup>2</sup></dd>
					</dl>
				</div>
			</div>		
		</div>

<!-- Sidebar Envie Sua Mensagem -->

		<div id="detalhes-contato" class="col-md-3 col-md-pull-9">	
			<h4 class="red">ENVIE SUA MENSAGEM</h4>
			<p>Ref: {{imovel.referencia}}</p>
			<form>
			  <div class="form-group">
			    <h5 for="exampleInputEmail1" class="blue">NOME COMPLETO</h5>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <h5 for="exampleInputEmail1" class="blue">EMAIL <span class="red">*</span></h5>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <h5 for="exampleInputEmail1" class="blue">TELEFONE <span class="red">*</span></h5>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
			  </div>
			  <div class="form-group">
			    <h5 for="exampleInputEmail1" class="blue">COMENTÁRIO</h5>
			    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Escreva aqui sua mensagem"></textarea>
			  </div>
			  <p class="red"><small>* Campos obrigatórios</small></p>
			  <button type="submit" class="btn btn-warning">ENVIAR MENSAGEM</button>
			</form>
			<div id="bubbleMap">
				<img src="img/bubble_map.jpg" class="img-responsive">
			</div>
		</div>
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include 'footer.php' ?>