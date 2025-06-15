<?php

namespace lesson7\App;
class User
{
    private $username;
    private $email;
    private $password;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username){
        if (is_string($username) && !empty(trim($username))) {
            $this->username = $username;
        }
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        if (is_string($password) && strlen($password) >= 6) {
            $this->password = $password;
        }
    }
}