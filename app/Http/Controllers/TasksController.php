<?php
namespace App\Http\Controllers;

use App\Task;

class TasksController extends BaseController
{
    public function __construct()
    {
        $this->classe = Task::class;
    }
}
