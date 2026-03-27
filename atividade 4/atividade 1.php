<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
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

    <?php

    $nota = $_POST['Nota'];
    $nota2 = $_POST['Nota2'];
    $nota3 = $_POST['Nota3'];
    $freq = $_POST['Freq'];
    $media = ($nota + $nota2 + $nota3) / 3;

    if ($freq < 75.0) { ?>
        <div class="alert alert-warning">
            <?php echo 'Reprovado por falta de frequência.'; ?>
        </div>

    <?php } elseif ($freq > 75 and $media >= 7) { ?>
        <div class="alert alert-success">
            <?php echo 'Parabens, você foi aprovado'; ?>
        </div>

    <?php } elseif ($freq > 75 and $media > 4 and $media < 6.9) { ?>
        <div class="alert alert-secondary">
            <?php echo 'Estude para a recuperação.'; ?>
        </div>

    <?php } else { ?>
        <div class="alert alert-warning">
        <?php echo 'Você está reprovado.';
    } ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>