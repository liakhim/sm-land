<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['id', 'name', 'email'];

    public function employee()
    {
        return $this->belongsToMany(Employee::class, 'employee_project');
    }
}
