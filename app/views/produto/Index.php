<div class="base-home">
				<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
				<div class="base-lista">
					<span class="qtde"><b><?php echo count($produto); ?></b> produtos cadastrados</span>
					<div class="tabela">	
						<table width="200%" border="0" cellspacing="0" cellpadding="0">
						  <thead>
							   <tr>
							   	<th width="25%" align="left">ID</th>
								<th width="25%" align="left">Nome</th>
								<th width="10%" align="left">Valor</th>
							
							<th width="20%" colspan="2" align="center">Alterar</th>
							  </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($produtos as $produto) {  ?>
							 <tr class="cor1">
							 	<td><?php echo $produto->id_produto ?></td>
								<td><?php echo $produto->nome ?></td>
								<td><?php echo $produto->valor ?></td>
										
								<td align="center">
									<a href="<?php echo URL_BASE . "produto/edit/" . $produto->id_produto ?>" class="btn">Editar</a>
								</td>
								<td align="center">
									<a href="<?php echo URL_BASE . "produto/delete/" . $produto->id_produto ?>" class="btn excluir">excluir</a>
								</td>
							 </tr>
							<?php } ?>
						</tbody>
						
						</table>

				</div>								
			</div>	
		</div>	