<?php

// ============================================================
// 1. CLASSE ABSTRATA
// ============================================================

// "abstract" significa que essa classe serve como modelo.
// Não podemos criar um objeto diretamente de uma classe abstrata.
abstract class Pokemon
{
    // ========================================================
    // 2. ENCAPSULAMENTO
    // ========================================================

    // "private" impede que esses atributos sejam acessados
    // diretamente fora da classe.
    private string $nome;
    private int $nivel;

    // Atributo static pertence à CLASSE, e não a cada objeto.
    // Existe apenas uma cópia dele compartilhada entre os objetos.
    protected static int $quantidade = 0;

    // Construtor
    public function __construct(string $nome, int $nivel)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;

        // Cada vez que um objeto é criado, aumenta a quantidade.
        self::$quantidade++;
    }

    // ========================================================
    // GETTERS E SETTERS
    // ========================================================

    // Getter: permite CONSULTAR um atributo privado.
    public function getNome(): string
    {
        return $this->nome;
    }

    // Setter: permite ALTERAR um atributo privado.
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;
    }

    // ========================================================
    // MÉTODO STATIC
    // ========================================================

    // Como é static, podemos chamar sem criar um objeto:
    // Pokemon::getQuantidade()
    public static function getQuantidade(): int
    {
        return self::$quantidade;
    }

    // ========================================================
    // MÉTODO ABSTRATO
    // ========================================================

    // Toda classe filha será OBRIGADA a implementar este método.
    abstract public function atacar(): string;
}


// ============================================================
// 3. HERANÇA
// ============================================================

// Pikachu HERDA de Pokemon.
// "extends" representa herança.
class Pikachu extends Pokemon
{
    // ========================================================
    // 4. POLIMORFISMO
    // ========================================================

    // Pikachu possui sua própria versão do método atacar().
    public function atacar(): string
    {
        return $this->getNome() . " usou Choque do Trovão!";
    }
}


// Outra classe filha.
class Charizard extends Pokemon
{
    // Charizard também implementa atacar(),
    // mas de uma maneira diferente.
    public function atacar(): string
    {
        return $this->getNome() . " usou Lança-Chamas!";
    }
}


// Outra classe filha.
class Bulbasaur extends Pokemon
{
    public function atacar(): string
    {
        return $this->getNome() . " usou Chicote de Vinha!";
    }
}


// ============================================================
// 5. CRIANDO OBJETOS
// ============================================================

// Aqui estamos criando objetos das classes filhas.

$pikachu = new Pikachu("Pikachu", 25);
$charizard = new Charizard("Charizard", 50);
$bulbasaur = new Bulbasaur("Bulbasaur", 15);


// ============================================================
// 6. VETOR / ARRAY DE OBJETOS
// ============================================================

// Um array pode armazenar vários objetos.

$pokemons = [
    $pikachu,
    $charizard,
    $bulbasaur
];


// Também podemos adicionar outro objeto depois.

$pokemons[] = new Pikachu("Raichu", 35);


// ============================================================
// 7. MANIPULANDO ARRAY DE OBJETOS
// ============================================================

// Percorrendo o array com foreach.

echo "<h2>Lista de Pokémons</h2>";

foreach ($pokemons as $pokemon) {

    // getNome() acessa o atributo privado de forma segura.
    echo "Nome: " . $pokemon->getNome() . "<br>";

    echo "Nível: " . $pokemon->getNivel() . "<br>";

    // Aqui acontece POLIMORFISMO.
    // Todos possuem atacar(), mas cada classe executa
    // uma versão diferente do método.
    echo "Ataque: " . $pokemon->atacar() . "<br>";

    echo "<hr>";
}


// ============================================================
// 8. ALTERANDO UM OBJETO DO ARRAY
// ============================================================

// Alterando o nome do primeiro Pokémon.

$pokemons[0]->setNome("Pikachu Especial");


// Exibindo o novo nome.

echo "Novo nome: " . $pokemons[0]->getNome() . "<br>";


// Alterando o nível.

$pokemons[0]->setNivel(30);

echo "Novo nível: " . $pokemons[0]->getNivel() . "<br>";


// ============================================================
// 9. MANIPULANDO O ARRAY
// ============================================================

// count() retorna a quantidade de elementos do array.

echo "Quantidade no array: " . count($pokemons) . "<br>";


// Podemos remover um elemento usando unset().

unset($pokemons[1]);


// Depois de remover, alguns índices podem ficar "pulados".
// array_values() reorganiza os índices.

$pokemons = array_values($pokemons);


// ============================================================
// 10. STATIC
// ============================================================

// Não precisamos criar um objeto para acessar esse método.

// Usamos:
// NomeDaClasse::metodo()

echo "Quantidade total de Pokémons criados: ";
echo Pokemon::getQuantidade();


// ============================================================
// RESUMO DOS CONCEITOS
// ============================================================

/*

HERANÇA
--------------------------------------------------------------
class Pikachu extends Pokemon

Pikachu recebe características e métodos de Pokemon.


ENCAPSULAMENTO
--------------------------------------------------------------
private string $nome;

O atributo fica protegido dentro da classe.

Para acessar:

$pokemon->getNome();

Para alterar:

$pokemon->setNome("Novo Nome");


POLIMORFISMO
--------------------------------------------------------------
Pikachu, Charizard e Bulbasaur possuem o método atacar(),
mas cada um executa o método de maneira diferente.

$pikachu->atacar();
$charizard->atacar();
$bulbasaur->atacar();


CLASSE ABSTRATA
--------------------------------------------------------------
abstract class Pokemon

Não podemos fazer:

$pokemon = new Pokemon();

A classe serve como modelo para outras classes.


MÉTODO ABSTRATO
--------------------------------------------------------------
abstract public function atacar(): string;

A classe filha é obrigada a implementar esse método.


ARRAY / VETOR DE OBJETOS
--------------------------------------------------------------
$pokemons = [
    $pikachu,
    $charizard,
    $bulbasaur
];

O array guarda vários objetos.


MANIPULAÇÃO DO ARRAY
--------------------------------------------------------------
$pokemons[] = novoObjeto;   // adiciona
$pokemons[0]                // acessa
unset($pokemons[1]);        // remove
count($pokemons);           // quantidade
foreach ($pokemons as $p)   // percorre
array_values($pokemons);    // reorganiza índices


STATIC
--------------------------------------------------------------
protected static int $quantidade = 0;

O atributo pertence à classe.

Para acessar:

Pokemon::getQuantidade();

"::" é usado para acessar membros static.


$this
--------------------------------------------------------------
$this representa o objeto atual.

Exemplo:

$this->nome

Significa o atributo "nome" daquele objeto.


self
--------------------------------------------------------------
self representa a própria classe.

Exemplo:

self::$quantidade

Acessa o atributo static da própria classe.

*/
?>