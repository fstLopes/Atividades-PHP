<?php

abstract class Personagem
{

    private string $nome;
    private int $nivel;
    private int $exp = 0;
    private int $vida;
    private int $vidaMaxima;

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->vidaMaxima = $vidaMaxima;
    }

    public function mostrarDados()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Nivel: " . $this->getNivel() . "<br>";
        echo "Exp: " . $this->getExp() . "<br>";
        echo "Vida: " . $this->getVida() . "<br>";
        echo "Vida Maxima: " . $this->getVidaMaxima() . "<br>";
    }

    public abstract function interagir();

    public function receberDano(int $dano)
    {
        $this->vida -= $dano;
        echo "Você recebeu " . $dano . " de dano, sua vida atual é de " . $this->vida . " pontos de HP <br>";
        if ($this->vida <= 0) {
            echo "O seu personagem foi derrotado";
        }
    }

    public function estaVivo(): bool
    {
        return $this->vida > 0;
    }

    public function ganharExperiencia(int $exp)
    {
        $this->exp += $exp;
        if ($this->exp >= 100) {
            $this->nivel++;
            $this->exp -= 100;
            $this->vidaMaxima += 20;
            $this->vida = $this->vidaMaxima;
            echo $this->nome . " subiu de nível! Sua vida foi restaurada e você ganhou mais 20 pontos de vida máxima. Faltam " . (100 - $this->exp) . " pontos para o próximo nível.<br>";
        } else {
            echo $this->nome . " ganhou " . $exp . " pontos de experiência! Faltam " . (100 - $this->exp) . " pontos para o próximo nível.<br>";
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }

    public function getVidaMaxima()
    {
        return $this->vidaMaxima;
    }

    public function setVidaMaxima($vidaMaxima)
    {
        $this->vidaMaxima = $vidaMaxima;
    }

    public function getExp()
    {
        return $this->exp;
    }

    public function setExp($exp)
    {
        $this->exp = $exp;
    }
}
