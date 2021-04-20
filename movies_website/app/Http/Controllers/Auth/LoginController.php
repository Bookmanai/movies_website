<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\False_;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('movie_admin')) {
            return redirect()->route('movies.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('show_admin')) {
            return redirect()->route('shows.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('actor_admin')) {
            return redirect()->route('actors.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('producer_admin')) {
            return redirect()->route('producers.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('user_admin')) {
            return redirect()->route('users.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('Basic')) {
            return redirect()->route('usersfront.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('Premium')) {
            return redirect()->route('usersfront.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRole('Cinematic')) {
            return redirect()->route('usersfront.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRoles(['movie_admin', 'show_admin'])) {
            return redirect()->route('movies.index');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasAnyRoles(['actor_admin', 'producer_admin'])) {
            return redirect()->route('actors.index');
        }

        else
           return redirect()->route('loginform');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
