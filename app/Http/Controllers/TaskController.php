<?php

namespace App\Http\Controllers;
use App\User;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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

    public function export()
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv"
        );
        $tasks = Task::all();
        $columns = array('id', 'userid', 'name', 'type', 'Created');
    
        $callback = function() use ($tasks, $columns)
        {
            $file = fopen('/excelFiles/output.csv', 'w');
            fputcsv($file, $columns);
    
            foreach($tasks as $task) {
                fputcsv($file, array($task->id, $task->user_id, $task->name, $task->type, $task->created_at));          }
            
                fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }
}
