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
    public function clients() {
        $clients = Client::orderBy('id','desc')->paginate(10);
        return view('clients',['clients'=> $clients]);
    }


    public function uploadClient(){

        return view('Admin.client.uploadClient');
    }
    
    
    
    public function client(request $request){
        $this->validate($request, [
           
            'name' => 'required',
            'file'=> 'required'
        
          ]); 
         
           // return 'validation passed';
          
          
           $client = new Client;
           $client->name = $request->input('name');
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move(public_path(). '/folder/', $file->getClientOriginalName());
            $url = '/folder/'. $file->getClientOriginalName();
            // return $url;
            // exit();
        
                $client->file = $url;
             
                $client->save();
               
                return redirect('/upload/client')->with('response', 'Upload went through Successfully');
        }else{
                return redirect('/upload/client')->with('response', 'Error occured, try it again later');
        }
     }


     public function manageClient(){         
     $clients = Client::orderBy('id','desc')->paginate(10);
        return view('Admin.client.manageClient',['clients'=> $clients]);
    }
    
    public function deleteClient($id){
        Client::where('id', $id)->delete($id);
        return redirect('/manage/clients')->with('message', 'Post deleted duccessfully');
  }
}
