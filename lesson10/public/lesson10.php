<?php

use lesson10\App\User;

require __DIR__ . '/../../vendor/autoload.php';

$user = new User();
$user->register('bakocore', 'balzhan@gmail.com');
