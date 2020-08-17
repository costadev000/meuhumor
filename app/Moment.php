<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Question;

class Moment extends Model{

    protected $fillable = ['score', 'date', 'qustion_id', 'user_id'];

    public function questions(){
        return $this.belongsTo(Question::class, 'question_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}