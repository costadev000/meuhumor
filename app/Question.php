<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Moment;

class Question extends Model{

    protected $fillable = ['description', 'mandatory'];


    public function moments()
    {
        return $this->hasMany(Moment::class, 'question_id');
    }
}