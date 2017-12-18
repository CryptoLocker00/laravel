<?php

namespace App\Http\Controllers;

use App\Model\UserRole;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function showLogin()
//    {
//        return view('login');
//    }

//    public function doLogin(Request $request)
//    {
//        $rules = array(
//            'email'     => 'required|email',
//            'password' => 'required|alphaNum|min:6'
//        );
//        $this->validate($request, $rules);
//
//        if ( ! Auth::attempt($request->only(['email', 'password']))) {
//            $request->session()->flash('error', 'Password doesn\'t match.');
//
//            return back()->withInput();
//        }
//
//        return redirect('home');
//
//    }
}
