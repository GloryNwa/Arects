<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Portfolio;
use App\Ongoing;

class PortfolioController extends Controller
{

    public function portfolios(){
      
      // dd($past);exit;
      $data['ongoing'] = Ongoing::orderBy('id','desc')->paginate(10);
      $past= Portfolio::orderBy('id','desc')->paginate(10);
   
        return view('portfolios',$data,['past'=>$past]);
   }

//    public function ongoing(){
//     $port = Ongoing::orderBy('id','desc')->paginate(10);

//     return view('portfolios',['port' => $port]);
//  }



  
    ///////////////////////////////////uploadPortfolio//////////////////////////////////////////////

    public function uploadPortfolio(){

        return view('admin.portfolio.uploadPortfolio');
   }
  
   //////////////////////////Past Project Method////////////////////////////////  
   public function portfolio(request $request){
     $this->validate($request, [
       
        'descript' => 'required',
        'file'=> 'required'
    
      ]);  
       // return 'validation passed';
       $port = new Portfolio;
       $port->descript = $request->input('descript');
     
    
    if(Input::hasFile('file')){
        $file = Input::file('file');
        $file->move(public_path(). '/folder/', $file->getClientOriginalName());
        $url = '/folder/'. $file->getClientOriginalName();
        // return $url;
        // exit();
    
            $port->file = $url;
            $port->save();
           
            return redirect('/past/projects')->with('response', 'Upload went through Successfully');
    }else{
            return redirect('/past/projects')->with('response', 'Error occured, try again later');
      }
    }


    public function managePortfolio(){

     $portfolio = Portfolio::orderBy('id','desc')->paginate(10);
        return view('admin.portfolio.managePortfolio',['portfolio'=> $portfolio]);
    }

    public function deletePortfolio($id){

        Portfolio::where('id', $id)->delete($id);
        return redirect('/manage/past/projects')->with('message', 'Post deleted duccessfully');
  }
    
}


