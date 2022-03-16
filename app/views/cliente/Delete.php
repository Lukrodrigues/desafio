<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					
						<label>Nome</label>
							<input name="nome" value="<?php echo $cliente->nome ?>" type="text" placeholder="Insira umm nome">
						<label>CPF</label>
							<input name="cpf" value="<?php echo $cliente->cpf ?>" type="text" placeholder="Insira seu CPF">
						<label>Email</label>
							<input name="email" value="<?php echo $cliente->email ?>" type="text" placeholder="Insira seu email">	
						<div class="col">
							<label>Telefone</label>
							<input name="telefone" value="<?php echo $cliente->telefone ?>" type="tel" placeholder="Insira seu telefone">
						</div>	
						<div class="col">
							<label>ENDEREÇO</label>
							<input name="endereco" value="<?php echo $cliente->endereco ?>" type="text" placeholder="Insira seu endereco">
						</div>	
						
						<div class="col">
							<label>CPF</label>
							<input name="cpf" value="<?php echo $cliente->cpf ?>" type="text" placeholder="Insira seu CPF">
							
							<a href="<?php echo URL_BASE ."cliente/delete/".$cliente->id_cliente."/S" ?>" class="btn">Excluir</a>
					
				</div>	
		</div>	