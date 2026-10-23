<?php

require_once __DIR__ . '/../config/Database.php';

class Genero
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function listar()
    {

        $stnt = $this->db->query("select * from generos order by nome asc");

        return $stnt->fetchALL();
    }

    public function salvar(string $nome, string $descricao)
        {

            $sql = "insert into generos (nome, descricao) values (:nome, :descricao)";
            $stnt = $this->db->prepare($sql);
            $values = [

                "nome" => $nome,
                "descricao" => $descricao

            ];

            return $stnt->execute($values);
        }

        public function atualizar(string $nome, string $descricao, int $id)
        {

            $sql = "UPDATE generos SET nome = :nome, descricao = :descricao WHERE id = :id";
            $stnt = $this->db->prepare($sql);
            $values = [

                "nome" => $nome,
                "descricao" => $descricao,
                "id" => $id

            ];

            return $stnt->execute($values);
        }

        public function buscarPorId(int $id)
        {

            $sql = "SELECT * FROM generos WHERE id = :id";
            $stnt = $this->db->prepare($sql);

            $values = ["id" => $id];

            $stnt->execute($values);
            return $stnt->fetch();
        }

        public function excluir(int $id)
        {

            $sql = "DELETE FROM generos WHERE id = :id";
            $stnt = $this->db->prepare($sql);

            $values = ["id" => $id];

            return $stnt->execute($values);
        }
    
}
