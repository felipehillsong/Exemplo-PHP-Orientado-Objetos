<?php
include('classePai.php');
//usando o Get e o Set
$usuario1  = new Usuario();
$usuario1->setNome("Felipe Lindo<br>");
$usuario1->setCpf("54165456<br>");
$usuario1->setEndereco('Rua Jardim de Ala, Nº207 <br><br>');

echo $usuario1->getNome();
echo $usuario1->getCpf();
echo $usuario1->getEndereco();
//usuando o construtor, ja instancia o objeto direto
$usuario2 = new Usuario("Felipe Lindo", "654654654", "Rua Jose Sanguinete, N° 137, Aptoº 34");
echo($usuario2->getNome())."<br>";
echo($usuario2->getCpf())."<br>";
echo($usuario2->getEndereco())."<br>";
?>