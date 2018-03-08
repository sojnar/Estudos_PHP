<?php
// Cadastro de usuários:
// Esse programa esta abto a cadastrar 10 usuário onde cada um 
// irá armazenar as seguintes informações:
// Nome, e-mail, Usuario , Senha
$col = "10";
$vet = "0";

system("clear");
echo "Esse é um programa para controle financeiro!\n";
echo "Digite 1 para cadastrar um usuário ou 0 para sair: ";
$cadastra = trim(fgets(STDIN));
$col = "10";

if("$cadastra" == "1")
{
  do{
      if("$vet" < "$col")
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

        echo "Digite 1 para cadastrar um usuário ou 0 para sair: ";
        $cadastra = trim(fgets(STDIN));
    }else
    {
      $cadastra = "0";
    }
  }while($cadastra == "1");
}

//print_r($array);

for ($i=1;$i<=$vet;$i++)
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

?>


