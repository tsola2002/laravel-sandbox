<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TaskController extends Controller
{
    //
    public function index(){
       // return 'Hello World from Laravel php!!';
        return View('info')
            ->with('firstname', 'Omatsola')
            ->with('lastname', 'Sobotie')
            ->with('job', 'Developer')
            ->with('age', 15)
            ->with('hobbies', ['Tennis', 'Fishing', 'Running', 'Working']);
    }
}
