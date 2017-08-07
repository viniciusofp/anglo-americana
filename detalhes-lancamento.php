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
			<h4>Fase da Obra | {{lancamento.estadodaobra}}</h4>
			<!-- Imovel Data -->
			<h3 class="blue"><span class="fav" ng-click="addFav($event)" data-toggle="tooltip" data-placement="bottom" title="Adicionar / Remover dos favoritos"><small>{{lancamento.cidade}}</small><br><i class="fa fa-star-o" aria-hidden="true"></i></span> {{lancamento.empreendimento}} - {{lancamento.bairro}}</h3>
			
			<!-- <ul class="list-inline">	
				<li><h5 ng-if="lancamento.preco_venda != 0"><strong>Venda: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{lancamento.preco_venda | currency:"R$ "}}</span></h5></li>
				<li ng-if="lancamento.preco_venda != 0 && lancamento.preco_locacao != 0">|</li>
				<li><h5 ng-if="lancamento.preco_locacao != 0"><strong>Locação: </strong><span style="font-family: Helvetica, Arial, sans-serif">{{lancamento.preco_locacao | currency:"R$ "}}</span></h5></li>				
			</ul> -->
			<div class="row">
				<div class="slider-container col-sm-12">  
					<div class="slider">
					    <div ng-repeat="foto in lancamento.fotos" style="background-image: url({{foto}});">
					    	<a href="{{foto}}" data-toggle="lightbox" data-gallery="imovel-gallery"  data-type="image"><div class="foto-trigger"></div></a>
					    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h5 class="blue">DESCRIÇÃO</h5>
					<p>{{lancamento.descricao}}</p>

					<h5 class="blue" ng-if="lancamento.detalhes.length != 0">DETALHES ADICIONAIS</h5>
					<ul class="list-inline detalhes">
						<li ng-repeat='item in lancamento.detalhes'>{{item}}</li>
					</ul>

					<h5 class="blue">TIPOLOGIAS</h5>
					<div>
						<ul ng-repeat="bloco in lancamento.blocos" class="list-inline blocos">
							<li><p><strong>{{bloco.nome}}</strong></p></li>	
							<li class="pull-right"><p class="red"><strong><a href="{{bloco.planta}}" data-toggle="lightbox" data-gallery="planta-gallery" data-width="640" data-type="image" class="planta-trigger">Planta</a></strong></p></li>
							<li class="pull-right"><p><i class="fa fa-map-o red" aria-hidden="true"></i> Área: {{bloco.area}} m<sup>2</sup></p></li>
							<li class="pull-right"><p><i class="fa fa-car red" aria-hidden="true"></i> Vagas: {{bloco.vagas}}</p></li>
							<li class="pull-right"><p><i class="fa fa-bed red" aria-hidden="true"></i> Quartos: {{bloco.dormitorios}}</p></li>
						</ul>
						
					</div>

					<h5><small style="line-height: 1.36em">
(Todas as informações aqui fornecidas, tais como valores, metragem e detalhes dos imóveis são passíveis de alterações sem aviso prévio. Estas devem ser verificadas e confirmadas com o departamento comercial da Anglo Americana.)</small></h5>
				</div>
			</div>		
		</div>

<!-- Sidebar Envie Sua Mensagem -->

		<div id="detalhes-contato" class="col-md-3 col-md-pull-9">	
			<h4 class="red">ENVIE SUA MENSAGEM</h4>
			<p>Ref: {{lancamento.referencia}}</p>
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