<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 - Aula 7 - Atividade</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .titulo {
            text-align: center;
            margin: 40px 0;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .btn {
            margin-right: 5px;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1 class="titulo">Exercícios - LP3 Aula 7</h1>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 1</h3>

                    <form action="atividade 1.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nota 1:</label>
                            <input type="number" step="0.1" class="form-control" name="Nota" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nota 2:</label>
                            <input type="number" step="0.1" class="form-control" name="Nota2" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nota 3:</label>
                            <input type="number" step="0.1" class="form-control" name="Nota3" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Frequência:</label>
                            <input type="number" step="0.01" class="form-control" name="Freq" required>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </form>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 2</h3>

                    <form action="Atividade 2.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Tipo de instalação:</label>
                            <select class="form-select" name="Tipo" required>
                                <option value="">Selecione uma opção</option>
                                <option value="1">Residencial</option>
                                <option value="2">Comercial</option>
                                <option value="3">Industrial</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantidade de kWh consumidos no mês:</label>
                            <input type="number" step="0.01" class="form-control" name="kWh" required>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </form>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 3</h3>

                    <form action="atividade 3.php" method="POST">

                    <div class="mb-3">
                            <label class="form-label">Tipo de Cliente:</label>
                            <select class="form-select" name="Tipo" required>
                                <option value="">Selecione uma opção</option>
                                <option value="1">Cliente Comum</option>
                                <option value="2">Cliente VIP</option>
                                <option value="3">Cliente Premium</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total da compra:</label>
                            <input type="number" step="0.1" class="form-control" name="Compra" required>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>