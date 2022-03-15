<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					<form action="<?php  echo URL_BASE ."cliente/salvar" ?>" method="POST">
						<label>Nome</label>
							<input name="nome" value="<?php echo $cliente->nome ?>" type="text" placeholder="Insira umm nome">
						<label>CPF</label>
							<input name="cpf" value="<?php echo $cliente->cpf ?>" type="text" placeholder="Insira um cpf">
						<label>Email</label>
							<input name="email" value="<?php echo $cliente->email ?>" type="text" placeholder="Insira seu email">	
						<div class="col">
							<label>Telefone</label>
							<input name="telefone" value="<?php echo $cliente->telefone ?>" type="tel" placeholder="Insira seu telefone">
						</div>	
						<div class="col">
							<label>Endereco</label>
							<input name="endereco" value="<?php echo $cliente->endereco ?>" type="text" placeholder="Insira seu Endereco">
						</div>	
						
						<div class="col">
							<label>CEP</label>
							<input name="cep" value="<?php echo $cliente->cep ?>" type="text" placeholder="Insira seu CEP">
							<input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente ?>">
							<input type="submit" value="Cadastrar" class="btn">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</div>
					</form>
				</div>	
		</div>	