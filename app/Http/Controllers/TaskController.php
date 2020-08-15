<?php

namespace App\Http\Controllers;
use App\User;
use App\Task;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use App\TaskExport;

class TaskController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        $status = $request->input('status');
        return view('Task',["users"=>$users,"status"=>$status]);
    }
    public function show(){
        $tasks = Task::all();
        return view("showTask",["data"=>$tasks]);
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
    public function exportExcel()
    {
      return Excel::download(new TaskExport, 'tasklist.xlsx');
    }

    public function exportCSV()
    {
      return Excel::download(new TaskExport, 'tasklist.csv');
    }
  
}


