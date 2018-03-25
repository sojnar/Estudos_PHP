<?php

$matriz = array();
$vet = "1";

function menu(){
  system("clear");
  echo "Esse é um programa para controle financeiro! \n";
  echo "Digite 1 para cadastrar um usuário! \n";
  echo "Digite 2 para logar no sistema! \n";
  echo "Digite 0 para sair! \n";
  echo "Entre com a opção: ";
  $menu = trim(fgets(STDIN));
  
  return $menu;
}

function getPassword(){
  shell_exec('stty -echo');
  $password = trim(fgets(STDIN));
  shell_exec('stty echo');
  
  return $password;
}

function getLogin($matriz, $vet, $j){
  if($vet == 1)
  {
    echo "Digite seu login: ";
    $login = trim(fgets(STDIN));
  }else{
    echo "Digite seu login: ";
    $login = trim(fgets(STDIN));
    $result = sizeof($matriz);
    $i=1;

    do{
      if($login == $matriz[$i][j])
      {
        system("clear");
        echo "Esse login ja existe! \n";
        echo "Digite seu login: ";
        $login = trim(fgets(STDIN));
        $i = 0;
      }
      $i++;
    }while($i < $result);
  }
  
  return $login;
}

function getVerPassword(){
  do{
    echo "Digite sua senha: ";
    $passwd = getPassword();
    echo "\nRepita sua senha: ";
    $passwd2 = getPassword();

    if($passwd != $passwd2)
    {
      system("clear");
      echo "Senha incorreta!\n";
      $sair = 0;
    }else{
      $var = $passwd;
      $sair = 1;
    }
  }while($sair == 0);
  
  return $var;
}

function cadastra($col, $vet, $matriz){
    $j=0;

    system("clear");
    echo "Digite o seu Nome: ";
    $matriz[$vet][$j] = trim(fgets(STDIN));
    $j++;

    echo "Digite o Email: ";
    $matriz[$vet][$j] = trim(fgets(STDIN));
    $j++;

    $matriz[$vet][$j] = getLogin($matriz, $vet, $j);
    $j++;

    $matriz[$vet][$j] = getVerPassword();

    return $matriz;
}

function getOpera(){
  $op = array(
    '1' => 'Deposito',
    '2' => 'Saque'
  );
  return $op;
}

do{

  $opcao = menu();

  switch ($opcao) {
    case 1:

      do{
        $matriz = cadastra($col, $vet, $matriz);
        echo "\n";
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
