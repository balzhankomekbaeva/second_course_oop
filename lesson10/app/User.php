<?php

namespace lesson10\App;

class User
{
    use Loggable;

    private $username;
    private $email;

    public function register($username, $email)
    {
        $this->username = $username;
        $this->email = $email;

        // Логирование
        $this->log("Пользователь $username успешно зарегистрирован.");
    }

}