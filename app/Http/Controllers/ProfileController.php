<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile.profile');

    }
    public function update_avatar(Request  $request){

     //handel profile avatars upload
        if ($request->hasFile('avatar')){

            $avatar=$request->file('avatar');
            $filename= time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();
            return view('profile.profile');
        }
        else{
            return view('profile.profile');

        }

    }
}
