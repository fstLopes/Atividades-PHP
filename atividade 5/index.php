<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<div class="container py-5">

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card shadow h-100 bg-secondary text-light">

                <img src="https://viagem.cnnbrasil.com.br/wp-content/uploads/sites/5/2022/05/origem-do-hambuguer-cnn4.jpg?w=1200&h=900&crop=1"
                     class="card-img-top" alt="Lanche">

                <div class="card-body">
                    <h4 class="card-title">Pedido de Lanche</h4>
                    <p class="card-text">Lanche base: R$20,00</p>

                    <form action="atividade1.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nome do Cliente</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary" name="nomeCliente" required>
                        </div>

                        <h6>Adicionais:</h6>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="bacon">
                            <label class="form-check-label">Bacon (R$ 3,00)</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="cheddar">
                            <label class="form-check-label">Cheddar (R$ 2,50)</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="cebola">
                            <label class="form-check-label">Cebola (R$ 2,00)</label>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="extraHamburguer">
                            <label class="form-check-label">Hambúrguer Extra (R$ 5,00)</label>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success w-100">Enviar</button>
                            <button type="reset" class="btn btn-warning w-100">Limpar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow h-100 bg-secondary text-light">

                <div class="card-body">
                    <h4 class="card-title">Gerador de Tabuada</h4>
                    <p class="card-text">Digite um número de 1 a 50</p>

                    <form action="atividade2.php" method="GET">

                        <div class="mb-3">
                            <label class="form-label">Número</label>
                            <input type="number" class="form-control bg-dark text-light border-secondary" name="numero" min="1" max="50" required>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100">Gerar</button>
                            <button type="reset" class="btn btn-dark w-100">Limpar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>