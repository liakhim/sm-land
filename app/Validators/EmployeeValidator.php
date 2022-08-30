<?php


namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class EmployeeValidator implements ValidatorInterface
{

    public static function make_validator($data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required']
            ]);
    }
}
