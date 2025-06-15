<?php
namespace lesson_2_4\app;
class BankAccount
{
    public $owner;
    public $balance;
    public $accountNumber;
    public $currency;

    public function __construct($owner, $balance, $accountNumber, $currency)
    {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;

    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function displayAccountInfo()
    {
        print_r($this->owner . "\nAccount Number: " . $this->accountNumber . "\nBalance: " . $this->balance . "\nCurrency: " . $this->currency);
    }
}