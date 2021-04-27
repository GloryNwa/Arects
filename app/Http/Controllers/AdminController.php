<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Contact;

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
        $contacts = Contact::orderBy('id','desc')->paginate(10);
        $countContact = Contact::count();
        return view('admin.dashboard',['contacts'=> $contacts, 'countContact' => $countContact]);
      }



      public function deletecontact($id){

        Contact::where('id', $id)->delete($id);
        return redirect('/dashboard')->with('message', 'Contact deleted duccessfully');
    }
    
      

////////////////////////////Todo///////////////////////////////////////////////////////
public function addTodo(){
    return view('admim.todo');
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
