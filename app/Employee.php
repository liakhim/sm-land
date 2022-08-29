<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['id', 'name', 'email'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
