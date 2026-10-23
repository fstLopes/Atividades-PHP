<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Livro</h3>
        </div>

        <form action="/lp3_projeto/livros/editar?id=<?= $livros['id'] ?>" method="POST" class="card-form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título do Livro:</label>
                <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($livros['titulo']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="autor">Nome do Autor:</label>
                <input type="text" id="autor" name="autor" value="<?= htmlspecialchars($livros['autor']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" value="<?= htmlspecialchars($livros['isbn']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="ano_publicacao">Ano de Publicação:</label>
                <input type="text" id="ano_publicacao" name="ano_publicacao" value="<?= htmlspecialchars($livros['ano_publicacao']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <input type="text" id="sinopse" name="sinopse" value="<?= htmlspecialchars($livros['sinopse']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="capa">Capa:</label>
                <input type="file" id="capa" name="capa" accept="image/jpeg, image/png, imagem/gif, imagem/webp" value="<?= htmlspecialchars($livros['capa']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="genero_id">Gênero:</label>
                <select name="genero_id" id="genero_id" class="form-select">
                    <option value="">Selecione um gênero</option>
                    <?php foreach ($generos as $genero_id) { ?>
                        <option value="<?= $genero_id['id']?>"> <?= $genero_id['nome'] ?> </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <a href="/lp3_projeto/livros" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>