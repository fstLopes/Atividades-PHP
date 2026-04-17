<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona de Programação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <form action="questao1.php" method="POST" class="col-6">

                <!-- Nome -->
                <div class="mb-3">
                    <label class="form-label">Nome Completo:</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <!-- Categoria -->
                <div class="mb-3">
                    <label class="form-label">Categoria:</label>
                    <select class="form-select" name="categoria" required>
                        <option value="">Selecione</option>
                        <option value="Iniciante">Iniciante</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                    </select>
                </div>

                <!-- Linguagem -->
                <label class="form-label">Linguagem Principal:</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="linguagem" value="Python" required>
                    <label class="form-check-label">Python</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="linguagem" value="Java">
                    <label class="form-check-label">Java</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="linguagem" value="PHP">
                    <label class="form-check-label">PHP</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="linguagem" value="C++">
                    <label class="form-check-label">C++</label>
                </div>

                <!-- Áreas -->
                <label class="form-label">Áreas de Interesse:</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="areas[]" value="Desenvolvimento Web">
                    <label class="form-check-label">Desenvolvimento Web</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="areas[]" value="Inteligência Artificial">
                    <label class="form-check-label">Inteligência Artificial</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="areas[]" value="Banco de Dados">
                    <label class="form-check-label">Banco de Dados</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="areas[]" value="Segurança da Informação">
                    <label class="form-check-label">Segurança da Informação</label>
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>