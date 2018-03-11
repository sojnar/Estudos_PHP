<?php

function getPassword()
{
  $oldStyle = shell_exec('stty -g');
  
  shell_exec('stty -echo');
  $password = rtrim(fgets(STDIN), "\n");

  shell_exec('stty ' . $oldStyle);
  return $password;
}

echo "Digite seu Password: ";
$password = getPassword();

echo "\nSeu passoword: ". $password . "\n";


?>
