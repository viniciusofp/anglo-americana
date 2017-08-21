<div id="cadastre-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center blue">CADASTRE SEU IMÓVEL</h2>
				<div id="cadastre-close" ng-click="cadastreToggle()">
					<i class="fa fa-close" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-12">
				<h4 class="red">DADOS DO IMÓVEL</h4>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">PRETENSÃO <span class="red">*</span></h5>
								<div class="input-group" style="width: 100%">
								  <select class="form-control">
								  	<option disabled selected>Selecione</option>
								  	<option>Locação</option>
								  	<option>Venda</option>
								  </select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">FINALIDADE <span class="red">*</span></h5>
								<div class="input-group" style="width: 100%">
								  <select class="form-control">
								  	<option disabled selected>Selecione</option>
								  	<option>Residencial</option>
								  	<option>Comercial</option>
								  	
								  </select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<h5 class="blue">TIPO <span class="red">*</span></h5>
								<div class="input-group" style="width: 100%">
								  <select class="form-control">
								  	<option disabled selected>Selecione</option>
								  	<option>Apartamento</option>
								  	<option>Casa Residencial</option>
								  	<option>Casa Comercial</option>
								  	<option>Conjunto Comercial</option>
								  </select>
								</div>
							</div>
						</div>				
						<h5 class="blue">ENDEREÇO <span class="red">*</span></h5>
						<div class="row">
							<div class="input-group col-xs-12">
							  <input type="text" class="form-control">
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h5 class="blue">NÚMERO <span class="red">*</span></h5>
								<div class="input-group" style="width: 100%">
								  <input type="text" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-8">
								<h5 class="blue">COMPLEMENTO</h5>
								<div class="input-group" style="width: 100%">
								  <input type="text" class="form-control">
								</div>
							</div>
						</div>

						<h5 class="blue">CIDADE <span class="red">*</span></h5>
						<div class="row">
							<div class="input-group col-xs-12">
							  <input type="text" class="form-control">
							</div>
						</div>
						
						<h5 class="blue">BAIRRO <span class="red">*</span></h5>
						<div class="row">
							<div class="input-group col-xs-12">
							  <input type="text" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">ÁREA ÚTIL</h5>
								<div class="row">
									<div class="input-group col-xs-12">
									  <input type="number" step="10" class="form-control" aria-describedby="area-util">
									  <span class="input-group-addon" id="area-util">m<sup>2</sup></span>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">ÁREA TOTAL</h5>
								<div class="row">
									<div class="input-group col-xs-12">
									  <input type="number" step="10" class="form-control" aria-describedby="area-total">
									  <span class="input-group-addon" id="area-total">m<sup>2</sup></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">QUARTOS</h5>
								<div class="input-group" style="width: 100%">
								  <input type="number" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<h5 class="blue">SUÍTES</h5>
								<div class="input-group" style="width: 100%">
								  <input type="number" class="form-control">
								</div>
							</div>
						</div>
						
						<h5 class="blue">VAGAS DE GARAGEM</h5>
						<div class="row">
							<div class="input-group col-xs-12">
							  <input type="number" class="form-control">
							</div>
						</div>

						
						<h5 class="blue">VALOR PRETENDIDO</h5>
						<div class="row">
							<div class="preco-input input-group col-xs-12">
							  <input ng-model="val_pret" step="100" class="form-control" min="0">
							  <span></span>
							</div>
						</div>
						
						<h5 class="blue">VALOR DO CONDOMÍNIO</h5>
						<div class="row">
							<div class="preco-input input-group col-xs-12">
							  <input type="number" step="100" class="form-control" min="0">
							  <span></span>
							</div>
						</div>
						
						<h5 class="blue">VALOR DO IPTU</h5>
						<div class="row">
							<div class="preco-input input-group col-xs-12">
							  <input type="number" step="100" class="form-control" min="0">
							  <span></span>
							</div>
						</div>
						<h5 class="blue">DESCRIÇÃO</h5>
						<div class="row">
							<div class="input-group col-xs-12">
							  <textarea class="form-control"></textarea>
							</div>
						</div>				
					</div>
				</div>
		
			</div>
			<div class="hidden-sm hidden-xs" style="width: 100%; height: 30px; display: block; clear: both"></div>
			<div class="col-md-6">
				<h4 class="red">SEUS DADOS</h4>
				
				<h5 class="blue">NOME COMPLETO <span class="red">*</span></h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<h5 class="blue">ENDEREÇO</h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-8">
						<h5 class="blue">COMPLEMENTO</h5>
						<div class="input-group" style="width: 100%">
						  <input type="text" class="form-control">
						</div>
					</div>
					<div class="col-xs-4">
						<h5 class="blue">NÚMERO</h5>
						<div class="input-group" style="width: 100%">
						  <input type="text" class="form-control">
						</div>
					</div>
				</div>

				<h5 class="blue">CIDADE</h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<h5 class="blue">TELEFONE RESIDENCIAL</h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<h5 class="blue">TELEFONE COMERCIAL</h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<h5 class="blue">CELULAR <span class="red">*</span></h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
				
				<h5 class="blue">EMAIL <span class="red">*</span></h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h4 class="red">INFORMAÇÕES ADICIONAIS</h4>
				
				<h5 class="blue">OBSERVAÇÕES</h5>
				<div class="row">
					<div class="input-group col-xs-12">
					  <textarea class="form-control"></textarea>
					</div>
				</div>

				<h4 class="red">CONTATO</h4>
				<div class="row">
					<div class="col-xs-12">
						<h5 class="blue">COMO DEVEMOS ENTRAR EM CONTATO?</h5>
						<div class="input-group" style="width: 100%">
						  <select class="form-control">
						  	<option disabled selected>Selecione</option>
						  	<option>Telefone</option>
						  	<option>Email</option>
						  </select>
						</div>
					</div>
					<div class="col-xs-12 form-group">
						<h5 class="blue">PERÍODO</h5>
						<div class="input-group" style="width: 100%">
						  <select class="form-control">
						  	<option disabled selected>Selecione</option>
						  	<option>Manhã</option>
						  	<option>Tarde</option>
						  	<option>Noite</option>
						  	<option>Indiferente</option>
						  </select>
						</div>
					</div>
				</div>

				<div class="g-recaptcha form-group" data-sitekey="6LdHOigUAAAAAFQAcuopZohwbaDtawh96-hFlYbo"></div>

				<button class="btn btn-warning">ENVIAR FORMULÁRIO</button>
		  		<p class="red"><br><small>* Campos obrigatórios</small></p>
			</div>
		</div>
	</div>
	<div class="shadow" ng-click="cadastreToggle()"></div>
</div>
	