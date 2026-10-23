<?php

require_once __DIR__ . '/../config/Database.php';
class Livro
{

    private $db;
    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function listar()
    {

        $stnt = $this->db->query("select * from livros order by id desc");

        return $stnt->fetchALL();
    }

    public function salvar(string $titulo, string $autor, int $isbn, int $ano_publicacao, string $sinopse, string $capa, int $id_genero)
    {

        $sql = "insert into livros (titulo, autor, isbn, ano_publicacao, sinopse, capa, id_genero) values (:titulo, :autor, :isbn, :ano_publicacao, :sinopse, :capa, :id_genero)";
        $stnt = $this->db->prepare($sql);
        $values = [

            "titulo" => $titulo,
            "autor" => $autor,
            "isbn" => $isbn,
            "ano_publicacao" => $ano_publicacao,
            "sinopse" => $sinopse,
            "capa" => $capa,
            "id_genero" => $id_genero,
        ];

        return $stnt->execute($values);
    }

    public function atualizar(string $titulo, string $autor, string $isbn, int $ano_publicacao, string $sinopse, string $capa, int $id_genero, int $id)
    {

        $sql = "UPDATE livros SET titulo = :titulo, autor = :autor, isbn = :isbn, ano_publicacao = :ano_publicacao, sinopse = :sinopse, capa = :capa, id_genero = :id_genero,  WHERE id = :id";
        $stnt = $this->db->prepare($sql);
        $values = [

            "titulo" => $titulo,
            "autor" => $autor,
            "isbn" => $isbn,
            "ano_publicacao" => $ano_publicacao,
            "sinopse" => $sinopse,
            "capa" => $capa,
            "id_genero" => $id_genero,
            "id" => $id

        ];

        return $stnt->execute($values);
    }

    public function buscarPorId(int $id)
    {

        $sql = "SELECT * FROM livros WHERE id = :id";
        $stnt = $this->db->prepare($sql);

        $values = ["id" => $id];

        $stnt->execute($values);
        return $stnt->fetch();
    }

    public function excluir(int $id)
    {

        $sql = "DELETE FROM livros WHERE id = :id";
        $stnt = $this->db->prepare($sql);

        $values = ["id" => $id];

        return $stnt->execute($values);
    }
}
