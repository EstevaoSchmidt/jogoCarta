<?php 

class Carta {

    private $numero;
    private $nome;

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
    public function setNumero($numero): self
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
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

$baralho = array();

$carta = new Carta;
$carta->setNumero(0);
$carta->setNome("Dean");
array_push($baralho, $carta);

$carta2 = new Carta;
$carta2->setNumero(1);
$carta2->setNome("Sam");
array_push($baralho, $carta2);

$carta3 = new Carta;
$carta3->setNumero(2);
$carta3->setNome("Castiel");
array_push($baralho, $carta3);

$carta4 = new Carta;
$carta4->setNumero(3);
$carta4->setNome("Azazel");
array_push($baralho, $carta4);

$carta5 = new Carta;
$carta5->setNumero(4);
$carta5->setNome("Ruby");
array_push($baralho, $carta5);

$carta6 = new Carta;
$carta6->setNumero(5);
$carta6->setNome("Bob");
array_push($baralho, $carta6);

$carta7 = new Carta;
$carta7->setNumero(6);
$carta7->setNome("John");
array_push($baralho, $carta7);

$cartaBaralho = $baralho[array_rand($baralho)];

foreach ($baralho as $b) {

    echo $b;

}

$escolhaUsuario = readline("\n\nEscolha uma carta: ");

do {

    $escolhaUsuario = readline("\nNão é essa carta, informe outra: ");

} while($escolhaUsuario != $cartaBaralho->getNumero);

echo ("\nAcertou a carta.");