<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Client;

class ClientController extends Controller
{
    public function clients()
    {
        return view('clients');
    }


    public function uploadClient(){

        return view('Admin.client.uploadClient');
    }
    
    
    
    public function client(Request $request){
                 
    $this->validate($request, [
    
      'name' => 'required',
      'file' => 'required'
    
     
    ]);
    
       $services = new Service();
       $client->name =  $request->input('name');
       $client->file =  $request->input('file');
    
    
       $client->save();
    
       return redirect("uploadClient")->with('response', 'Services uploaded successfully');
    
    }
}
