<?php

namespace App\Http\Controllers;
use App\User;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Task',["users"=>$users]);
    }
    public function create(Request $request){
        $data = $request->input();
        try{
            $task = new Task;
            $task->name = $data['name'];
            $task->type = $data['type'];
            $task->user_id = $data['userid'];
            $task->save();
            return redirect('task')->with('status',"Task Registered successfully");
        }
        catch(Exception $e){
            return redirect('task')->with('status',"Unable to register task");
        }
    }
}
