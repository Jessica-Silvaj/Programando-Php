<?php

//Mostra algo na tela
echo " Sejam Bem Vindos ao Jogo da Cara ou Coroa! \n\n";

//Captura o valor do usuario, dentro de uma variavel
$nomeJogador = readline("Qual é o seu nome: \n ");

//concatenação
echo "Olá {$nomeJogador}, você escolhe Cara ou Coroa:  \n";

//Captura o valor do usuario, dentro de uma variavel do tipo inteiro dentro do "do, while"

do {

$escolhaJogador =(int) readline("Digite 0 para Cara ou 1 para Coroa: \n ");

} while ($escolhaJogador !== 0 && $escolhaJogador !== 1);

//Sorteador
$sorteio = rand(0,1);

if($sorteio === $escolhaJogador){

  echo "Parabéns, você ganhou!";
}else

{
  echo "hahaha, eu ganheiii";
}
