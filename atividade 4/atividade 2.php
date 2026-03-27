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
        }

        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            text-align: center;
        }

        .card-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #198754;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <?php

    $tipo = $_POST['Tipo'];
    $kwh = $_POST['kWh'];

    $precoKwh = 0;

    if ($tipo == 1) {

        if ($kwh <= 500) {

            $precoKwh = $kwh * 0.40;

        } else {

            $precoKwh = $kwh * 0.65;
            
        }

    } elseif ($tipo == 2) {

        if ($kwh <= 1000) {

            $precoKwh = $kwh * 0.55;

        } else {

            $precoKwh = $kwh * 0.60;
            
        }

    } else {


        if ($kwh <= 5000) {

            $precoKwh = $kwh * 0.55;

        } else {

            $precoKwh = $kwh * 0.60;

        }

    }


    ?>

    <div class="card p-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Valor total</h5>
            <p class="card-text"><?php echo $precoKwh . ' R$'; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>