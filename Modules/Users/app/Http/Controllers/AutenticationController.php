<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AutenticationController extends Controller
{
    public function login()
    {
        return view('users::login');
    }

    public function loginPost(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($validated)) {
            return redirect('/login');
        }

        return redirect('/admin');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/login');
    }
}
