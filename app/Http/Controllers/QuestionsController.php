<?php
namespace App\Http\Controllers;

use App\Question;

class QuestionsController extends BaseController
{
    public function __construct()
    {
        $this->classe = Question::class;
    }
}
