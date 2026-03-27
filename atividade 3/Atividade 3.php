<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            background: #f4f6fb;
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="card shadow p-4 text-center">

                    <h3 class="mb-3">Resultado da Atividade</h3>

                    <!--Atividade 3-->

                    <?php

                    $horas = $_POST['Horas'];
                    $pontuacao = 0;
                    $dindin = 0;

                    if ($horas <= 10) {
                        $pontuacao = $horas * 2;
                        $dindin = $pontuacao * 0.05;
                    } else if ($horas > 10 and $horas < 20) {
                        $pontuacao = $horas * 5;
                        $dindin = $pontuacao * 0.05;
                    } else {
                        $pontuacao = $horas * 10;
                        $dindin = $pontuacao * 0.05;
                    }

                    echo '<div class="alert alert-primary">Pontuação: ' . $pontuacao . '</div>';
                    echo '<div class="alert alert-success">Dinheiro ganho: R$ ' . $dindin . '</div>';

                    ?>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>