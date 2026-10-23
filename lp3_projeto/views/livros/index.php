<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Livros Cadastrados</h3>
            <a href="/lp3_projeto/livros/adicionar" class="btn btn-success btn-sm">+ Novo Livro</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título do Livro</th>
                    <th>Nome do Autor</th>
                    <th>ISBN</th>
                    <th>Ano de Publicação</th>
                    <th>Sinopse</th>
                    <th>Capa</th>
                    <th>Gênero</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($livros)): ?>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?= $livro['id'] ?></td>
                            <td><?= htmlspecialchars($livro['titulo']) ?></td>
                            <td><?= htmlspecialchars($livro['autor']) ?></td>
                            <td><?= htmlspecialchars($livro['isbn']) ?></td>
                            <td><?= htmlspecialchars($livro['ano_publicacao']) ?></td>
                            <td><?= htmlspecialchars($livro['sinopse']) ?></td>
                            <td>
                                <?php
                                if (!empty($[''])):
                                ?>
                            </td>
                            <td><?= htmlspecialchars($livro['id_genero']) ?></td>
                            <td class="text-center">
                                <a href="/lp3_projeto/livros/editar?id=<?= $livro['id'] ?>"
                                    class="btn btn-warning btn-sm">Editar</a>

                                <a href="/lp3_projeto/livros/excluir?id=<?= $livro['id'] ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este filme?');">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" style="text-align: center;">Nenhum livro cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>