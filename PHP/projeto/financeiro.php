<?php

$col = "10";
$vet = "0";

function menu(){
  system("clear");
  echo "Esse é um programa para controle financeiro! \n";
  echo "Digite 1 para cadastrar um usuário! \n";
  echo "Digite 2 para logar no sistema! \n";
  echo "Digite 0 para sair: ";
  $menu = trim(fgets(STDIN));
  return $menu;
}

function getPassword(){
  shell_exec('stty -echo');
  $password = trim(fgets(STDIN));
  shell_exec('stty echo');
  return $password;
}

function cadastra($col, $vet, $matriz){
  if($vet < $col)
  {
    $j=0;

    system("clear");
    echo "Digite o seu Nome: ";
    $matriz[$vet][$j] = trim(fgets(STDIN));
    $j++;

    echo "Digite o Email: ";
    $matriz[$vet][$j] = trim(fgets(STDIN));
    $j++;

    echo "Digite o Usuário: ";
    $matriz[$vet][$j] = trim(fgets(STDIN));
    $j++;

    echo "Digite a Senha: ";
    $matriz[$vet][$j] = getPassword();
    echo "\nRepita a Senha: ";
    $valida = getPassword();

    return $matriz;
  }

    

}

do{

  $opcao = menu();

  switch ($opcao) {
    case 1:

      do{
        $matriz = cadastra($col, $vet);
        print_r($matriz);
        echo "Digite 1 para continuar ou 0 para sair: ";
        $vet++;
        $sair = trim(fgets(STDIN));
      }while($sair == 1);
      break;
  
    case 2:

      echo "igual a dois";
      break;

    case 0:

      $sair = 0;
      break;

    default:

      echo "Valor invalido";
  }

  sleep(5);
  
}while($sair == 1);

?>
