<?php

require_once "Personagem.php";

class Jogador extends Personagem{

    private string $classe;
    private int $mana;
    private int $manaMaxima;
    
    public function __construct(
        string $nome,
        int $nivel,
        int $vida,
        int $vidaMaxima,
        string $classe,
        int $mana,
        int $manaMaxima
    )
    {
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);

        $this->classe = $classe;
        $this->mana = $mana;
        $this->manaMaxima = $manaMaxima;
    }

    public function interagir()
    {
        echo "Jogador " . $this->getNome() . " está aguardando a próxima missão.<br>";
    }

    public function mostrarDados()
    {
        parent::mostrarDados();

        echo "Classe: " . $this->getClasse() . "<br>";
        echo "Mana: " . $this->getMana() . "<br>";
        echo "Mana Maxima: " . $this->getManaMaxima() . "<br>";
    }

    public function atacar()
    {
        $dano = $this->getNivel() * 10;

        echo $this->getNome() . " causou " . $dano . " de dano!<br>";

        return $dano;
    }

    public function usarHabilidade()
    {
        if ($this->mana > 30) {
            $dano = $this->getNivel() * 20;

            echo $this->getNome() . " causou " . $dano . " de dano!<br>";

            return $dano;
        } else {
            echo $this->getNome() . " está sem mana suficiente.<br>";

            return 0;
        }
    }

    public function recuperarMana()
    {
        $this->mana = $this->manaMaxima;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function setMana($mana)
    {
        $this->mana = $mana;
    }

    public function getManaMaxima()
    {
        return $this->manaMaxima;
    }

    public function setManaMaxima($manaMaxima)
    {
        $this->manaMaxima = $manaMaxima;
    }
}