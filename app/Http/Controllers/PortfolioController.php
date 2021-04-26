<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Portfolio;

class PortfolioController extends Controller
{
   

    public function portfolio()
    {
        
        return view('portfolio');
    }

    ///////////////////////////////////uploadPortfolio//////////////////////////////////////////////

    public function uploadPortfolio(){

        return view('admin.portfolio.uploadPortfolio');
   }


   
   public function port(request $request){
    $this->validate($request, [
        
        'bigtitle' => 'required',
        'smalltitle' => 'required',
        'desc' => 'required',
        'file'=> 'required'
    
      ]);  
       // return 'validation passed';
       $about = new About;
       $about->bigtitle = $request->input('bigtitle');
       $about->smalltitle = $request->input('smalltitle');
       $about->desc = $request->input('desc');
    
    if(Input::hasFile('file')){
        $file = Input::file('file');
        $file->move(public_path(). '/folder/', $file->getClientOriginalName());
        $url = '/folder/'. $file->getClientOriginalName();
        // return $url;
        // exit();
    
            $about->file = $url;
            $about->save();
            echo('yes');
            return redirect('/uploadPortfolio')->with('response', 'Profile Added Successfully');
    }else{
            return redirect('/uploadPortfolio')->with('response', 'Error occured, try it again later');
    }
    }
}


