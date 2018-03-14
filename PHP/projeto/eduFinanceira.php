<?php
// Cadastro de usuários:
// Esse programa esta abto a cadastrar 10 usuário onde cada um 
// irá armazenar as seguintes informações:
// Nome, e-mail, Usuario , Senha

//Funcao para regitro de senha oculta
function getPassword(){
  shell_exec('stty -echo');
  $password = trim(fgets(STDIN));
  shell_exec('stty echo');
  return $password;
}

//Declarando o tamanho do meu vetor matriz vetor[10][3]
$col = "10";
$vet = "0";

do{

  //Menu do sistema  
  system("clear");
  echo "Esse é um programa para controle financeiro! \n";
  echo "Digite 1 para cadastrar um usuário! \n";
  echo "Digite 2 para logar no sistema! \n";
  echo "Digite 0 para sair: ";
  $cadastra = trim(fgets(STDIN));

  if($cadastra == "1")
  {
    do{
    //Cadastro de usuarios matriz coluna de [1-10] linha de [0-3]   
      if($vet < $col)
      {
        $vet++;
        $j=0;
        
        system("clear");
        echo "Digite o seu Nome: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;
        
        echo "Digite o Email: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;

      /*  do{
          echo "Digite o Usuário: ";
          for($i=1;$i<=$vet;$i++){
            $login = trim(fgets(STDIN));
            if($login == $array[$i][$i]){
              $valida = 0;
            }else{
              $array[$vet][$j] = $login;
              $valida = 1;
            }
          } 
        }while($valida == 0);
       */
        
        echo "Digite o Usuário: ";
        $array[$vet][$j] = trim(fgets(STDIN));
        $j++;

        do{
        /*Validação de senha do usuario, essa validação é precessada na função 
        getPassword */
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

          //Verificação do menu cadastrar 
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
  //Login do usuário no sistema
    system("clear");
    echo "Digite o seu login: ";
    $login = trim(fgets(STDIN));
    
    for($i=1;$i<=$vet;$i++)
    {
    /*O primeiro laco captura a senha digitada no usuario, essa senha é processada
    * na funcao getPassword
    */
      if($array[$i][2] == $login)
        {
          echo "Digite sua senha: ";
          $senha = getPassword();

          //Validação da senha digitada pelo usuário       
          if($array[$i][3] == $senha)
          {
            system("clear");
            echo "Ola! Confira seus dados cadastrais! \n";
            echo "Nome: {$array[$i][0]} \n";
            echo "Email: {$array[$i][1]}\n";
            echo "login: {$array[$i][2]}\n";
            echo "#########################################\n";
            echo "#########################################\n";
            echo "Escolha o tipo da transação: \n";
            //Menu de transação com validação da opção escolhida
            echo "Digite 1 para deposito ou 2 para saque: ";
            $transacao = trim(fgets(STDIN));
            /*Definindo os tamanho da matriz da transação mes[12] dia[31] numero de
            * transações são infinitas
             */

            $mes=12;
            $dia=31;
            $op=2;
            

          }else{
            echo "\nSenha incorreta!";
            sleep(5);
          }
        }else if($i == $vet)
        {
          echo "\nLogin Invalido! ";
          sleep(5);
        }
    }
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


