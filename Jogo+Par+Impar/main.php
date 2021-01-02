<?php

echo "Sejam Bem vindo ao jogo do Par ou Impar \n";

//Captura o valor do usuario, dentro de uma variavel
$nomeJogador = readline("Qual é o seu nome: \n ");

echo "Olá {$nomeJogador}, você escolhe Par ou Impar?  \n";

do {

$escolhaJogador =(int) readline("Digite 0 para Par ou 1 para Impar: \n ");

} while ($escolhaJogador !== 0 && $escolhaJogador !== 1);

do {

  $maoJogador =(int) readline("Ok! escolha um número entre 0 e 9: \n");

}while($maoJogador > 9 || $maoJogador < 0);

//Sorteador
$maoComputador = rand(0 , 9);

$par = ($maoJogador + $maoComputador) % 2 == 0;

if($escolhaJogador === 0 && $par) {

echo "Parabéns, você ganhou! \n";

}else

{
  echo "hahaha, eu ganheiii \n";
}

echo "escolhar jogador ($maoJogador) \n";

echo "escolhar do computador ($maoComputador) \n";