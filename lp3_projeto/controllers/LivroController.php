<?php

class LivroController
{

    private $model;
    private $generoModel;

    public function __construct()
    {
        $this->model = new Livro();
        $this->generoModel = new Genero();
    }

    public function index()
    {

        $livros = $this->model->listar();
        require_once __DIR__ . '/../views/livros/index.php';
    }

    public function adicionar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
            $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
            $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_SPECIAL_CHARS);
            $ano_publicacao = filter_input(INPUT_POST, 'ano_publicacao', FILTER_SANITIZE_SPECIAL_CHARS);
            $sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_VALIDATE_FLOAT);
            $capa = filter_input(INPUT_POST, 'capa', FILTER_VALIDATE_INT);
            $id_genero = filter_input(INPUT_POST, 'id_genero', FILTER_VALIDATE_INT);

            if ($titulo && $autor && $isbn && $ano_publicacao && $sinopse && $id_genero) {

                $capa = $this->processarImagem($_FILES['imagem'] ?? null);

                $this->model->salvar($titulo, $autor, $isbn, $ano_publicacao, $sinopse, $capa, $id_genero);

                header('Location: /lp3_projeto/livros');
                exit;
            }
        }
        $categorias = $this->generoModel->listar();
        require_once __DIR__ . '/../views/livros/criar.php';
    }

    public function editar()
    {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {

            header('Location: /lp3_projeto/livros');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
            $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
            $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_SPECIAL_CHARS);
            $ano_publicacao = filter_input(INPUT_POST, 'ano_publicacao', FILTER_SANITIZE_SPECIAL_CHARS);
            $sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_VALIDATE_FLOAT);
            $capa = filter_input(INPUT_POST, 'capa', FILTER_VALIDATE_INT);
            $id_genero = filter_input(INPUT_POST, 'id_genero', FILTER_VALIDATE_INT);

            if ($titulo && $autor && $isbn && $ano_publicacao && $sinopse && $id_genero) {

                $this->model->atualizar($titulo, $autor, $isbn, $ano_publicacao, $sinopse, $capa, $id_genero, $id);

                header('Location: /lp3_projeto/livros');
                exit;
            }
        }

        $livros = $this->model->buscarPorId($id);

        if (!$livros) {
            header('Location: /lp3_projeto/livros');
            exit;
        }

        $categorias = $this->generoModel->listar();
        require_once __DIR__ . '/../views/livros/editar.php';
    }

    public function excluir()
    {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {

            $this->model->excluir($id);
        }

        header('Location: /lp3_projeto/livros');
        exit;
    }

    private function processarImagem($arquivo, ?string $imagemAtual = null): ?string {
        // Verifica se o arquivo foi enviado
        if (!isset($arquivo) || empty($arquivo['name'])) {
            return $imagemAtual;
        }

        // Confere se não houve erro no upload
        if ($arquivo['error'] !== UPLOAD_ERR_OK) {
            return $imagemAtual;
        }

        // Permite apenas imagens válidas
        $permitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!in_array($arquivo['type'], $permitidos, true)) {
            return $imagemAtual;
        }

        // Cria a pasta de upload, se necessário
        $diretorio = __DIR__ . '/../uploads/filmes';
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }

        // Gera nome único para a imagem
        $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        $nomeArquivo = time() . '_' . uniqid() . '.' . strtolower($extensao);
        $destino = $diretorio . '/' . $nomeArquivo;

        // Move a imagem para a pasta e remove a antiga, se existir
        if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
            if ($imagemAtual && file_exists($diretorio . '/' . $imagemAtual)) {
                unlink($diretorio . '/' . $imagemAtual);
            }
            return $nomeArquivo;
        }

        // Se falhar, mantém a imagem atual
        return $imagemAtual;
    }
}
