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

function getOpera(){
  $op = array(
    '1' => 'Deposito',
    '2' => 'Saque'
  );
  return $op;
}

function getCalendario(){
  $mes = array(
    '1' => 'Jan',
    '2' => 'Fev',
    '3' => 'Mar',
    '4' => 'Abr',
    '5' => 'Mai',
    '6' => 'Jun',
    '7' => 'Jul',
    '8' => 'Ago',
    '9' => 'Set',
    '10' => 'Out',
    '11' => 'Nov',
    '12' => 'Dez'
  );
  return $mes;
}

//Declarando o tamanho do meu vetor matriz vetor[10][3]
$col = "10";
$vet = "0";
$mes = getCalendario();
$op = getOpera();

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
      if($cadastra == "0")
      {
        print_r($array);
      }
    }while($cadastra == "1");
    echo "\n";
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
            echo "\n";
            echo "Escolha o tipo da transação: \n";
        
            //Menu de transação com validação da opção escolhida
            echo "Digite 1 para deposito ou 2 para saque: ";
            $transacao = trim(fgets(STDIN));
            $id=$array[$i][2];

            /*Definindo os tamanho da matriz da transação mes[12] dia[31] numero de
            * transações são infinitas
             */
                if($transacao == 1)
                {
                  do{
                      
                      $transacao; 
                      echo "Digite o dia do deposito: ";
                      $entraDia = trim(fgets(STDIN));
                      echo "Digite o mes: ";
                      $entraMes = trim(fgets(STDIN));
                      echo "Digite o Valor do Deposito: ";
                      $valor = trim(fgets(STDIN));
                      $banco[$id][$op[$transacao]][$entraDia][$mes[$entraMes]][] = $valor;
                      echo "Digite 1 para castrar um deposito ou 0 para sair: ";
                      $sair = trim(fgets(STDIN));
                      if($sair == "0")
                      {
                        print_r($banco);
                      }

                    }while($sair == 1);     
                }

                if($transacao == 2)
                {
                  do{
                      
                      $transacao; 
                      echo "Digite o dia do saque: ";
                      $entraDia = trim(fgets(STDIN));
                      echo "Digite o mes: ";
                      $entraMes = trim(fgets(STDIN));
                      echo "Digite o Valor do saque: ";
                      $valor = trim(fgets(STDIN));
                      $banco[$id][$op[$transacao]][$entraDia][$mes[$entraMes]][] = $valor;
                      echo "Digite 1 para castrar um deposito ou 0 para sair: ";
                      $sair = trim(fgets(STDIN));
                      if($sair == "0")
                      {
                        print_r($banco);
                      }   
                    }while($sair == 1);     
                }

          }else{
            echo "\nSenha incorreta!";
            sleep(5);
          }
        }
    }
  }  
  echo "\n";

//  system(clear);
  echo "Digite 1 para efetuar mais uma transação ou 0 para sair: ";
  $sair = trim(fgets(STDIN));
}while($sair == 1);
//print_r($banco);
?>


