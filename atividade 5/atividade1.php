<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<div class="container mt-5">

    <?php

    $precos = [
        "bacon" => 3.00,
        "cheddar" => 2.50,
        "cebola" => 2.00,
        "extraHamburguer" => 5.00
    ];

    $lancheBase = 20.00;

    $nomeCliente = $_POST['nomeCliente'];

    $adicionaisSelecionados = $_POST['adicionais'] ?? [];

    $totalAdicionais = 0;
    for ($i = 0; $i < count($adicionaisSelecionados); $i++) {
        $item = $adicionaisSelecionados[$i];
        if (isset($precos[$item])) {
            $totalAdicionais += $precos[$item];
        }
    }

    $totalPedido = $lancheBase + $totalAdicionais;

    echo "<h3 class='mb-4'>Resumo do Pedido</h3>"

    ?>

    <ol class="list-group list-group-numbered">

        <li class="list-group-item bg-primary text-light d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Total do Pedido</div>
                <?php echo 'R$ ' . number_format($totalPedido, 2, ',', '.') ?>
            </div>
        </li>

        <li class="list-group-item bg-secondary text-light d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Nome do Cliente</div>
                <?php echo $nomeCliente ?>
            </div>
        </li>

        <li class="list-group-item bg-secondary text-light d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Hambúrguer Base</div>
                1x R$20,00
            </div>
        </li>

        <li class="list-group-item bg-secondary text-light d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Adicionais</div>
                <?php echo 'R$ ' . number_format($totalAdicionais, 2, ',', '.') ?>
            </div>
        </li>

    </ol>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>