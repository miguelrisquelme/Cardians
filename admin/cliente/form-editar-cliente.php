<!doctype html>
<html lang="pt-br">

<head>
    <title>Editar cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css">
    <link rel="shortcut icon" href="../../img/icons/favicon.ico" type="image/x-icon" />
</head>
<?php

require_once 'global.php';

try {

    $cliente = new Cliente();
    $cliente = Cliente::pegarCliente($_GET['id']);
} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

?>

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
                            <a class="dropdown-item" href="form-cadastrar-cliente.php">Cliente</a>
                            <a class="dropdown-item" href="../usuario/form-cadastrar-usuario.php">Usuário</a>
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
            <h1 class="card-title">Editar cliente</h1>
            <form name="edicao" method="post" action="editar-cliente.php?id=<?php echo $cliente->getIdCliente(); ?>">

                <input type="text" placeholder="Nome" name="nome" value="<?php echo $cliente->getNomeCliente();           ?>">
                <input type="text" placeholder="CPF" name="cpf" value="<?php echo $cliente->getCpfCliente();            ?>">
                <input type="text" placeholder="CNH" name="cnh" value="<?php echo $cliente->getCnhCliente();            ?>">
                <input type="text" placeholder="CEP" name="cep" value="<?php echo $cliente->getCepCliente();            ?>">
                <input type="text" placeholder="Numero casa" name="numeroCasa" value="<?php echo $cliente->getNumeroCliente();         ?>">
                <input type="text" placeholder="Complemento" name="complemento" value="<?php echo $cliente->getComplementoCliente();    ?>">
                <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $cliente->getBairroCliente();         ?>">
                <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $cliente->getCidadeCliente();         ?>">
                <input type="text" placeholder="Endereço" name="endereco" value="<?php echo $cliente->getEnderecoCliente();       ?>">
                <input type="text" placeholder="UF" name="uf" value="<?php echo $cliente->getUfCliente();             ?>">

                <input type="submit" value="Salvar">
            </form>
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
            <hr class="rgba-white-light">
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>