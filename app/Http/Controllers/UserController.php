<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('User');
    }
    public function create(Request $request){
        $data = $request->input();
        try{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->mobile = $data['mobile'];
            $user->save();
            return redirect('user')->with('status',"User Registered successfully");
        }
        catch(Exception $e){
            return redirect('user')->with('status',"operation failed");
        }
    }
}
