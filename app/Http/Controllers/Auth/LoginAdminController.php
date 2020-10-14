<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'    => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'username'    => $request->username,
            'password' => $request->password,
        ];

        if(Auth::guard('admin')->attempt($credential, $request->filled('remember'))){
            return redirect()->intended(route('admin.home'));
        }  

        //return redirect()->back()->withInput($request->only('username', 'password'));

        return $this->sendFailedLoginResponse($request);

    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
