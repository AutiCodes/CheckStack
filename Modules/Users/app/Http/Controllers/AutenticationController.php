<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutenticationController extends Controller
{
    public function login()
    {
        return view('users::login');
    }
}
