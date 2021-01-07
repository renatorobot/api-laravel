<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    

    public function index(){

        
        
        return Task::all();


    }


    public function store(Request $request){

        $task = Task::create([
            'name'=> $request->input('name'),
            'complete' =>$request->input('complete')
        ]);

       return $task;

    }

    public function show(Task $task){

        return $task; 

    }


}
