<?php

require_once __DIR__ . '/../config/Database.php';
class Produto
{

    private $db;
    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function listar()
    {

        $stnt = $this->db->query("select * from produtos order by id desc");

        return $stnt->fetchALL();
    }

    public function salvar(string $produto, float $valor, int $categoria_id, string $descricao)
    {

        $sql = "insert into produtos (produto, valor, categoria_id, descricao) values (:produto, :valor, :categoria_id, :descricao)";
        $stnt = $this->db->prepare($sql);
        $values = [

            "produto" => $produto,
            "valor" => $valor,
            "categoria_id" => $categoria_id,
            "descricao" => $descricao,
        ];

        return $stnt->execute($values);
    }

    public function atualizar(string $produto, float $valor, int $categoria_id, string $descricao, int $id)
    {

        $sql = "UPDATE produtos SET produto = :produto, valor = :valor, categoria_id = :categoria_id, descricao = :descricao WHERE id = :id";
        $stnt = $this->db->prepare($sql);
        $values = [

            "produto" => $produto,
            "valor" => $valor,
            "categoria_id" => $categoria_id,
            "descricao" => $descricao,
            "id" => $id

        ];

        return $stnt->execute($values);
    }

    public function buscarPorId(int $id)
    {

        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stnt = $this->db->prepare($sql);

        $values = ["id" => $id];

        $stnt->execute($values);
        return $stnt->fetch();
    }

    public function excluir(int $id)
    {

        $sql = "DELETE FROM produtos WHERE id = :id";
        $stnt = $this->db->prepare($sql);

        $values = ["id" => $id];

        return $stnt->execute($values);
    }
}
