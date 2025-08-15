<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\contact;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();
        return view('admin.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
    //    dd($request->all());
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('message', 'Invalid Username or Password');
        }
    }


    public function updateProfile(Request $request)
    {

        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $user = User::find(auth()->id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('message', 'your profile has been updated');
    }

    public function updatePassword(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'cpass' => 'required|min:8',
            'npass' => 'required|min:8',

        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }


        $pass = User::find(auth()->id());

        if (!Hash::check($request->cpass, $pass->password)) {
            return redirect()->back()->withErrors(['cpass' => 'Your current password is incorrect'])->withInput();
        }

        $pass->password = $request->npass;
        $pass->save();
        return redirect()->back()->with('message','your password has been updated successfully');
    }


     public function forgetPass(){
        return view('admin.forgetPass');
    }

    public function email(){
        return view('admin.emailPass');
    }

    public function emailProcess(Request $request){
        $validate = Validator::make($request->all(),[   
             'email'=>'required|email'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $user = User::where('email',$request->email)->first();

        if($user){
            session(['email'=>$request->email]);
            return redirect()->route('forget.pass');
        }else{
            return redirect()->back()->withErrors(['email'=>'Invalid email']);
        }
    }

    public function passwordProcess(Request $request){

        // dd($request->all());
           $validate = Validator::make($request->all(),[   
             'npass'=>'required|min:8',
             'cpass'=>'required|min:8|same:npass',
         ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        
        $email = session('email');
        $user = User::where('email',$email)->first();

        if($user){
            $user->password = $request->npass;
             session()->forget('email'); 
               return redirect()->route('login')->with('pass', 'Password updated successfully');
        } 
    }

    /**
     * 
     * Store a newly created resource in storage.
     */
   public function contact(Request $request)
{
    $validate = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10'
    ]);

    if ($validate->fails()) {
        return response()->json([
            'errors' => $validate->errors()
        ], 422);
    }

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'messageContent' => $request->message
    ];
    Mail::to('javedbaloch0091@gmail.com')->send(new contact($data));

    return response()->json([
        'message' => 'Message sent successfully!'
    ]);
}

   
 public function testimonial(){

    $data = Testimonial::get();
    return view('admin.testimonials',compact('data'));
 }

 public function addtestimonial(){
     return view('admin.addtestimonial');
 }


 public function createTestimonial(Request $request){

       $validate = Validator::make($request->all(), [
            'name'      => 'required',
            'comment'      => 'required|max:200',
            'profession'      => 'required',

        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $project = new Testimonial();

        $project->client_name = $request->name;
        $project->desc = $request->comment;
        $project->profession = $request->profession;

        $project->save();
        return redirect()->route('testimonial')->with('toast', 'testimonial added successfully');
 }


 public function deleteTestimonial($id){

     $data = Testimonial::find($id);
     $data->delete();

     return redirect()->back()->with('message','data deleted successfully');
 }
}


