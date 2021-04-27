<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Ongoing;

class OngoingController extends Controller
{

    public function ongoing(){
      $port = Ongoing::orderBy('id','desc');
      dd($port);exit;
      return view('portfolios',['port'=>$port]);
   }

     //////////////////////////Ongoing Project Method////////////////////////////////  
   public function ongoingProjects(request $request){
    $this->validate($request, [
      
       'name' => 'required',
       'file'=> 'required'
   
     ]);  
      // return 'validation passed';
      $port = new Ongoing;
      $port->name = $request->input('name');
    
   
   if(Input::hasFile('file')){
       $file = Input::file('file');
       $file->move(public_path(). '/folder/', $file->getClientOriginalName());
       $url = '/folder/'. $file->getClientOriginalName();
       // return $url;
       // exit();
   
           $port->file = $url;
           $port->save();
          
           return redirect('/ongoing/projects')->with('alert', 'Upload went through Successfully');
   }else{
           return redirect('/ongoing/projects')->with('alert', 'Error occured, try again later');
     }
   }



   public function manageOngoing(){
    $projects = Ongoing::orderBy('id','desc')->paginate(10);

    return view('admin.portfolio.manageOngoing',['projects'=> $projects]);
}

public function deleteProjects($id){

    Ongoing::where('id', $id)->delete($id);
    return redirect('/manage/ongoing/projects')->with('message', 'Post deleted duccessfully');
}

 
}
