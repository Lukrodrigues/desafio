<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
				<div class="base-formulario">	
					<form action="<?php  echo URL_BASE ."produto/salvar" ?>" method="POST">
						<label>Nome</label>
							<input name="nome" value="" type="text" placeholder="Insira um nome">
						<label>Valor</label>
							<input name="valor" value="" type="numb" placeholder="Insira seu Valor">
						<!--	<input type="hidden" name="acao" value="Cadastrar">
							<input type="hidden" name="id" value="">!-->
							<input type="submit" value="Cadastrar" class="btn">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</div>
					</form>
				</div>	
		</div>	