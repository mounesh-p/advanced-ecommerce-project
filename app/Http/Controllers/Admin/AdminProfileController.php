<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminProfile()
    {
        return view('admin.profile.index');
    }

    public function profileEdit()
    {
        return view('admin.profile.edit');
    }

    public function profileUpdate(Request $request)
    {
        // return $request->all();

        $data = Admin::find(Auth::guard('admin')->user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            unlink(public_path('images/admin/' . $data->profile_photo_path));
            $filename = date('YmgHi') . $file->getClientOriginalName();
            $file->move(public_path('images/admin'), $filename);
            $data['profile_photo_path'] = 'images/admin/'.$filename;
        }
        $data->save();

        return redirect()->route('admin.profile')->with('message', 'Profile Updated');
    }


    public function adminPassword()
    {
        return view('admin.profile.admin_changepassword');
    }

    public function adminPasswordUpdate(Request $request)
    {
        $validate = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:new_password|same:new_password'
        ]);

        $hashedPassword = Admin::find(Auth::guard('admin')->user()->id)->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            $admin = Admin::find(Auth::guard('admin')->user()->id);
            $admin->password = Hash::make($request->new_password);
            $admin->save();

            Auth::logout();

            return redirect()->route('admin.logout');
        } else {
            return redirect()->back()->with('message', 'Authentication Error');
        }
    }

    public function UserIndex()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function destroy($id)
    {
        //
    }
}
