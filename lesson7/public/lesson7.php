<?php

use lesson7\App\User;

require __DIR__ . '/../../vendor/autoload.php';

$user = new User();
$user->setUsername('bakocore');
$user->setEmail('balzhan@gmail.com');
$user->setPassword('111111');

print_r("Username: " . $user->getUsername() . "\n");
print_r("Email: " . $user->getEmail() . "\n");
print_r("Password: " . $user->getPassword() . "\n");