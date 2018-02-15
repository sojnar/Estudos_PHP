<?php
/*
 *Algoritmo de calculo de media
 *
 **/

system("clear");
echo "\nDigite o nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Digite N1: ";
$n1 = trim(fgets(STDIN));

echo "Digite N2: ";
$n2 = trim(fgets(STDIN));

echo "Digite NT: ";
$nt = trim(fgets(STDIN));

$media = ($n1+$n2+$nt)/3;
echo "Sua nota é $media, você está ";

if($media >= 60)
{
  echo "Aprovado!\n";
} 
else if($media >= 40)
{
  echo "Repescagem!\n";
}
else echo "Reprovado!\n";

?>
