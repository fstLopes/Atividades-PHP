<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 - Aula 6</title>

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

        <h1 class="titulo">Exercícios - LP3 Aula 6</h1>

        <div class="row g-4">

            <!--Atividade 1-->
            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 1</h3>

                    <form action="Atividade 1.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Peso:</label>
                            <input type="number" step="0.1" class="form-control" name="txtPeso" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Altura:</label>
                            <input type="number" step="0.01" class="form-control" name="txtAltura" required>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </form>

                </div>
            </div>


            <!--Atividade 2-->
            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 2</h3>

                    <form action="Atividade 2.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Tipo de carro:</label>
                            <select class="form-select" name="Tipo" required>
                                <option value="">Selecione uma opção</option>
                                <option value="90">Carro Popular</option>
                                <option value="150">Carro de Luxo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dias:</label>
                            <input type="number" class="form-control" name="Dias" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kms percorridos:</label>
                            <input type="number" step="0.01" class="form-control" name="Kms" required>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </form>

                </div>
            </div>


            <!--Atividade 3-->
            <div class="col-md-4">

                <div class="card shadow p-4">

                    <h3 class="text-primary mb-3">Atividade 3</h3>

                    <form action="Atividade 3.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Horas de atividade:</label>
                            <input type="number" step="0.1" class="form-control" name="Horas" required>
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