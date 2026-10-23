<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Livro</h3>
        </div>

        <form action="/lp3_projeto/livros/adicionar" method="POST" class="card-form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Titulo do Livro:</label>
                <input type="text" id="titulo" name="titulo" required class="form-control" placeholder="Ex: Naruto">
            </div>

            <div class="form-group">
                <label for="autor">Nome do Autor:</label>
                <input type="text" id="autor" name="autor" required class="form-control" placeholder="Ex: Kishimoto">
            </div>

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" required class="form-control"
                    placeholder="Ex: Bola de Futebol">
            </div>

            <div class="form-group">
                <label for="ano_publicacao">Ano de publicação:</label>
                <input type="text" id="ano_publicacao" name="ano_publicacao" required class="form-control"
                    placeholder="Ex: 1992">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <input type="text" id="sinopse" name="sinopse" step="0.01" min="0" required class="form-control"
                    placeholder="Escreva a sinopse">
            </div>

            <div class="form-group">
                <label for="capa">Capa (opcional):</label>
                <input type="file" id="capa" name="capa" accept="image/jpeg, image/png, imagem/gif, imagem/webp"  class="form-control">
            </div>

            <div class="form-group">
                <label for="id_genero">Gênero:</label>
                <select name="id_genero" id="id_genero" class="form-select">
                    <option value="">Selecione um gênero</option>
                    <?php foreach ($generos as $id_genero) { ?>
                        <option value="<?= $id_genero['id'] ?>"> <?= $id_genero['nome'] ?> </option>
                    <?php } ?>
                </select>
            </div>


            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/livros" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>