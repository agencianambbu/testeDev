<!DOCTYPE html>
<html lang="pt-br">
<?php
    $json = file_get_contents("array.json");
    $data = json_decode($json);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Nambbu Desenvolvimento</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .texto{
            font-size: 12px;
        }
    </style>

</head>
<body> 

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Teste</h1>
            <p class="lead">A aplicação dessa prova serve para medir o conhecimento básico em html, css e js para o programa estágio Nambbu.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="texto">O teste consiste em alimentar a tabela com as informações disponibilizadas pelo arquivo <strong>array.json</strong> na raiz desse projeto. Se atentar pois nem todas informações serão incluídas na tabela, apenas alguns dados pontuais. Em cada <u>row</u> da tabela o botão de <u>detalhes</u> deve realizar a ação do <strong>click</strong> mostrando um alert, com os dados alimentados idem da tabela.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Data</th>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $dados) : ?>
                            <tr>
                                <th scope="row"><?php echo $dados->nome?></th>
                                <td><?php echo $dados->data_nasc?></td>
                                <td><?php echo $dados->cpf?></td>
                                <td><?php echo $dados->rg?></td>
                                <td><?php echo $dados->email?></td>
                                <td><?php echo $dados->celular?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="alert()">Detalhes</button>
                                </td>
                            </tr>
                        <?php  endforeach;?>
                    </tbody>
                </table>                
            </div>
        </div>
    </div>


    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>