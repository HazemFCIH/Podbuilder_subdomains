<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }
    public function editProfile(){

        return view('front_dashboard.users.edit');
    }
    public function updateProfile(Request $request)
    {

        if (Hash::check($request->password,auth()->user()->password)) {
            $request->validate([
                'name' => 'required|min:4|string|max:255',
                'email' => 'required|email|string|max:255',
                'new_password' => 'confirmed',

            ]);
            $user = auth()->user();
            $user->name = $request['name'];
            $user->password = Hash::make($request['password']);
            $user->email = $request['email'];
            $user->save();
            return redirect()->route('dashboard.home');
        }else{
            return view('front_dashboard.users.edit')->withErrors(["password_not_right"=>"Your password is incorrect!"]);;
        }
    }

}
