<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					<form action="<?php  echo URL_BASE ."cliente/salvar" ?>" method="POST">
						<label>Nome</label>
							<input name="nome" value="<?php echo $cliente->nome ?>" type="text" placeholder="Insira umm nome">
						<label>Email</label>
							<input name="email" value="<?php echo $cliente->email ?>" type="text" placeholder="Insira um email">
						<label>Endereço</label>
							<input name="endereco" value="<?php echo $cliente->endereco ?>" type="text" placeholder="Insira seu endereço">	
						<div class="col">
							<label>Telefone</label>
							<input name="fone" value="<?php echo $cliente->fone ?>" type="text" placeholder="Insira seu telefone">
						</div>	
						<div class="col">
							<label>CEP</label>
							<input name="cep" value="<?php echo $cliente->cep ?>" type="text" placeholder="Insira seu CEP">
						</div>	
						
						<div class="col">
							<label>CPF</label>
							<input name="cpf" value="<?php echo $cliente->cpf ?>" type="text" placeholder="Insira seu CPF">
							
							<a href="<?php echo URL_BASE ."cliente/delete/".$cliente->id_cliente."/S" ?>" class="btn">Excluir</a>
					
				</div>	
		</div>	