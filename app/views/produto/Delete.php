<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					
						<label>Nome</label>
							<input name="nome" value="<?php echo $produto->nome ?>" type="text" placeholder="Insira umm nome">
						<label>CPF</label>
							<input name="valor" value="<?php echo $produto->valor ?>" type="numb" placeholder="Insira seu valor">
							<a href="<?php echo URL_BASE ."produto/delete/".$produto->id_produto."/S" ?>" class="btn">Excluir</a>
					
				</div>	
		</div>	