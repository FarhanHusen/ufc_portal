<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |---------------------------------------------------------------------------
    | Login Controller
    |---------------------------------------------------------------------------
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override the authenticated method to redirect based on user role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated($request, $user)
    {
        // Cek role pengguna dan arahkan ke rute yang sesuai
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Arahkan ke dashboard admin
        }

        // Jika pengguna biasa, arahkan ke halaman pengguna biasa
        return redirect()->route('user.dashboard'); // Arahkan ke dashboard user
    }
    public function logout()
    {
        Auth::logout();  // Logout user
        return redirect('/');  // Kembali ke halaman index setelah logout
    }
}
