<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirect()
    {

        return Socialite::driver('google')->redirect();
    }
}
