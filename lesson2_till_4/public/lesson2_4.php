<?php

use lesson_2_4\app\BankAccount;

require '../../vendor/autoload.php';

$account1 = new BankAccount('Balzhan', 10000,'22553366','KZT');
$account2 = new BankAccount('Aizada', 15000,'22668899','USD');

$account1->deposit(500);
$account1->withdraw(1000);
$account2->deposit(500);
$account2->withdraw(150);

echo "First account \n";
$account1->displayAccountInfo();
print_r("\nBalance: {$account1->getBalance()}\n\n" );

echo "Second account \n";
$account2->displayAccountInfo();
print_r("\nBalance: {$account2->getBalance()}\n\n" );
