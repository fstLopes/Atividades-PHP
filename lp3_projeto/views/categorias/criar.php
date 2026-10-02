<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Nova Categoria</h3>
        </div>

        <form action="/lp3_projeto/usuarios/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Nome Categoria:</label>
                <input type="text" id="nome" name="nome" required class="form-control" placeholder="Ex: Viagens">
            </div>

            <div class="form-group">
                <label for="email">Descrição:</label>
                <textarea name="descricao" id="descricao" required class="form-control" placeholder="Ex: Esta é uma categoria sobre viagens."></textarea>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/usuarios" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>