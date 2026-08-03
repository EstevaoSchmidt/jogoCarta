<?php 

class Carta {

    /*Atributos*/

    private $numero;
    private $nome;

    /*Metódos*/

    public function __toString()
    {
        $dados = "\nNome da Carta: " . $this->nome;
        $dados .= "\nNúmero da Carta: " . $this->numero . "\n";
        return $dados;

    }    

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

/*Objetos*/ 

$baralho = array();

$carta = new Carta;
$carta->setNumero(1);
$carta->setNome("Dean");
array_push($baralho, $carta);

$carta2 = new Carta;
$carta2->setNumero(2);
$carta2->setNome("Sam");
array_push($baralho, $carta2);

$carta3 = new Carta;
$carta3->setNumero(3);
$carta3->setNome("Castiel");
array_push($baralho, $carta3);

$carta4 = new Carta;
$carta4->setNumero(4);
$carta4->setNome("Azazel");
array_push($baralho, $carta4);

$carta5 = new Carta;
$carta5->setNumero(5);
$carta5->setNome("Ruby");
array_push($baralho, $carta5);

$carta6 = new Carta;
$carta6->setNumero(6);
$carta6->setNome("Bob");
array_push($baralho, $carta6);

$carta7 = new Carta;
$carta7->setNumero(7);
$carta7->setNome("John");
array_push($baralho, $carta7);

/*programa principal*/

$cartaBaralho = $baralho[array_rand($baralho)];
$escolhaUsuario = 0;
$pontos = 6;
$opcao = 0;

/* Menu */

do {

    echo "\n***Jogo-Da-Adivinhação***\n";

    foreach ($baralho as $b) {

        echo $b;

    }

    echo "\n(1)Fazer uma Tentativa";
    echo "\n(0)Desistir\n\n";
    $opcao = readLine("\nInforme a Opção: ");

    switch($opcao) {

        case 1: 
            $escolhaUsuario = readline("\n\nInforme a carta: ");
            break;
        case 0:
            echo "\n\nVocê Perdeu.";
            break;
        default :
            break;

    }

    /* Usei o if para fazer meu programa parar caso o usuario acerte o palpite */

    if($cartaBaralho->getNumero() == $escolhaUsuario) {

        $opcao = 0;

    } else {
        
        echo "\nFaça outra tentativa\n";
        $pontos +=  -1;

    }

} while($opcao != 0);

/* Mensagem Final */

if($cartaBaralho->getNumero() == $escolhaUsuario) {

        echo "\nVocê acertou!" . "\nA carta era:\n\n" . $baralho[$escolhaUsuario] . "\n\nVocê pontuou " . $pontos . "pontos.";

    }

