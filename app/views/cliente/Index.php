<div class="base-home">
				<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
				<div class="base-lista">
					<span class="qtde"><b><?php echo count($clientes); ?></b> clientes cadastrados</span>
					<div class="tabela">	
						<table width="200%" border="0" cellspacing="0" cellpadding="0">
						  <thead>
							   <tr>
							   	<th width="25%" align="left">ID</th>
								<th width="25%" align="left">Nome</th>
								<th width="10%" align="left">Cpf</th>
								<th width="10%" align="left">Email</th>
								<th width="10%" align="left">Data_Nascimento</th>
								<th width="25%" align="left">Endereco</th>
								<th width="10%" align="left">Cep</th>
								

							<th width="20%" colspan="2" align="center">Alterar</th>
							  </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($clientes as $cliente) {  ?>
							 <tr class="cor1">
							 	<td><?php echo $cliente->id_cliente ?></td>
								<td><?php echo $cliente->nome ?></td>
								<td><?php echo $cliente->cpf ?></td>
								<td><?php echo $cliente->email ?></td>
								<td><?php echo $cliente->data_nascimento ?></td>
								<td><?php echo $cliente->endereco ?></td>
								<td><?php echo $cliente->cep ?></td>
								
								
								<td align="center">
									<a href="<?php echo URL_BASE . "cliente/edit/" . $cliente->id_cliente ?>" class="btn">Editar</a>
								</td>
								<td align="center">
									<a href="<?php echo URL_BASE . "cliente/delete/" . $cliente->id_cliente ?>" class="btn excluir">excluir</a>
								</td>
							 </tr>
							<?php } ?>
						</tbody>
						
						</table>

				</div>								
			</div>	
		</div>	