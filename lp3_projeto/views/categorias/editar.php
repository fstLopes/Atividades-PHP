<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Categoria</h3>
        </div>

        <form action="/lp3_projeto/usuarios/editar?id=<?= $dado['id'] ?>" method="POST" class="card-form">
            <div class="form-group">
                <label for="categoria">Nome Categoria:</label>
                <input type="text" id="categoria" name="categoria" value="<?= htmlspecialchars($dado['categorias']) ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Descrição:</label>
                <textarea name="descricao" id="descricao" required class="form-control" <?= htmlspecialchars($dado['categorias']) ?>></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <a href="/lp3_projeto/usuarios" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>