<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        return view('admin.dashboard');
      }

      

////////////////////////////Todo///////////////////////////////////////////////////////
public function addTodo(){
    return view('admi.todo');
}

public function manageTodo(){
    return view('admin.manageTodo');
}

 
 
//////////////////////////////Logout Method//////////////////////////////////////
public function logout(){
    Auth::logout();
    session()->flush();
 return redirect("/login");

   }
   
}
