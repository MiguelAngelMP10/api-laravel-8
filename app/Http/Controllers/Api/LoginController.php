<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);
        //login true

        //login false
    }
    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required!email',
            'password' => 'required',
            'name' => 'required'
        ]);
    }
}