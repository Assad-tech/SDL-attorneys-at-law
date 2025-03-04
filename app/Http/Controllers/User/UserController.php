<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        // User Logout
        public function logout()
        {
            Auth::logout();
            return redirect()->route('home');
        }
}


