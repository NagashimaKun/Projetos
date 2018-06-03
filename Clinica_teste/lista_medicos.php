<?php
    /*if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "index.php?erro=1";
    </script>
    <?php
    }*/
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Doctor Dashboard</title>

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
                    <a class="nav-link" href="#">Sair</a>
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
                                <a class="nav-link" href="lista_medicos.php">
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
                    <h2>Lista de Médicos</h2>

                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr class="table2">
                                        <th>CRM</th>
                                        <th>Nome</th>
                                        <th>Especialidade</th>
                                        <th>CPF</th>
                                        <th>Endereco</th>
                                        <th>Telefone</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Cadastro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once './classes/DAO/conexao.php';
                                    $conexao = new conexao();
                                    $pdo = $conexao->Conectar();
                                    $consulta = $pdo->query("SELECT * FROM medicos ORDER BY 'med_nome'");
                                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr>";
                                        echo "<td>" . $linha['med_crm'] . "</td>";
                                        echo "<td>" . $linha['med_nome'] . "</td>";
                                        echo "<td>" . $linha['med_especialidade'] . "</td>";
                                        echo "<td>" . $linha['med_cpf'] . "</td>";
                                        echo "<td>" . $linha['med_endereco'] . "</td>";
                                        echo "<td>" . $linha['med_telefone'] . "</td>";
                                        echo "<td>" . $linha['med_cidade'] . "</td>";
                                        echo "<td>" . $linha['med_estado'] . "</td>";
                                        echo "<td>" . $linha['med_data'] . "  " . $linha['med_hora'] . "</td>";
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
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