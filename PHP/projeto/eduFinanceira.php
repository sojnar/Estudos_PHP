<?php
// Cadastro de usuários:
// Esse programa esta abto a cadastrar 10 usuário onde cada um 
// irá armazenar as seguintes informações:
// Nome, e-mail, Usuario , Senha

$col = "10";
$vet = "0";

do{

system("clear");
echo "Esse é um programa para controle financeiro! \n";
echo "Digite 1 para cadastrar um usuário! \n";
echo "Digite 2 para logar no sistema! \n";
echo "Digite 0 para sair: ";
$cadastra = trim(fgets(STDIN));

if($cadastra == "1")
{
  do{
      if($vet < $col)
      {
        $vet++;
        echo "$vet \n";
        $j=0;
        
        system("clear");
        echo "Digite o seu Nome: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;
        
        echo "Digite o Email: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;

        echo "Digite o Usuário: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;

        echo "Digite a Senha: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        echo "Repita a Senha: ";
        
        echo "Digite 1 para cadastrar um usuário ou 0 para sair: ";
        $cadastra = trim(fgets(STDIN));
      }else
      {
        $cadastra = "0";
      }
    }while($cadastra == "1");
}

if ($cadastra == 2)
{
    echo "Digite o seu login: ";
    $login = trim(fgets(STDIN));
    
    $i=1;

    do{
        if($array[$i][2] == $login)
        {
          echo "Digite sua senha: ";
          $senha = trim(fgets(STDIN));
          
          if($array[$i][3] == $senha)
          {
            $i=$vet;
            echo "Faça";
            system(pause);
          }else{
            echo "Senha incorreta!";
          }
        }
        $i++;

        if($i > $vet)
        {
          echo "Usuário inesistente!";
        }
    }while($i < $vet);
}


//}

print_r($array);

/*r ($i=1;$i<=$vet;$i++)
{
  echo "################";
  echo "\nCadastro $i:\n";

    for ($j=0;$j<=3;$j++)
    {
      echo "{$array[$i][$j]} \n";
    }
  echo "################\n";
  echo "\n";
}
 */

//  system(clear);
  echo "Digite 1 para efetuar mais uma transação ou 0 para sair: ";
  $sair = trim(fgets(STDIN));
}while($sair == 1);
?>


