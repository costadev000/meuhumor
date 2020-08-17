<?php
namespace App\Http\Controllers;

use App\Moment;

class MomentsController extends BaseController
{
    public function __construct()
    {
        $this->classe = Moment::class;
    }
    
}
