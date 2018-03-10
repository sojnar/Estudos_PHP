<?php
/**
 * Get a password from the shell.
 *
 * This function works on *nix systems only and requires shell_exec and stty.
 *
 * @param  boolean  Wether or not to output stars for given characters
 * @return string
 */
function getPassword($start = false)
{
    // Get current style
     $oldStyle = shell_exec('stty -g');

    if ($start === false) {
        shell_exec('stty -echo');
         $password = rtrim(fgets(STDIN), "\n");
    } else {
        shell_exec('stty -icanon -echo min 1 time 0');

         $password = '';
        while (true) {
             $char = fgetc(STDIN);

            if ( $char === "\n") {
                break;
            } else if (ord($char) === 127) {
                if (strlen($password) > 0) {
                    fwrite(STDOUT, "\x08 \x08");
                     $password = substr($password, 0, -1);
                }
            } else {
                fwrite(STDOUT, "*");
                 $password .= $char;
            }
        }
    }

    // Reset old style
    shell_exec('stty ' . $oldStyle);

    // Return the password
    return $password;
}

// Get the password
fwrite(STDOUT, "Digite seu Password: ");
$password = getPassword(true);

// Output the password
echo "Your password: " . $password . "\n";
