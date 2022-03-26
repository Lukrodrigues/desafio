<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					<form action="<?php  echo URL_BASE ."produto/salvar" ?>" method="POST">
						<label>Nome</label>
							<input name="nome" value="<?php echo $produto->nome ?>" type="text" placeholder="Insira umm nome">
						<label>Valor</label>
							<input name="valor" value="<?php echo $produto->valor ?>" type="numb" placeholder="Insira um valor">
							<input type="hidden" name="id_produto" value="<?php echo $produto->id_produto ?>">
							<input type="submit" value="Cadastrar" class="btn">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</div>
					</form>
				</div>	
		</div>	