<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];
$linguagem = $_POST['linguagem'];

$areasSelecionadas = [];

if (isset($_POST['areas'])) {
    foreach ($_POST['areas'] as $area) {
        $areasSelecionadas[] = $area;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <div class="card text-center">

        <div class="card-header">
            Inscrição Confirmada!
        </div>

        <div class="card-body">

            <h5 class="card-title">Bem-vindo à Maratona 🚀</h5>

            <p>Nome:
                <span class="badge bg-primary">
                    <?php echo $nome; ?>
                </span>
            </p>

            <p>Email:
                <span class="badge bg-primary">
                    <?php echo $email; ?>
                </span>
            </p>

            <p>Categoria:
                <span class="badge bg-success">
                    <?php echo $categoria; ?>
                </span>
            </p>

            <p>Linguagem:
                <span class="badge bg-warning text-dark">
                    <?php echo $linguagem; ?>
                </span>
            </p>

            <p>Áreas de Interesse:</p>

            <ul class="list-group">
                <?php
                if (!empty($areasSelecionadas)) {
                    foreach ($areasSelecionadas as $area) {
                        echo "<li class='list-group-item'>$area</li>";
                    }
                } else {
                    echo "<li class='list-group-item'>Nenhuma área selecionada</li>";
                }
                ?>
            </ul>

        </div>
    </div>
</div>
</body>
</html>