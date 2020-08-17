<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\TaskLevel;
use App\TaskStatus;

class Task extends Model{

    protected $fillable = ['description', 'begin_date', 'end_date', 'level_id', 'user_id', 'status_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function taskLevel()
    {
        return $this->belongsTo(TaskLevel::class, 'level_id');
    }

    public function taskStatus()
    {
        return $this->belongsTo(TaskStatus::class, 'status_id');
    }

}