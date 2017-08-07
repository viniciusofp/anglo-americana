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
			<h3 class="blue"><span class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><i class="fa fa-star-o" aria-hidden="true"></i></span> {{internacional.tipo}} - {{internacional.cidade}} - {{internacional.bairro}}</h3>
			
			<!-- <ul class="list-inline">	
				<li><h5 ng-if="internacional.preco_venda != 0"><strong>Venda: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{internacional.preco_venda | currency:"R$ "}}</span></h5></li>
				<li ng-if="internacional.preco_venda != 0 && internacional.preco_locacao != 0">|</li>
				<li><h5 ng-if="internacional.preco_locacao != 0"><strong>Locação: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{internacional.preco_locacao | currency:"R$ "}}</span></h5></li>				
			</ul> -->
			<div class="row">
				<div class="slider-container col-sm-12">  
					<div class="slider">
					    <div ng-repeat="foto in internacional.fotos" style="background-image: url({{foto}});">
					    	<a href="{{foto}}" data-toggle="lightbox" data-gallery="imovel-gallery"  data-type="image"><div class="foto-trigger"></div></a>
					    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<ul class="list-inline">
						<li><h4><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{internacional.dormitorios}}</h4></li>
						<li><h4><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{internacional.vagas}}</h4></li>
						<li><h4><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{internacional.area}} m<sup>2</sup></h4></li>	
					</ul>
					<h5 class="blue">DESCRIÇÃO</h5>
					<p>{{internacional.descricao}}</p>

					<h5 class="blue" ng-if="internacional.detalhes.length != 0">DETALHES ADICIONAIS</h5>
					<ul class="list-inline detalhes">
						<li ng-repeat='item in internacional.detalhes'>{{item}}</li>
					</ul>
					<h5><small style="line-height: 1.36em">
(Todas as informações aqui fornecidas, tais como valores, metragem e detalhes dos imóveis são passíveis de alterações sem aviso prévio. Estas devem ser verificadas e confirmadas com o departamento comercial da Anglo Americana.)</small></h5>
				</div>
				<div class="col-sm-5">
					<h5 class="blue">DETALHES DO IMÓVEL</h5>
					<dl class="dl-horizontal">
					  <dt>Referência</dt>
					  <dd>{{internacional.referencia}}</dd>
					  <dt>Finalidade</dt>
					  <dd>{{internacional.finalidade}}</dd>
					  <dt>Cidade</dt>
					  <dd>{{internacional.cidade}}</dd>
					  <dt>Bairro</dt>
					  <dd>{{internacional.bairro}}</dd>
					  <dt>Tipo de Imóvel</dt>
					  <dd>{{internacional.tipo}}</dd>
					  <dt ng-if="internacional.preco_venda != 0">Preço Venda</dt>
					  <dd ng-if="internacional.preco_venda != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{internacional.preco_venda | currency:"R$ "}}</span></dd>
					  <dt ng-if="internacional.preco_locacao != 0">Preço Locação</dt>
					  <dd ng-if="internacional.preco_locacao != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{internacional.preco_locacao | currency:"R$ "}}</span></dd>
					  <dt ng-if="internacional.condominio != 0">Condomínio</dt>
					  <dd ng-if="internacional.condominio != 0"><span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">{{internacional.condominio | currency:"R$ "}}</span></dd>				  
					  <dt>Quartos</dt>
					  <dd>{{internacional.dormitorios}}</dd>
					  <dt ng-if="internacional.suites != 0">Suítes</dt>
					  <dd ng-if="internacional.suites != 0">{{internacional.suites}}</dd>
					  <dt ng-if="internacional.preco_vagas != 0">Vagas</dt>
					  <dd ng-if="internacional.preco_vagas != 0">{{internacional.vagas}}</dd>
					  <dt>Área</dt>
					  <dd>{{internacional.area}} m<sup>2</sup></dd>
					</dl>
				</div>
			</div>		
		</div>

<!-- Sidebar Envie Sua Mensagem -->

		<div id="detalhes-contato" class="col-md-3 col-md-pull-9">	
			<h4 class="red">ENVIE SUA MENSAGEM</h4>
			<p>Ref: {{internacional.referencia}}</p>
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
				<img src="images/bubble_map.jpg" class="img-responsive">
			</div>
		</div>
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include 'footer.php' ?>