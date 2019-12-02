<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';
//    protected function redirectTo()
//    {
//        if (auth()->user()->role_id == '1'){
//            return view('admin');
//        }
//        if (auth()->user()->role_id == '2'){
//            return view('ceo');
//        }
//        if (auth()->user()->role_id == '3') {
//            return view('finance');
//        }
//        if (auth()->user()->role_id == '4'){
//            return view('supplier/index');
//        }
//        if (auth()->user()->role_id == '5'){
//            return view('sales');
//        }
//        if (auth()->user()->role_id == '6'){
//            return view('maintenance');
//        }
//        if (auth()->user()->role_id == '7'){
//            return view('customer');
//        }
//        return '/';
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
