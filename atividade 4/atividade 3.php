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
            margin: 10px;
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
    $valorCompra = $_POST['Compra'];
    $precoFinal = 0;

    if ($tipo == 1) {

        if ($valorCompra > 500) {

            $precoFinal = $valorCompra - ($valorCompra * 0.05);
        } else {

            $precoFinal = $valorCompra;
        }
    } elseif ($tipo == 2) {

        $precoFinal = $valorCompra - ($valorCompra * 0.1);

        if ($valorCompra > 1000) {
    ?>
            <div class="card p-4" style="width: 10rem; background-color: aqua;">
                <div class="card-body">
                    <h5 class="card-title">Frete Grátis</h5>
                </div>
            </div>
    <?php
        }
    } elseif ($tipo == 3) {

        ?>
        <div class="card p-4" style="width: 10rem; background-color: aqua;">
                <div class="card-body">
                    <h5 class="card-title">Frete Grátis</h5>
                </div>
            </div>
        <?php

        $precoFinal = $valorCompra - ($valorCompra * 0.15);

    }

    ?>

    <div class="card p-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Valor total</h5>
            <p class="card-text"><?php echo 'Preço final com desconto (caso haja): ' . $precoFinal . 'R$.<br> Preço inicial: ' . $valorCompra . 'R$.' ; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>