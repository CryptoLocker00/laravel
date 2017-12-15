<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use \Auth;

class LoginController extends Controller {
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    
    public function showLogin() {
        return view('login');
    }
    
    public function doLogin() {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:6'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator);
            } else {
                $userdata = array(
                    'email'     => Input::get('email'),
                    'password'  => Input::get('password')
                );
            
            if (Auth::attempt($userdata)) {
                echo 'SUCCESS!';
            } else {
                return Redirect::to('login');
            }
        }
    }
}
