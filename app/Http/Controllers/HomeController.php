<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

   
  
    

    
   
///////////////// Contact Us Method//////////////////////////

    public function contactus()
    {
        return view('contactus');
    }

    
    public function contact(Request $request){
                 
        $this->validate($request, [

          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'message' => 'required'
        ]);

           $contact = new Contact();
           $contact->name =  $request->input('name');
           $contact->email = $request->input('email');
           $contact->phone = $request->input('phone');
           $contact->message = $request->input('message');
           $contact->save();

           return redirect("/contact/arects")->with('response', 'Thank you for contacting us, we will get back to you shortly');

}

public function about()
{
    return view('about');
}

///////////About Image//////////////////////////
public function uploadAbout(){

return view('admin.about.uploadAbout');
}



public function aboutpage(request $request){
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
        return redirect('/uploadAbout')->with('response', 'Profile Added Successfully');
}else{
        return redirect('/uploadAbout')->with('response', 'Error occured, try it again later');
}
}


///////////////////////////Our Mision / Vision//////////////////////////////////////
   public function missionVision()
{
    return view('missionVision');
}


}
