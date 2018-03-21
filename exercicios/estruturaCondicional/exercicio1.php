<?php

/*Fazer um algoritmo que calcule a media aritimetica das 3 notas de um aluno
 * e mostre, além do valor da média do aluno, uma mensagem de "Aprovado", caso
 * a média seja igual ou superior a 6, ou a mensagem "reprovado", caso
 * contrário.
 **/
  system("clear");
  echo "Digite o nome do Aluno: ";
  $nome = trim(fgets(SDTIN));

  echo "Digite a primeira nota: ";
  $n1 = trim(fgets(STDIN));

  echo "Digite a segunda nota: ";
  $n2 = trim(fgets(SDTIN));

  echo "Digite a terceira nota: ";
  $n3 = trim(fgets(SDTIN));

  $media = ($n1+$n2+$n3)/3;
  echo "\nSua media é $media";

  if($media >= 60)
  {
    echo "\nVocê está aprovado!";
  }
  else echo "\n Você está reprovado!";

?>
