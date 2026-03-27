<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f7fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .alert {
            width: 400px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!--Atividade 1-->

    <?php

    $peso = $_POST['txtPeso'];
    $altura = $_POST['txtAltura'];

    $IMC = $peso / ($altura * $altura);

    if ($IMC < 18.5) { ?>
        <div class="alert alert-primary">
            <?php echo $IMC . ' Abaixo de 18.5: Abaixo do peso.' ?>
        </div>

    <?php } elseif ($IMC >= 18.5 && $IMC < 25) { ?>
        <div class="alert alert-secondary">
            <?php echo $IMC . ' Entre 18.5 e 25: Peso ideal.' ?>
        </div>

    <?php } elseif ($IMC >= 25 && $IMC < 30) { ?>
        <div class="alert alert-success">
            <?php echo $IMC . ' Entre 25 e 30: Sobrepeso.' ?>
        </div>

    <?php } elseif ($IMC >= 30 && $IMC < 40) { ?>
        <div class="alert alert-warning">
            <?php echo $IMC . ' Entre 30 e 40: Obesidade.' ?>
        </div>

    <?php } else { ?>
        <div class="alert alert-danger">
            <?php echo $IMC . ' Acima de 40: Obesidade mórbida.' ?>
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>