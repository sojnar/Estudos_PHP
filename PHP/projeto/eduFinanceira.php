<?php
// Cadastro de usuários:
// Esse programa esta abto a cadastrar 10 usuário onde cada um 
// irá armazenar as seguintes informações:
// Nome, e-mail, Usuario , Senha

//Funcao para regitro de senha oculta
function getPassword(){
  $oldStyle = shell_exec('stty -g');
  shell_exec('stty -echo');
  $password = trim(fgets(STDIN));
  shell_exec('stty ' . $oldStyle);
  return $password;
}

//Declarando o tamanho do meu vetor matriz vetor[10][3]
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

        do{
          echo "Digite a Senha: ";
          $array[$vet][$j] = getPassword();
          echo "\nRepita a Senha: ";
          $valida = getPassword();

          if($array[$vet][$j] == $valida){
            $valida = 1;
          }else{
            system("clear");
            echo "Senha incorreta, vamos tentar novamente!\n";
            echo "Nome: ".$array[$vet][0];
            echo "\nE-mail: ".$array[$vet][1];
            echo "\nLogin: ".$array[$vet][2];
            echo "\n";
            $valida = 0;
          }
        }while($valida == 0);
        
        echo "\nDigite 1 para cadastrar um usuário ou 0 para sair: ";
        $cadastra = trim(fgets(STDIN));
      }else
      {
        $cadastra = "0";
      }
    }while($cadastra == "1");
}

if ($cadastra == 2)
{
    system("clear");
    echo "Digite o seu login: ";
    $login = trim(fgets(STDIN));
    
    $i=1;

    do{
        if($array[$i][2] == $login)
        {
          echo "Digite sua senha: ";
          $senha = getPassword();
          
          if($array[$i][3] == $senha)
          {
            echo "$i";
            sleep(10);
            //$i=$vet;
            system("clear");
            echo "Ola! Confira seus dados cadastrais! \n";
            echo "Nome: {$array[$i][0]} \n";
            echo "Email: {$array[$i][1]}\n";
            echo "login: {$array[$i][2]}\n";
            echo "#########################################\n";
            echo "#########################################\n";
            echo "Escolha o tipo da transação: \n";
            echo "Digite 1 para deposito ou 2 para saque: ";
            $transacao = trim(fgets(STDIN));
          
          }else{
            echo "Senha incorreta!";
            sleep(5);
          }
        }else{
          echo "Login Invalido!";
          sleep(5);
        }
        $i++;

        if($i > $vet)
        {
          echo "Usuário inesistente!";
        }
    }while($i <= $vet);
}

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


