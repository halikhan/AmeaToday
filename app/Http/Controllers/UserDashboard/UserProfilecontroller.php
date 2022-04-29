<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfilecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('edit');
        $edit_data = User::find(Auth::user()->id);
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return view('user_dashboard.profile.edit',get_defined_vars())->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        // dd($request->all());
        $this->validate($request, [
            'name' => "required|max:255",
            'last_name' => "required|max:255",
            'address' => 'required',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
            'email' => 'required|email',

        ]);

        $cms = User::findOrFail($id);
        $cms->name = $request->name;
        $cms->last_name = $request->last_name;
        $cms->email = $request->email;
        $cms->address = $request->address;
        $cms->contact = $request->contact;
        // Session::flash('message','You have Updated, Successfully..!');
        // dd($cms);
        $cms->save();
        $notification = array('UserMessage' =>'Your Profile Updated Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);
        // return redirect()->route('User_Profile_edit',Auth::user()->id)->with($notification);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
