<?php
require_once 'global.php';

$usuario = new Usuario();
$lista = $usuario->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro de usuário</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../../css/style-parte-admin.css" />
	<link rel="shortcut icon" href="../../img/icons/favicon.ico" type="image/x-icon" />

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">

		<div class="container-fluid">

			<a href="../../index.php">
				<img class="ajusteTamanho" src="../../img/icons/logoSite.png" title="Home">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">

				<ul class="navbar-nav ml-auto">

					<li class="nav-item">
						<a class="nav-link" href="../../carros.php">
							<img class="ajusteTamanho carro" src="../../img/icons/icone-carro.png" title="Carros" />
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="../../contato.php">
							<img class="ajusteTamanho" src="../../img/icons/logoContato.png" title="Contato" />
						</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="ajusteTamanho" src="../../img/icons/logo-opcoes.png">
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="../locacao/form-cadastrar-locacao.php">Locação</a>
							<a class="dropdown-item" href="../cliente/form-cadastrar-cliente.php">Cliente</a>
							<a class="dropdown-item" href="form-cadastrar-usuario.php">Usuário</a>
							<a class="dropdown-item" href="../veiculo/form-cadastrar-veiculo.php">Veiculo</a>
							<a class="dropdown-item" href="../marca/form-cadastrar-marca.php">Marca</a>
							<a class="dropdown-item" href="../menu-admin.php">Menu</a>
							<a class="dropdown-item" href="../logout.php">Sair</a>
						</div>
					</li>

				</ul>

			</div>

		</div>

	</nav>



	<div class="card">

		<div class="card-body">
			<img class="logoCard" src="../../img/icons/logoSite.png">
		</div>

		<div class="card-body">
			<h4 class="card-title">Cadastrar usuário</h4>
			<p class="card-text">Fazer o cadastro de novos usuários</p>
		</div>
		<form action="cadastrar-usuario.php" method="POST">
			<div class="card-body">
				<input type="text" class="form-control" name="txtNome" placeholder="Nome Completo" required />
			</div>

			<div class="card-body">
				<input type="email" class="form-control" name="txtEmail" placeholder="E-mail" required />
			</div>
			<div class="card-body">
				<input type="password" class="form-control" name="txtSenha" placeholder="Senha" required />
			</div>
			<div class="card-body">
				<button type="submit" class="botoes">Cadastrar</button>
			</div>
		</form>
	</div>

	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Usuário Cadastrados</h4>
			<p class="card-text">Visualizar, editar ou apagar usuários.</p>
		</div>
		<div class="card-body">
			<form action="buscar-usuario.php">
				<input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar por um usuário">
			</form>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Login</th>
						<th class="acao">Editar</th>
						<th class="acao">Excluir</th>
					</tr>
				</thead>
				<tbody id="resultado">
					<?php foreach ($lista as $linha) { ?>
						<tr scope="row">
							<td><?php echo $linha['idUsuario'] ?></td>
							<td><?php echo $linha['nomeUsuario'] ?></td>
							<td><?php echo $linha['loginUsuario'] ?></td>
							<td><a href="form-editar-usuario.php?id=<?php echo $linha['idUsuario'] ?>">Editar</a></td>
							<td><a href="excluir-usuario.php?id=<?php echo $linha['idUsuario'] ?>">Excluir</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>


	<footer class="page-footer font-small indigo" id="desceai">
		<div class="container">
			<div class="row text-center d-flex justify-content-center pt-5 mb-3">
				<div class="col-md-2 mb-3">
					<h6 class="text-uppercase font-weight-bold">
						<a class="link" href="../../index.php">
							Home
						</a>
					</h6>
				</div>
				<div class="col-md-2 mb-3">
					<h6 class="text-uppercase font-weight-bold">
						<a class="link" href="../../carros.php">
							Carros
						</a>
					</h6>
				</div>
				<div class="col-md-2 mb-3">
					<h6 class="text-uppercase font-weight-bold">
						<a class="link" href="../../contato.php">
							Contato
						</a>
					</h6>
				</div>

			</div>
			<hr class="rgba-white-light" style="margin: 0 15%;">
			<div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
				<div class="col-md-8 col-12 mt-5">
					<p style="line-height: 1.7rem">
						Os melhores preços e a maior variedade de veículos para aluguel,
						de forma que atenda as suas necessidades! Nós da Cardians nos preocupamos
						com o bem-estar de nossos clientes, e prezamos para que desfrutem
						dos nossos serviços com o mínimo de burocracia e o máximo de comodidade.
						Faça sua reserva!

					</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-center py-3">© 2019 Copyright
			<a class="link" href="../../index.html">
				Cardians
			</a>
		</div>
	</footer>


	<script type="text/javascript" src="../../js/jquery.slim.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/popper.min.js"></script>
	<script type="text/javascript" src="../../js/busca-aproximada-usuario.js"></script>
</body>

</html>