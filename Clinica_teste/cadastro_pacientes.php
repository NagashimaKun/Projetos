<?php
require_once './classes/DAO/pacientesDAO.php';
require_once './classes/entidades/pacientes.php';

$pacientesDAO = new pacientesDAO();
$pacientes = new pacientes();

/*if ($_SESSION['logado'] != 1) {
   ?>
    <script type="text/javascript">
        document.location.href = "index.php?erro=1";
    </script>
    <?php
}*/
?>
<html>
    <head>
        <title>ADM Dashboard</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet">
    </head>
    <body>
    <body>
        <!--MENU-->
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Clinica Sys</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="?action=sair">Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Médicos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lista_pacientes.php">
                                    <span data-feather="shopping-cart"></span>
                                    Pacientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Consultas
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="layers"></span>
                                    Meus Dados
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <br>
                    <!--CONTAINER-->
                    <h2>Cadastro de Pacientes</h2>

                    <form class="formulario" method="post">
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputEmail4">Nome Completo</label>
                                <input type="text" class="form-control" id="inputEmail4" name="txt_nome" placeholder="Nome Completo">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Data de Nascimento</label>
                                <input type="date" class="form-control" id="inputZip" name="txt_dataNasc">
                            </div>
                          
                            <div class="form-group col-md-4">
                                <label for="inputAddress">CPF</label>
                                <input type="text" class="form-control" id="inputAddress" name="txt_cpf" placeholder="EX: 111111111-11">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Sexo</label>
                                <input type="text" class="form-control" id="inputAddress" name="txt_sexo" placeholder="EX: Masculino, Feminino">
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState">Telefone</label>
                                <input type="text" class="form-control" id="inputCity" name="txt_telefone" placeholder="Ex: 121234-1234">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Endereco</label>
                                <input type="text" class="form-control" id="inputCity" name="txt_endereco" placeholder="Ex: Rua: xxxxxxxxxx xxxxxxx N 11">
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState">Cidade</label>
                                <input type="text" class="form-control" id="inputCity" name="txt_cidade" placeholder="Ex: Marília">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Estado</label>
                                <input type="text" class="form-control" id="inputZip" name="txt_estado">
                            </div>
                            
                        </div>
                        <br>
                        <input type="submit" type="button" class="btn btn-success btn-lg" name="btn_cadastrar" value="Cadastrar"></button>
                        <button type="button" class="btn btn-success btn-lg">Cancelar</button>
                    </form> 
            </div>
        </main>
    </div>
</div>
</div>

 <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>

<?php
if (isset($_POST['btn_cadastrar'])) {
    $pacientes->setPac_nome($_POST['txt_nome']);
    $pacientes->setPac_cpf($_POST['txt_cpf']);
    $pacientes->setPac_sexo($_POST['txt_sexo']);
    $pacientes->setPac_endereco($_POST['txt_endereco']);
    $pacientes->setPac_telefone($_POST['txt_telefone']);
    $pacientes->setPac_cidade($_POST['txt_cidade']);
    $pacientes->setPac_estado($_POST['txt_estado']);
    $pacientes->setPac_dataNasc($_POST['txt_dataNasc']);

    if ($pacientesDAO->cadastrar($pacientes)) {
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
