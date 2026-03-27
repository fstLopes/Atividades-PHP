<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<div class="container mt-5">

<?php

if (!isset($_GET['numero']) || $_GET['numero'] === '') {

    echo '<div class="alert alert-info">
            Por favor, digite um número inteiro para gerar a tabuada.
          </div>';

} else {

    $numero = intval($_GET['numero']);

    echo "<h3 class='mb-4'>Tabuada do número $numero</h3>";

    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-hover table-dark'>";
    echo "<thead class='table-dark'>
            <tr>
                <th>Equação</th>
                <th>Resultado</th>
            </tr>
          </thead>
          <tbody>";

    for ($i = 1; $i <= 10; $i++) {

        $resultado = $numero * $i;

        echo "<tr>
                <td>$numero x $i</td>
                <td>$resultado</td>
              </tr>";
    }

    echo "</tbody></table></div>";
}

?>

<a href="index.php" class="btn btn-primary mt-3">Voltar</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>