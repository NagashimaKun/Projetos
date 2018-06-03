<?php
    session_start();
    require_once './classes/DAO/medicosDAO.php';
    require_once './classes/DAO/administradoresDAO.php';
    
    $medicosDAO = new medicosDAO();
    
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
        <link rel="stylesheet" href="css/style.css">

        <!--FONTES-->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title> Login Administrador</title>
    </head>
    <body>
        <!--HEADER-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> CLINIC SYS </a>
        </nav>

        <!--FORMULARIO DE LOGIN-->

        <div class="login">
            <form method="post">
                <p class="conecte">ENTRAR</p>
                <input class="login-email" name="txt_cpf" type="text" placeholder="Usuário" autocomplete="off"/><br>
                <input class="login-senha" name="txt_senha" type="password" placeholder="Senha" autocomplete="off"/><br><br>
                <input class="btn-login" name="btn_login" type="submit" value="Entrar"/><br><br>

            </form>
        </div>
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
    if(isset($_POST['btn_login'])) {
        if($medicosDAO->login($_POST['txt_cpf'], $_POST['txt_senha'])) {
            
            $_SESSION['med_nome'] = $medicosDAO->retornarDados($_POST['txt_cpf']);
            ?>
            <script>
                alert("Bem-Vindo DR:  "+
                    <?php echo $_POST['txt_cpf']?>);
                document.location.href = "painel_medicos.php";
            </script>
            <?php

        }
        else {
            ?>
            <script>
                alert("DADOS INCORRETOS");
            </script>
            <?php

        }
    }

