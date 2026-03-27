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
    $dias = $_POST['Dias'];
    $kms = $_POST['Kms'];

    $precoDias = 0;
    $precoKm = 0;

    if ($tipo == 90) {

        $precoDias = $tipo * $dias;

        if ($kms > 100) {
            $precoKm = $kms * 0.1;
        } else {
            $precoKm = $kms * 0.2;
        }

    } else {

        $precoDias = $tipo * $dias;

        if ($kms > 200) {
            $precoKm = $kms * 0.25;
        } else {
            $precoKm = $kms * 0.3;
        }

    }

    $totalPrice = $precoDias + $precoKm;

    ?>

    <div class="card p-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Valor total</h5>
            <p class="card-text"><?php echo $totalPrice . ' R$'; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>