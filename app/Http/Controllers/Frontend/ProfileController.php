<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('frontend.profile.index');
    }


    public function profile()
    {
        return view('frontend.profile.update-profile');
    }

    public function profileUpdate(Request $request)
    {
        // return $request->all();

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if($request->file('profile_photo_path'))
        {
            $file = $request->file('profile_photo_path');
            // unlink(public_path('images/user/'.$data->profile_photo_path));
            $filename = date('YmgHi').$file->getClientOriginalName();
            $file->move(public_path('images/user'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        return redirect()->route('home')->with('message','Profile Updated');
    }


    function userPassword()
    {
        return view('frontend.profile.update-password');
    }

    public function userPasswordUpdate(Request $request)
    {
        $validate = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:new_password|same:new_password'
        ]);

        $hashedPassword = Admin::find(Auth::user()->id)->password;
        if(Hash::check($request->current_password,$hashedPassword))
        {
            $admin = User::find(Auth::user()->id);
            $admin->password = Hash::make($request->new_password);
            $admin->save();

            Auth::logout();

            return redirect()->route('login')->with('message','Password Changed Successuflly');
        }
        else
        {
            return redirect()->back()->with('message','Authentication Error');
        }

    }

    public function userLogout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

}
