<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Slider;

class SliderController extends Controller
{
    //


    ///////////Banner Image//////////////////////////
    public function uploadBannerImage(){

        return view('slider.uploadBannerImage');
      }

      public function banner(Request $request){
                 
        $this->validate($request, [

          'mtitle' => 'required',
          'btitle' => 'required',
          'stitle' => 'required',
          'file' => 'required'
        ]);

           $banner = new Banner();
           $banner->mtitle =  $request->input('mtitle');
           $banner->btitle = $request->input('btitle');
           $banner->stitle = $request->input('stitle');

         
           $banner->save();

           return redirect("uploadBannerImage")->with('response', 'Banner uploaded successfully');

}


}
