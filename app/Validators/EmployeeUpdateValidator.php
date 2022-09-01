<?php


namespace App\Validators;

use App\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmployeeUpdateValidator implements ValidatorInterface
{

    public static function make_validator($data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'email', 'unique:employees,email,'.$data['id']],
                'password' => ['sometimes', 'required'],
                'projects' => ['sometimes', function($attr, $value, $fail){
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
