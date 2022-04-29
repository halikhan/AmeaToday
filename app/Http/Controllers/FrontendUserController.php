<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;



class FrontendUserController extends Controller
{

    public function loginPage(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return view('Frontend.login-page',get_defined_vars())->with($notification);
    }
    public function signUp(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        return view('Frontend.signup',get_defined_vars());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('here');
        // dd($request->all());
        session()->put('email', $request->email);
        session()->put('name', $request->name);
        session()->put('type', $request->type);
        // session()->put('email', $request->email);

        $this->validate($request, [
            'name' => "required|max:255",
            'last_name' => "required|max:255",
            'type' => "required|",
            'email' => 'required|email|unique:users',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',

        ]);
        // dd('here');
        $cms = new User();
        $cms->name = $request->name;
        $cms->last_name = $request->last_name;
        $cms->email = $request->email;
        $cms->type = $request->type;
        $cms->password = Hash::make($request->password);
        $cms->save();
        $token = sha1(uniqid(time(), true));
        $emailToSend = $request->email;
        Mail::send('Mail.SignUp_mail', ['data' => route('login-page', ['token' => $token])], function ($messages) use ($emailToSend) {
            $messages->to($emailToSend);
            $messages->subject('Sign Up Successfully');
        });
        $notification = array('message' =>'You have login, Successfully..! ' , 'alert-type'=>'success' );
        return redirect()->route('login-page')->with($notification);

    }



    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',

        ]);
        // dd('here');
        $email = $request->email;
        $password = $request->password;

        
        if($request->type == 1){
            return redirect()->route('login-page');
        }

        if(Auth::attempt([
            'email' => $email,
            'password' => $password,
            // 'type' => $request->type,
             ])){

                $notification = array('UserMessage' =>'Your have login Successfully' , 'alert-type'=>'success' );
                return redirect()->route('AmeaToday_user-dashboard')->with($notification);

        }
        else{
            // Session::flash('error','Sorry! Try Again. It seems your login credential is not correct.');
            $notification = array('UserMessage' =>'Sorry! Try Again. It seems your login credential is not correct.' , 'alert-type'=>'error' );
            return redirect()->back()->with($notification);
        }




    }

    public function logout(){

        Auth::logout();
        // return redirect()->route('login-page');
        $notification = array('message' =>'You have logout' , 'alert-type'=>'success' );
        return redirect()->route('login-page')->with($notification);

    }

    public function forgot(){

        // dd('here');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        return view('frontend.create-password',get_defined_vars());

    }


}
