<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class TaskLevel extends Model{

    protected $fillable = ['level_name', 'score'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'level_id');
    }
}