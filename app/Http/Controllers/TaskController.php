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
    public function show(){
        $user = User::all();
        return view("showTask",["data"=>$user]);
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

    public function export(Request $request)
    {
       $fileName = 'tasks.csv';
       $tasks = Task::all();
    
            // $headers = array(
            //     "Content-type"        => "text/csv",
            //     "Content-Disposition" => "attachment; filename=$fileName",
            //     "Pragma"              => "no-cache",
            //     "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            //     "Expires"             => "0"
            // );
    
            // $columns = array('id', 'user_id', 'task name', 'task type', 'created date');
    
            // $callback = function(){
            //     $file = fopen('/excelFiles/output', 'w');
            //     fputcsv($file, $columns);
            //     foreach ($tasks as $task) {   
            //         fputcsv($file, array($task->id, $task->user_id,$task->name, $task->type, $task->created_at));
            //     }
    
            //     fclose($file);
            // };
    
            // return response()->stream($callback, 200, $headers);
      
            $filename = "members_" . date('Y-m-d') . ".csv"; 
            $delimiter = ","; 
             
            // Create a file pointer 
            $file = fopen('php://memory', 'w'); 
             
            // Set column headers 
            $fields = array('id', 'user_id','name', 'type', 'created_at'); 
               $callback = function(){
                fputcsv($file, $columns);
                foreach ($tasks as $task) {   
                    fputcsv($file, array($task->id, $task->user_id,$task->name, $task->type, $task->created_at));
                }
    
                fclose($file);
            };
            // header('Content-Disposition: attachment; filename="' . $filename . '";'); 
              $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );
 
      
      return Response::stream($callback,200,$headers);
        }
}


