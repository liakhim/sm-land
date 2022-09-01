<?php

namespace App\Services;

use App\User;

class RegisterUserService implements ServiceInterface
{
    protected $properties;

    function __construct($properties)
    {
        $this->properties = $properties;
    }

    private function register(){
        $user = User::create($this->properties);
        return $user;
    }

    public function run()
    {
        return $this->register();
    }

}
