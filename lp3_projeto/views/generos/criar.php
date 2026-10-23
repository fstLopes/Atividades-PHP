<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo Gênero</h3>
        </div>

        <form action="/lp3_projeto/generos/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Nome do Gênero:</label>
                <input type="text" id="nome" name="nome" required class="form-control" placeholder="Ex: Terror/Suspense">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" id="nome" name="descricao" required class="form-control" placeholder="Ex: Esta é um gêneros voltada para jogos">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/generos" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
