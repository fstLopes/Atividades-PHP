<?php

require_once "Jogador.php";
require_once "Inimigo.php";
require_once "Partida.php";

$j1 = new Jogador("Miguel", 1, 100, 100, "Espadachin", 200, 200);

$j1->mostrarDados();
$j1->interagir();
$j1->atacar();
$j1->usarHabilidade();
$j1->mostrarDados();

$enemy = new Inimigo("Goblin", 1, 40, 40, "Assassino", 4);
$enemy1 = new Inimigo("Orc", 1, 100, 100, "Tanque", 8);
$enemy2 = new Inimigo("Dragão", 1, 250, 250, "Voador", 25);

$enemy->interagir();
$enemy->mostrarDados();

$enemy1->interagir();
$enemy1->mostrarDados();

$enemy2->interagir();
$enemy2->mostrarDados();

$partida = new Partida("Dungeon", $j1);
$partida->adicionarInimigo($enemy);
$partida->adicionarInimigo($enemy1);
$partida->adicionarInimigo($enemy2);
$partida->iniciar();
$partida->mostrarInimigos();
$partida->atacarInimigo(0);
$partida->atacarComHabilidade(1);
$enemy->mostrarDados();
$enemy1->mostrarDados();