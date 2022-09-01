<?php

namespace App\Services;

use App\Employee;
use App\Project;

class CreateEmployeeService implements ServiceInterface
{
    private $params;
    /**
     * @var mixed|null
     */
    private $id;

    public function __construct($params, $id = null){
        $this->params = $params;
        $this->id = $id;
    }

    public function createEmployee () {
        $employee = Employee::create($this->params);
        if ($this->params['projects']) {
            foreach ($this->params['projects'] as $project_id) {
                $project = Project::find($project_id);
                $employee->projects()->attach($project);
            }
        }
        return $employee;
    }

    public function updateEmployee () {
        $employee = Employee::find($this->id);
        $employee->update($this->params);
        return $employee;
    }

    public function run ()
    {
        // some code
    }
}
