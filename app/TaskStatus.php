<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class TaskStatus extends Model{

    protected $fillable = ['description', 'active'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'status_id');
    }

}