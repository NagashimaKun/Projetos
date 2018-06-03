<?php
require_once './classes/DAO/secretariasDAO.php';
require_once './classes/entidades/secretarias.php';

$secretariasDAO = new secretariasDAO();
$secretarias = new secretarias();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!--CSS-->
        <link rel="stylesheet" href="css/style_painelAdm.css">
        <link rel="stylesheet" href="css/style_cadastroPacientes.css">

        <!--FONTES-->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title> Painel ADM </title>
    </head>
    <body>
        <!--HEADER-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Painel ADM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="painelAdm.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Consultas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cadastrar Consultas</a>
                            <a class="dropdown-item" href="#">Listar Consultas</a>    
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Médicos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"> Cadastrar Médico</a>
                            <a class="dropdown-item" href="#">Cadastrar Pacientes</a>                        
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Medicamentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cadastrar Medicamentos</a>
                            <a class="dropdown-item" href="#">Listar Medicamentos</a>    
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pacientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cadastrar Pacientes</a>
                            <a class="dropdown-item" href="#">Listar Pacientes</a>    
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <form class="formulario" method="post">
            <legend> Cadastro Pacientes </legend>
            <hr>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" name="txt_nome" placeholder="Ex: 123456789-10">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Nascimento</label>
                    <input type="date" class="form-control" id="inputZip" name="txt_dataNasc" placeholder="Ex: 12345-678">
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">CPF</label>
                <input type="text" class="form-control" id="inputAddress" name="txt_cpf" placeholder="Rua, Avenida, etc.">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">endereco</label>
                    <input type="text" class="form-control" id="inputCity" name="txt_endereco" placeholder="Ex: Marília">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">telefone</label>
                    <input type="text" class="form-control" id="inputCity" name="txt_telefone" placeholder="Ex: São Paulo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">cidade</label>
                    <input type="text" class="form-control" id="inputCity" name="txt_cidade" placeholder="Ex: São Paulo">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">estado</label>
                    <input type="text" class="form-control" id="inputZip" name="txt_estado" placeholder="Ex: 12345-678">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Senha</label>
                    <input type="password" class="form-control" id="inputZip" name="txt_senha" placeholder="Ex: 12345-678">
                </div>

            </div>
            <br>
            <input type="submit" button type="button" class="btn btn-success btn-lg" name="btn_cadastrar">Cadastrar</button>
            <button type="button" class="btn btn-success btn-lg">Cancelar</button>

        </form>
        <br><br>
        <!--RODAPÉ-->
        <footer class="rodape">
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
            <p class="copyright">
                Copyright © Nagashima Sistemas.
        </footer> 
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>

<?php
if (isset($_POST['btn_cadastrar'])) {
    $secretarias->setSec_nome($_POST['txt_nome']);
    $secretarias->setSec_cpf($_POST['txt_cpf']);
    $secretarias->setSec_dataNasc($_POST['txt_dataNasc']);
    $secretarias->setSec_endereco($_POST['txt_endereco']);
    $secretarias->setSec_telefone($_POST['txt_telefone']);
    $secretarias->setSec_cidade($_POST['txt_cidade']);
    $secretarias->setSec_estado($_POST['txt_estado']);
    $secretarias->setSec_senha($_POST['txt_senha']);

    if ($secretariasDAO->cadastrar($secretarias)) {
        ?>
        <script type="text/javascript">
            alert("Deu bom!!!");
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Deu ruim!!!");
        </script>
        <?php
    }
}
?>

