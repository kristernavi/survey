<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function admin()
    {
        request()->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', request('email'))->first();
        if (!$user) {
            return redirect()->back()->withInput()
                ->withErrors(array('message' => 'These credentials do not match our records.'));
        } elseif ($user->type != 'admin' || !\Hash::check(request('password'), $user->password)) {
            return redirect()->back()->withInput()
                ->withErrors(array('message' => 'These credentials do not match our records.'));
        }
        \Auth::login($user);
        return redirect(route('admin.index'));
    }
    public function surverior()
    {
        request()->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $user = User::where('email', request('email'))->first();

        if (!$user) {
            return redirect()->back()->withInput()
                ->withErrors(array('message' => 'These credentials do not match our records.'));
        } elseif (false) {
            return redirect()->back()->withInput()
                ->withErrors(array('message' => 'These credentials do not match our records.'));
        }
        \Auth::login($user);
        return redirect(route('surverior.index'));
    }
}
