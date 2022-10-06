<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;   
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/';


    public function create(){
        return view('auth.login');
    }

    // public function __construct(){
    //     $this->middleware('guest');
    //     $this->middleware('guest')->except('logout');   
    // }

    protected function credentials(Request $request){
        if(is_numeric($request->get('email'))){
            return ['phone' => $request->get('email'), 'password' => $request->get('password')];
        }
        return $request->only($this->username(), 'password');
    }
    
    public function adminLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function corporateLogin(Request $request)
    {
        if(Auth::guard('corporate')->attempt($request->only('email','password'),$request->filled('remember'))){
        return redirect()->route('company-details');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function verifyView(){
        if(Auth::guard('corporate')->user()){
            $users = Auth::guard('corporate')->user();
            if($users->verification == 0){
                return redirect()->route('home');
            }
        }elseif(Auth::user()){
            $users = Auth::user();
            if($users->verification == 0){
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('home');
        }
        return view('auth.verify-otp', compact('users'));
    }

    public function logout() {
        Session::flush();
        Auth::logout();  
        return Redirect('login');
    }

    public function adminLogout() {
        Session::flush();
        Auth::logout();  
        return redirect()->route('admin.login');
    }
}