<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					<form action="<?php  echo URL_BASE ."cliente/salvar" ?>" method="POST">
						<label>Nome</label>
							<input name="nome" value="" type="text" placeholder="Insira um nome">
						<label>CPF</label>
							<input name="cpf" value="" type="text" placeholder="Insira seu CPF">
						<label>Email</label>
							<input name="email" value="" type="text" placeholder="Insira um email">	
						<div class="col">
							<label>Telefone</label>
							<input name="telefone" value="" type="tel" placeholder="Insira seu telefone">		
						<label>Endereço</label>
							<input name="endereco" value="" type="text" placeholder="Insira seu endereço">
						</div>	
						<div class="col">
							<label>CEP</label>
							<input name="cep" value="" type="text" placeholder="Insira seu CEP">
						</div>	
						
						<div class="col">
							<input type="hidden" name="acao" value="Cadastrar">
							<input type="hidden" name="id" value="">
							<input type="submit" value="Cadastrar" class="btn">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</div>
					</form>
				</div>	
		</div>	