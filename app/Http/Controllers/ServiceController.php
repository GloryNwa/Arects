<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Service;

class ServiceController extends Controller
{
     
    public function services()
    {
        return view('services');
    }


    
//////////////////////////////////uploadServices//////////////////////////////////////////////


public function uploadServices(){

    return view('admin.services.uploadServices');
}



public function service(Request $request){
             
$this->validate($request, [

  'title' => 'required',
  'desc' => 'required',
  'file' => 'required'

 
]);

   $services = new Service();
   $services->title =  $request->input('title');
   $services->desc = $request->input('desc');


 
   $services->save();

   return redirect("/uploadServices")->with('response', 'Services uploaded successfully');

}


//////////////////////////////////uploadServices//////////////////////////////////////////////






}
