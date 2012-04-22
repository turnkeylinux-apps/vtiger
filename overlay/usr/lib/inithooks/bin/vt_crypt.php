<?php
// based on code from vtigercrm/modules/Users/Users.php (PHP5.3MD5)
function encrypt_password($username, $password)
{
    $salt = substr($username, 0, 2);
    $salt = '$1$' . str_pad($salt, 9, '0');
    $encrypted_password = crypt($password, $salt);

    return $encrypted_password;
}

if(count($argv)!=3) die("usage: $argv[0] username password\n");

$password = encrypt_password($argv[1], $argv[2]);
print $password;
?>

