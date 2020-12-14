<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function userType()
    {
        return view('/usertype');
    }

    public function showLoginForm()
    {
        return view('auth.adminLogin');
    }

    public function login(Request $request)
    {
        //vaildate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        //attemp to login the user in 
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, ], $request->remember)){
        // if successful, then redirect to their intended location
            
        return redirect()->intended(route('admin.dashboard'));
        };
       
        // if unsuccessful, then redirect back to the login form
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}
