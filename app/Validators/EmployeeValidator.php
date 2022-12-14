<?php


namespace App\Validators;

use App\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmployeeValidator implements ValidatorInterface
{

    public static function make_validator($data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['required'],
                'email' => ['email', Rule::unique('employees', 'email')],
                'password' => ['required'],
                'projects' => [function($attr, $value, $fail){
                    foreach ($value as $val) {
                        $project = Project::find($val);
                        if (is_null($project)){
                            $fail('Project '.$val.' not found');
                        }
                    }
                } , 'array'],
            ]);
    }
}
