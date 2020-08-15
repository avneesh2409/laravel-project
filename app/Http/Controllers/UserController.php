<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\UserExport;
use Redirect;

class UserController extends Controller
{
    public function index(){
        return view('User');
    }
    public function show(){
        $user = User::all();
        return view("showUser",["data"=>$user]);
    }
    public function create(Request $request){
        $data = $request->input();
        try{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->mobile = $data['mobile'];
            $user->save();
            // return redirect('user')->with('status',);
            Redirect::to('user');
        }
        catch(Exception $e){
            return redirect('user')->with('status',"operation failed");
        }
    }
    public function exportExcel()
    {
      return Excel::download(new UserExport, 'userlist.xlsx');
    }

    public function exportCSV()
    {
      return Excel::download(new UserExport, 'userlist.csv');
    }
}
