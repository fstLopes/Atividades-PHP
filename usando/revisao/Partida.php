<?php

require_once "Jogador.php";
require_once "Inimigo.php";

class Partida
{
    private string $nome;
    private Jogador $jogador;
    private $inimigos = array();
    private int $rodada;

    public function __construct(string $nome, Jogador $jogador)
    {
        $this->nome = $nome;
        $this->jogador = $jogador;
        $this->rodada = 1;
    }

    public function adicionarInimigo(Inimigo $inimigo)
    {
        $this->inimigos[] = $inimigo;
    }

    public function iniciar()
    {
        echo "Você iniciou a partida! " . $this->jogador->getNome() . " vai entrar em batalha!<br>";
        $this->mostrarInimigos();
    }

    public function atacarInimigo(int $indice): void
    {
        // 1. Verificar se o índice informado corresponde a um inimigo existente
        if (!array_key_exists($indice, $this->inimigos)) {
            echo "Inimigo inválido ou não encontrado no índice {$indice}.<br>";
            return;
        }

        // 2. Verificar se o jogador está vivo
        if (!$this->jogador->estaVivo()) {
            echo "O jogador está morto e não pode atacar.<br>";
            return;
        }

        $inimigo = $this->inimigos[$indice];

        // 3. Verificar se o inimigo está vivo
        if (!$inimigo->estaVivo()) {
            echo "O inimigo selecionado já está morto!<br>";
            return;
        }

        // 4. Calcular o dano utilizando atacar() do jogador
        $dano = $this->jogador->atacar();

        // 5. Aplicar o dano utilizando receberDano() do inimigo
        $inimigo->receberDano($dano);

        // 6. Informar o resultado da ação
        echo "Você atacou o inimigo e causou {$dano} de dano!<br>";

        // 7. Caso o inimigo seja derrotado, o jogador recebe 50 de XP
        if (!$inimigo->estaVivo()) {
            echo "O inimigo foi derrotado!<br>";
            $this->jogador->ganharExperiencia(50);
            echo "Você ganhou 50 pontos de experiência!<br>";
        }
    }

    public function atacarComHabilidade(int $indice): void
    {
        if (!isset($this->inimigos[$indice])) {
            echo "Inimigo não encontrado!<br>";
            return;
        }

        if (!$this->jogador->estaVivo()) {
            echo "O jogador está derrotado!<br>";
            return;
        }

        $inimigo = $this->inimigos[$indice];

        if (!$inimigo->estaVivo()) {
            echo "Esse inimigo já está derrotado!<br>";
            return;
        }

        $dano = $this->jogador->usarHabilidade();

        if ($dano > 0) {
            echo "<strong>Habilidade usada contra {$inimigo->getNome()}!</strong><br>";

            $inimigo->receberDano($dano);

            if (!$inimigo->estaVivo()) {
                $this->jogador->ganharExperiencia(50);
            }
        }

        echo "<hr>";
    }

    public function mostrarInimigos()
    {
        foreach ($this->inimigos as $inimigo) {
            $inimigo->mostrarDados();
            echo "<br>";
        }
    }

    public function verificarFim(): bool
    {
        // Verifica se o jogador foi derrotado
        if (!$this->jogador->estaVivo()) {
            echo "Partida encerrada: O jogador foi derrotado!<br>";
            return true;
        }

        // Verifica se ainda existe algum inimigo vivo
        foreach ($this->inimigos as $inimigo) {
            if ($inimigo->estaVivo()) {
                return false;
            }
        }

        echo "Partida encerrada: Todos os inimigos foram derrotados!<br>";
        return true;
    }

    public function relatorio()
    {
        echo "Nome partida: " . $this->nome . "<br>";
        echo "Rodada atual: " . $this->rodada . "<br>";

        echo "<br>--- Dados do Jogador ---<br>";
        $this->jogador->mostrarDados();

        echo "<br>--- Dados dos Inimigos ---<br>";
        echo "Quantidade de inimigos: " . count($this->inimigos) . "<br>";

        $this->mostrarInimigos();

        echo "<br>--- Situação da Partida ---<br>";

        if ($this->verificarFim()) {
            if (!$this->jogador->estaVivo()) {
                echo "Situação: Partida Encerrada (Derrota do Jogador)<br>";
            } else {
                echo "Situação: Partida Encerrada (Vitória! Todos os inimigos foram derrotados)<br>";
            }
        } else {
            echo "Situação: Em andamento<br>";
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getJogador()
    {
        return $this->jogador;
    }

    public function setJogador($jogador)
    {
        $this->jogador = $jogador;
    }

    public function getInimigos()
    {
        return $this->inimigos;
    }

    public function setInimigos($inimigos)
    {
        $this->inimigos = $inimigos;
    }

    public function getRodada()
    {
        return $this->rodada;
    }

    public function setRodada($rodada)
    {
        $this->rodada = $rodada;
    }
}